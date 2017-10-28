<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
    const ERROR_USER_NOT_APPROVED=-1;
    /**
     * Authenticates a user.
     * The example implementation makes sure if the username and password
     * are both 'demo'.
     * In practical applications, this should be changed to authenticate
     * against some persistent user identity storage (e.g. database).
     * @return boolean whether authentication succeeds.
     */
    private $id;
 
    public function authenticate()
    {
        $record=User::model()->findByAttributes(array('Username'=>$this->username));
        if($record===null)
        {
            $this->errorCode=self::ERROR_USERNAME_INVALID;
        }
        else if($record->Password!==md5($this->password))
        {
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
        }
        else if($record->Is_Approved!=='1')
        {
            $this->errorCode=self::ERROR_USER_NOT_APPROVED;
        }
        else 
        {
            $this->id=$record->User_ID;
            $this->setState('roles', $record->User_Role_ID);
            $this->setState('employee', $record->employee->Employee_Name);             
            $this->errorCode=self::ERROR_NONE;
        }
        return !$this->errorCode;
    }
 
    public function getId(){
        return $this->id;
    }
}