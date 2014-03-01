<?php

/**
 * This is the model class for table "WorkingGroupsMembers".
 *
 * The followings are the available columns in table 'WorkingGroupsMembers':
 * @property integer $id
 * @property integer $userId
 * @property integer $WorkingGroupId
 * @property integer $workerInGroupActive
 * @property string $workerInGroupSince
 * @property string $workerInGroupUntil
 *
 * The followings are the available model relations:
 * @property WorkingGroups $workingGroup
 * @property Users $user
 */
class WorkingGroupsMembers extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return WorkingGroupsMembers the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'WorkingGroupsMembers';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('userId, WorkingGroupId', 'required'),
			array('userId, WorkingGroupId, workerInGroupActive', 'numerical', 'integerOnly'=>true),
			array('workerInGroupSince, workerInGroupUntil', 'safe'),
			array('userId', 'validateUserAndGroupAreUnique', 'on'=>'insert'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, userId, WorkingGroupId, workerInGroupActive, workerInGroupSince, workerInGroupUntil', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'workingGroup' => array(self::BELONGS_TO, 'WorkingGroups', 'WorkingGroupId'),
			'user' => array(self::BELONGS_TO, 'Users', 'userId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'userId' => 'User',
			'WorkingGroupId' => 'Working Group',
			'workerInGroupActive' => 'Worker In Group Active',
			'workerInGroupSince' => 'Worker In Group Since',
			'workerInGroupUntil' => 'Worker In Group Until',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('userId',$this->userId);
		$criteria->compare('WorkingGroupId',$this->WorkingGroupId);
		$criteria->compare('workerInGroupActive',$this->workerInGroupActive);
		$criteria->compare('workerInGroupSince',$this->workerInGroupSince,true);
		$criteria->compare('workerInGroupUntil',$this->workerInGroupUntil,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	// ********** validation helpers functions ********** //
	public function validateUserAndGroupAreUnique()
	{	
		
		$c = new CDbCriteria;
		// $c->order = "";
		// $c->group = "";
		$c->condition="userId=:a and WorkingGroupId=:b";
		$c->params=array(":a"=>$this->userId, ':b'=>$this->WorkingGroupId);
		
		$check = $this->findAll($c);
		
		if(count($check)>0)
		{
			$this->addError('dumpi', 'This user is allready in this workinggroup');

		}
	}
	// ********** validation helpers functions ********** //
	
	
	
	
}