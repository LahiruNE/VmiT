<?php

/**
 * This is the model class for table "time".
 *
 * The followings are the available columns in table 'time':
 * @property integer $Time_ID
 * @property string $Time
 *
 * The followings are the available model relations:
 * @property Reservation[] $reservations
 */
class Time extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'time';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Time', 'required'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Time_ID, Time', 'safe', 'on'=>'search'),
                        array('Time','match', 'pattern'=>'/^([0-9]|0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/i', 
                                'message'=>'Input valid time format'),
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
			'reservations' => array(self::HAS_MANY, 'Reservation', 'Time_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Time_ID' => 'Time',
			'Time' => 'Time',
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

		$criteria->compare('Time_ID',$this->Time_ID);
		$criteria->compare('Time',$this->Time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Time the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
