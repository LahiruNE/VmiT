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

    public $Retype_Password;
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
                    array('Employee_ID, Username, Password, User_Role_ID, Is_Approved, Retype_Password', 'required'),
                    array('Username', 'unique'),
                    array('Employee_ID', 'unique','message'=> 'Selected Employee has already been taken.'),
                    array('User_Role_ID, Project_ID, Is_Approved', 'numerical', 'integerOnly'=>true),
                    array('Username, Password, Retype_Password', 'length', 'max'=>32),
                    array('Retype_Password', 'compare', 'compareAttribute'=>'Password'),
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
                    'Retype_Password' =>'Retype Password',
                    'User_Role_ID' => 'User Role',
                    'Project_ID' => 'Project',
                    'Is_Approved' => 'Is Approved',
                    'sign_up' => 'Sign Up',
                    'login' => 'Log In',
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
    
    public function search_request()
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
            
            $criteria->compare('Is_Approved',0);

            return new CActiveDataProvider($this, array(
                    'criteria'=>$criteria,
            ));
    }
    
    public function sendMail()
    {        
        $to = "gihanishara926@gmail.com";
        $subject = "Sign Up Request Alert";
        
        $message = '<body itemscope itemtype="http://schema.org/EmailMessage" style="text-align:center; font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none; width: 100% !important; height: 100%; line-height: 1.6em; background-color: #f6f6f6; margin: 0;" bgcolor="#f6f6f6">

<table class="body-wrap" style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; width: 100%; background-color: #f6f6f6; margin: 0;" bgcolor="#f6f6f6"><tr style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;"><td style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0;" valign="top"></td>
        <td class="container" width="600" style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; display: block !important; max-width: 600px !important; clear: both !important; margin: 0 auto;" valign="top">
                <div class="content" style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; max-width: 600px; display: block; margin: 0 auto; padding: 20px;">
                        <table class="main" width="100%" cellpadding="0" cellspacing="0" itemprop="action" itemscope itemtype="http://schema.org/ConfirmAction" style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; border-radius: 3px; background-color: #fff; margin: 0; border: 1px solid #e9e9e9;" bgcolor="#fff"><tr style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;"><td class="content-wrap" style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 20px;" valign="top">
                                                <meta itemprop="name" content="Confirm Email" style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;" /><table width="100%" cellpadding="0" cellspacing="0" style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                                    <tr><td><image src="http://drive.google.com/uc?export=view&id=0B7cfk70CA7DjSF9LaW9lbGdMWTg"></td></tr>
                                                    <tr style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;"><td class="content-block" style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;" valign="top">
                                                                        <h2>You have a new pending sign up request.</h2> 
                                                                </td>
                                                        </tr><tr style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;"><td class="content-block" style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;" valign="top">
                                                                        Click below button to view the request.
                                                                </td>
                                                        </tr><tr style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;"><td class="content-block" itemprop="handler" itemscope itemtype="http://schema.org/HttpActionHandler" style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;" valign="top">
                                                                        <a href="'.Yii::app()->getBaseUrl(true).'/index.php?r=user/regRequest" class="btn-primary" itemprop="url" style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; color: #FFF; text-decoration: none; line-height: 2em; font-weight: bold; text-align: center; cursor: pointer; display: inline-block; border-radius: 5px; text-transform: capitalize; background-color: #348eda; margin: 0; border-color: #348eda; border-style: solid; border-width: 10px 20px;">View Requests</a>
                                                                </td>
                                                        </tr></table></td>
                                </tr></table></div>
        </td>
        <td style="font-family: Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0;" valign="top"></td>
</tr></table></body>';

        $header = "From:SignUpRequestAlert@vmit.com \r\n";
        $header .= "Cc:lahiruepa@gmail.com \r\n";
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-type: text/html\r\n";

        $retval = mail ($to,$subject,$message,$header);
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
