<?php

/**
 * This is the model class for table "reservation".
 *
 * The followings are the available columns in table 'reservation':
 * @property integer $Reservation_ID
 * @property integer $User_ID
 * @property integer $Route_ID
 * @property integer $Time_ID
 * @property integer $Reason_ID
 * @property string $Nearest_City
 * @property string $Added_Date
 *
 * The followings are the available model relations:
 * @property Route $route
 * @property Time $time
 * @property Reason $reason
 * @property User $user
 */
class Reservation extends CActiveRecord
{
    public $Employee;
    public $Proj;
    public $Contact;
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
            array('User_ID, Route_ID, Time_ID, Nearest_City', 'required'),
            array('Reason_ID', 'requiredReason'),
            array('User_ID, Route_ID, Time_ID, Reason_ID', 'numerical', 'integerOnly'=>true),
            array('Nearest_City', 'length', 'max'=>32),
            array('Added_Date', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('Reservation_ID, User_ID, Route_ID, Time_ID, Reason_ID, Nearest_City, Added_Date, Employee, Contact, Proj', 'safe', 'on'=>'search'),
        );
    }


    public function requiredReason($attribute, $params)
    {
        if ( $this->Time_ID !=3 )
        {
            if ( $this->$attribute == '' )
            {
                $this->addError($attribute, 'Reason is required!');
            }
        }
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
                    'user' => array(self::BELONGS_TO, 'User', 'User_ID'),
            );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
            return array(
                'Reservation_ID' => 'Reservation',
                'User_ID' => 'User',
                'Route_ID' => 'Route',
                'Time_ID' => 'Time',
                'Reason_ID' => 'Reason',
                'Nearest_City' => 'Nearest City',
                'Added_Date' => 'Added Date',
                'Employee' => 'Employee Name',
                'Contact' => 'Contact No.',
                'Proj' => 'Project Name',
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
    public function search_user() //reservation of the current user
    {
            // @todo Please modify the following code to remove attributes that should not be searched.
        $user = Yii::app()->user->id;

        $criteria=new CDbCriteria;

        $criteria->condition = 'User_ID ='.$user;
        $criteria->compare('Reservation_ID',$this->Reservation_ID);
        $criteria->compare('User_ID',$this->User_ID);
        $criteria->compare('Route_ID',$this->Route_ID);
        $criteria->compare('Time_ID',$this->Time_ID);
        $criteria->compare('Reason_ID',$this->Reason_ID);
        $criteria->compare('Nearest_City',$this->Nearest_City,true);
        $criteria->compare('Added_Date',$this->Added_Date,true);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }

    public function search() //reservation of that day
    {
        // @todo Please modify the following code to remove attributes that should not be searched.
        $todayDate = date("Y-m-d");    
        $startOfDay = $todayDate . ' 00:00:00'; 
        $endOfDay = $todayDate . ' 23:59:59'; 
        
        $criteria=new CDbCriteria;
        $criteria->together = true;
        $criteria->with = array('user');

        $criteria->addBetweenCondition('Added_Date', $startOfDay , $endOfDay );
        $criteria->compare('user.Employee_ID',$this->Employee);
        $criteria->compare('user.Project_ID',$this->Proj);
        $criteria->compare('t.Reservation_ID',$this->Reservation_ID);
        $criteria->compare('t.User_ID',$this->User_ID);
        $criteria->compare('t.Route_ID',$this->Route_ID);
        $criteria->compare('t.Time_ID',$this->Time_ID);
        $criteria->compare('t.Reason_ID',$this->Reason_ID);
        $criteria->compare('t.Nearest_City',$this->Nearest_City,true);
        $criteria->compare('t.Added_Date',$this->Added_Date,true);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }

    public function search_history()//all history
    {
            // @todo Please modify the following code to remove attributes that should not be searched.
        $user = Yii::app()->user->id;

        $criteria=new CDbCriteria;

        $criteria->condition = 'User_ID ='.$user;
        $criteria->compare('Reservation_ID',$this->Reservation_ID);
        $criteria->compare('User_ID',$this->User_ID);
        $criteria->compare('Route_ID',$this->Route_ID);
        $criteria->compare('Time_ID',$this->Time_ID);
        $criteria->compare('Reason_ID',$this->Reason_ID);
        $criteria->compare('Nearest_City',$this->Nearest_City,true);
        $criteria->compare('Added_Date',$this->Added_Date,true);

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
