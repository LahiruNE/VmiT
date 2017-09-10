<?php

/**
 * This is the model class for table "reservation".
 *
 * The followings are the available columns in table 'reservation':
 * @property integer $Reservation_ID
 * @property integer $Route_ID
 * @property integer $Time_ID
 * @property integer $Reason_ID
 * @property string $Nearest_City
 *
 * The followings are the available model relations:
 * @property Route $route
 * @property Time $time
 * @property Reason $reason
 */
class Reservation extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'reservation';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Route_ID, Time_ID, Reason_ID, Nearest_City', 'required'),
			array('Route_ID, Time_ID, Reason_ID', 'numerical', 'integerOnly'=>true),
			array('Nearest_City', 'length', 'max'=>32),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Reservation_ID, Route_ID, Time_ID, Reason_ID, Nearest_City', 'safe', 'on'=>'search'),
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
			'route' => array(self::BELONGS_TO, 'Route', 'Route_ID'),
			'time' => array(self::BELONGS_TO, 'Time', 'Time_ID'),
			'reason' => array(self::BELONGS_TO, 'Reason', 'Reason_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Reservation_ID' => 'Reservation',
			'Route_ID' => 'Route',
			'Time_ID' => 'Time',
			'Reason_ID' => 'Reason',
			'Nearest_City' => 'Nearest City',
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

		$criteria->compare('Reservation_ID',$this->Reservation_ID);
		$criteria->compare('Route_ID',$this->Route_ID);
		$criteria->compare('Time_ID',$this->Time_ID);
		$criteria->compare('Reason_ID',$this->Reason_ID);
		$criteria->compare('Nearest_City',$this->Nearest_City,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Reservation the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
