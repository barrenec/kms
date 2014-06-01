<?php


class Users extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Users the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return 'Users';
	}

	public function rules()
	{
		return array(
			array('firstName, lastName, memberTyp, associationMember, gender', 'required'),
			array('firstName, email, userPassword, adress', 'length', 'max'=>250),
			array('lastName', 'length', 'max'=>500),
			array('memberTyp', 'length', 'max'=>50),
			array('zip', 'length', 'max'=>8),
			array('telefon, handy', 'length', 'max'=>30),
			array('nationality', 'length', 'max'=>100),
			array('birthOfDate', 'date', 'format'=>'yyyy-MM-dd'),
			array('birthOfDate', 'validateBirthDay'),
			array('inAssociationSince', 'validateDate', 'format'=>'yyyy-MM-dd'),
			array('inAssociationUntil', 'validateDate', 'format'=>'yyyy-MM-dd'),
			array('desiredEntryDate', 'validateDate', 'format'=>'yyyy-MM-dd'),
			array('email', 'email'),
			array('email', 'unique'),
			// encrypt userpassword 
			array('userPassword', 'maskPassword', 'on'=>'insert,update'),
			
			// The following rule is used by search().
			array('userId, gender, firstName, lastName, email, userPassword, memberTyp, associationMember, insertDate, adress, zip, telefon, handy, nationality, birthOfDate', 'safe', 'on'=>'search'),
			
		);
	}

	
	public function relations()
	{
		return array(
			'tasks'=>array(self::HAS_MANY, 'Tasks', 'userid'),
			);	
	}

	public function attributeLabels()
	{
		return array(
			'userId' => 'User',
			'gender' => 'Gender',
			'firstName' => 'First Name',
			'lastName' => 'Last Name',
			'email' => 'Email',
			'userPassword' => 'User Password',
			'memberTyp' => 'Person Typ',
			'associationMember' => 'Association Member',
			'insertDate' => 'Insert Date',
			'adress' => 'Address',
			'zip' => 'Zip',
			'telefon' => 'Telefon',
			'handy' => 'Handy',
			'nationality' => 'Nationality',
			'birthOfDate' => 'Birth Of Date',
			'inAssociationSince' => 'In association since',
			'inAssociationUntil' => 'In association until',
			'desiredEntryDate' => 'Desired entry date',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('userId',$this->userId);
		$criteria->compare('firstName',$this->firstName,true);
		$criteria->compare('lastName',$this->lastName,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('userPassword',$this->userPassword,true);
		$criteria->compare('memberTyp',$this->memberTyp,true);
		$criteria->compare('associationMember',$this->associationMember);
		$criteria->compare('insertDate',$this->insertDate,true);
		$criteria->compare('adress',$this->adress,true);
		$criteria->compare('zip',$this->zip,true);
		$criteria->compare('telefon',$this->telefon,true);
		$criteria->compare('handy',$this->handy,true);
		$criteria->compare('nationality',$this->nationality,true);
		$criteria->compare('birthOfDate',$this->birthOfDate,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	
	public function setUpUserForgotPassword()
	{
		$hash = $this->generateHash();
		$expires = strtotime("+5 minutes");		
		$this->passwordResetCode = $hash;
		$this->save();
	}
	

	// ********** validation helpers functions ********** //
	
	private function generateHash()
	{
		return mb_strimwidth(hash("sha256", md5(time() 
			. md5(hash("sha512", time())))), 0, 16);
	}
	
	public function maskPassword($attribute,$params)
	{
		if(!$this->hasErrors() && strlen($this->userPassword) > 0 )
		{
			$this->userPassword = crypt($this->userPassword, Yii::app()->params['cryptPasswordSalt']);
		}
	}
	
	public function validateDate($attribute,$params)
	{
		if(strlen($this->$attribute) > 0 )
		{
			// create rule
			$newRule = CValidator::createValidator('date', $this, $attribute, $params);
			$newRule->validate($this);
		}	
		else
		{
			$this->$attribute = null;
		}
	}
	
	public function validateBirthDay($attribute,$params)
	{
		// for children is birthday a required field
		if($this->memberTyp == 'Child')
		{
			// create rule			
			$newRule = CValidator::createValidator('required', $this, $attribute, $params);
			$newRule->validate($this);
		}
		else
		{
			$this->validateDate($attribute, $params);	
		}
			
	}
	
	
	// helper function for CHtml::listData object	
	public function getUserFullName()
	{
		return $this->firstName.' '. $this->lastName;	
	}
		
	// ********** validation helpers functions ********** //
	
}