<?php

/**
 * This is the model class for table "route".
 *
 * The followings are the available columns in table 'route':
 * @property integer $Route_ID
 * @property integer $Route_Number
 * @property string $Route_Description
 *
 * The followings are the available model relations:
 * @property Reservation[] $reservations
 */
class Route extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'route';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Route_Number, Route_Description', 'required'),
			array('Route_Number', 'numerical', 'integerOnly'=>true),
			array('Route_Description', 'length', 'max'=>1024),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Route_ID, Route_Number, Route_Description', 'safe', 'on'=>'search'),
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
			'reservations' => array(self::HAS_MANY, 'Reservation', 'Route_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Route_ID' => 'Route',
			'Route_Number' => 'Route Number',
			'Route_Description' => 'Route Description',
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

		$criteria->compare('Route_ID',$this->Route_ID);
		$criteria->compare('Route_Number',$this->Route_Number);
		$criteria->compare('Route_Description',$this->Route_Description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Route the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
