<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $User_ID
 * @property integer $Employee_ID
 * @property string $Username
 * @property string $Password
 * @property integer $User_Role_ID
 * @property integer $Project_ID
 * @property integer $Is_Approved
 *
 * The followings are the available model relations:
 * @property Employee $employee
 * @property UserRole $userRole
 * @property Project $project
 */
class User extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Employee_ID, Username, Password, User_Role_ID, Is_Approved', 'required'),
			array('Employee_ID, User_Role_ID, Project_ID, Is_Approved', 'numerical', 'integerOnly'=>true),
			array('Username, Password', 'length', 'max'=>32),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('User_ID, Employee_ID, Username, Password, User_Role_ID, Project_ID, Is_Approved', 'safe', 'on'=>'search'),
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
			'User_ID' => 'User',
			'Employee_ID' => 'Employee',
			'Username' => 'Username',
			'Password' => 'Password',
			'User_Role_ID' => 'User Role',
			'Project_ID' => 'Project',
			'Is_Approved' => 'Is Approved',
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

		$criteria->compare('User_ID',$this->User_ID);
		$criteria->compare('Employee_ID',$this->Employee_ID);
		$criteria->compare('Username',$this->Username,true);
		$criteria->compare('Password',$this->Password,true);
		$criteria->compare('User_Role_ID',$this->User_Role_ID);
		$criteria->compare('Project_ID',$this->Project_ID);
		$criteria->compare('Is_Approved',$this->Is_Approved);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
