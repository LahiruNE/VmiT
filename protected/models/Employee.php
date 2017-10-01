<?php

/**
 * This is the model class for table "employee".
 *
 * The followings are the available columns in table 'employee':
 * @property integer $Employee_ID
 * @property string $Employee_Name
 * @property integer $Phone_Number
 *
 * The followings are the available model relations:
 * @property User[] $users
 */
class Employee extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'employee';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Employee_Name, Phone_Number', 'required'),
			array('Phone_Number', 'numerical', 'integerOnly'=>true),
			array('Employee_Name', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Employee_ID, Employee_Name, Phone_Number', 'safe', 'on'=>'search'),
                        array('Phone_Number','match', 'pattern'=>'/\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/', 
                                'message'=>'Invalid phone number format'),
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
			'users' => array(self::HAS_MANY, 'User', 'Employee_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Employee_ID' => 'Employee',
			'Employee_Name' => 'Employee Name',
			'Phone_Number' => 'Phone Number',
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

		$criteria->compare('Employee_ID',$this->Employee_ID);
		$criteria->compare('Employee_Name',$this->Employee_Name,true);
		$criteria->compare('Phone_Number',$this->Phone_Number);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Employee the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
