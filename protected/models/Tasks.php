<?php

/**
 * This is the model class for table "tasks".
 *
 * The followings are the available columns in table 'tasks':
 * @property integer $taksId
 * @property integer $userId
 * @property integer $workingGroupId
 * @property string $taskHeadline
 * @property string $taskDescription
 * @property string $insertDate
 * @property string $updateDate
 * @property integer $taskDuration
 * @property string $taskDurationEntity
 *
 * The followings are the available model relations:
 * @property Users $user
 * @property WorkingGroups $workingGroup
 */
class Tasks extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Tasks the static model class
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
		return 'tasks';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('userId, workingGroupId, taskHeadline, taskDateFrom', 'required'),
			array('userId, workingGroupId, taskDuration', 'numerical', 'integerOnly'=>true),
			array('taskHeadline', 'length', 'max'=>350),
			array('taskDurationEntity', 'length', 'max'=>1),
			array('taskDescription, updateDate', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('taksId, userId, workingGroupId, taskHeadline, taskDescription, insertDate, updateDate, taskDuration, taskDurationEntity', 'safe', 'on'=>'search'),
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
			'user' => array(self::BELONGS_TO, 'Users', 'userId'),
			'workingGroup' => array(self::BELONGS_TO, 'WorkingGroups', 'workingGroupId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'taksId' => 'Taks',
			'userId' => 'User',
			'workingGroupId' => 'Working Group',
			'taskHeadline' => 'Task Headline',
			'taskDescription' => 'Task Description',
			'insertDate' => 'Insert Date',
			'updateDate' => 'Update Date',
			'taskDuration' => 'Task Duration',
			'taskDurationEntity' => 'Task Duration Entity',
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

		$criteria->compare('taksId',$this->taksId);
		$criteria->compare('userId',$this->userId);
		$criteria->compare('workingGroupId',$this->workingGroupId);
		$criteria->compare('taskHeadline',$this->taskHeadline,true);
		$criteria->compare('taskDescription',$this->taskDescription,true);
		$criteria->compare('insertDate',$this->insertDate,true);
		$criteria->compare('updateDate',$this->updateDate,true);
		$criteria->compare('taskDuration',$this->taskDuration);
		$criteria->compare('taskDurationEntity',$this->taskDurationEntity,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}


	



}