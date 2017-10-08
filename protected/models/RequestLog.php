<?php

/**
 * This is the model class for table "request_log".
 *
 * The followings are the available columns in table 'request_log':
 * @property integer $Request_Log_ID
 * @property integer $Employee_ID
 * @property string $Username
 * @property integer $User_Role_ID
 * @property integer $Project_ID
 * @property integer $Status
 * @property string $Remark
 * @property string $Done_Date
 *
 * The followings are the available model relations:
 * @property Employee $employee
 * @property UserRole $userRole
 * @property Project $project
 */
class RequestLog extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'request_log';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Employee_ID, Username, User_Role_ID, Status', 'required'),
			array('Employee_ID, User_Role_ID, Project_ID, Status', 'numerical', 'integerOnly'=>true),
			array('Username', 'length', 'max'=>32),
			array('Remark', 'length', 'max'=>1024),
			array('Done_Date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Request_Log_ID, Employee_ID, Username, User_Role_ID, Project_ID, Status, Remark, Done_Date', 'safe', 'on'=>'search'),
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
			'employee' => array(self::BELONGS_TO, 'Employee', 'Employee_ID'),
			'userRole' => array(self::BELONGS_TO, 'UserRole', 'User_Role_ID'),
			'project' => array(self::BELONGS_TO, 'Project', 'Project_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Request_Log_ID' => 'Request Log',
			'Employee_ID' => 'Employee',
			'Username' => 'Username',
			'User_Role_ID' => 'User Role',
			'Project_ID' => 'Project',
			'Status' => 'Status',
			'Remark' => 'Remark',
			'Done_Date' => 'Done Date',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('Request_Log_ID',$this->Request_Log_ID);
		$criteria->compare('Employee_ID',$this->Employee_ID);
		$criteria->compare('Username',$this->Username,true);
		$criteria->compare('User_Role_ID',$this->User_Role_ID);
		$criteria->compare('Project_ID',$this->Project_ID);
		$criteria->compare('Status',$this->Status);
		$criteria->compare('Remark',$this->Remark,true);
		$criteria->compare('Done_Date',$this->Done_Date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
                        'sort'=>array(
                            'defaultOrder'=>'Done_Date DESC',
                            'multiSort'=>true,
                        ),  
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return RequestLog the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
