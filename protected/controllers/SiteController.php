<?php

class SiteController extends Controller
{
    public $layout='//layouts/column1';

    /**
     * Declares class-based actions.
     */
    public function actions()
    {
            return array(
                    // captcha action renders the CAPTCHA image displayed on the contact page
                    'captcha'=>array(
                            'class'=>'CCaptchaAction',
                            'backColor'=>0xFFFFFF,
                    ),
                    // page action renders "static" pages stored under 'protected/views/site/pages'
                    // They can be accessed via: index.php?r=site/page&view=FileName
                    'page'=>array(
                            'class'=>'CViewAction',
                    ),
            );
    }

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex()
    {
        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'
        $this->render('index');
    }
    
    public function actionTest()
    {
        
//        $cron = new Crontab('my_crontab');
//        
//        $cron->addApplicationJob('yiicmd', 'mail', array(), '30','22');
//        
//        $cron->saveCronFile();
//        $cron->saveToCrontab(); 
        
        echo Yii::app()->getBaseUrl();        
        
        exit;
        $to = "lahiruepa@gmail.com";
        $subject = "This is subject";

        $message = "<b>This is HTML message.</b>";
        $message .= "<h1>This is headline.</h1>";

        $header = "From:abc@somedomain.com \r\n";
        $header .= "Cc:afgh@somedomain.com \r\n";
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-type: text/html\r\n";

        $retval = mail ($to,$subject,$message,$header);

        if( $retval == true ) {
           echo "Message sent successfully...";
        }else {
           echo "Message could not be sent...";
        }
         
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError()
    {
            if($error=Yii::app()->errorHandler->error)
            {
                    if(Yii::app()->request->isAjaxRequest)
                            echo $error['message'];
                    else
                            $this->render('error', $error);
            }
    }

    /**
     * Displays the contact page
     */
    public function actionContact()
    {
            $model=new ContactForm;
            if(isset($_POST['ContactForm']))
            {
                    $model->attributes=$_POST['ContactForm'];
                    if($model->validate())
                    {
                            $name='=?UTF-8?B?'.base64_encode($model->name).'?=';
                            $subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
                            $headers="From: $name <{$model->email}>\r\n".
                                    "Reply-To: {$model->email}\r\n".
                                    "MIME-Version: 1.0\r\n".
                                    "Content-Type: text/plain; charset=UTF-8";

                            mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
                            Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
                            $this->refresh();
                    }
            }
            $this->render('contact',array('model'=>$model));
    }

    /**
     * Displays the login page
     */
    public function actionLogin()
    {
        $this->layout='//layouts/loginColumn';
        
        $model=new User;
        $Login_model=new LoginForm;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);
        if(isset($_POST['LoginForm'])) 
        {
            $Login_model->attributes=$_POST['LoginForm'];
                // validate user input and redirect to the previous page if valid
            if($Login_model->validate() && $Login_model->login())
            {
                $this->redirect(Yii::app()->user->returnUrl);
            }
        }

        if(isset($_POST['User'])) 
        {
            $model->attributes=$_POST['User'];
            $model->Is_Approved=0;
            $model->User_Role_ID=Yii::app()->params['staff'];

            $notHashedPassword = $_POST['User']['Password'];

            if($model->validate())
            {
                $model->Password = md5($_POST['User']['Password']);
                $model->Retype_Password = md5($_POST['User']['Retype_Password']);
            }

            if($model->save())
            {
                Yii::app()->user->setFlash('user_success', "User is added successfully!");
                $model->unsetAttributes();
                $model->Retype_Password = NULL;
                User::model()->sendMail();
            }                       
        }

        $this->render('register_login', array('loginFormModel'=>$Login_model, 'newUserModel'=>$model));

//		$model=new LoginForm;
//		// if it is ajax validation request
//		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
//		{
//			echo CActiveForm::validate($model);
//			Yii::app()->end();
//		}
//
//		// collect user input data
//		if(isset($_POST['LoginForm']))
//		{
//			$model->attributes=$_POST['LoginForm'];
//			// validate user input and redirect to the previous page if valid
//			if($model->validate() && $model->login())
//				$this->redirect(Yii::app()->user->returnUrl);
//		}
//		// display the login form
//		$this->render('login',array(
//                        'model'=>$model,
//                     ));
    }

    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout()
    {
            Yii::app()->user->logout();
            $this->redirect(Yii::app()->homeUrl);
    }
}