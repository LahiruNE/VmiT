<?php

class ReservationController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}
        
        public function behaviors()
        {
            return array(
                'eexcelview'=>array(
                    'class'=>'ext.eexcelview.EExcelBehavior',
                ),
            );
        }    
        

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','userAdmin','AjaxDelete','index','view','ViewAdmin','CurrentRes', 'HistoryRes', 'UserRes'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','history') ,
				'roles'=>array(Yii::app()->params['sharedService'], Yii::app()->params['admin']),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
        
        public function actionCurrentRes()
        {
            $todayDate = date("Y-m-d");    
            $startOfDay = $todayDate . ' 00:00:00'; 
            $endOfDay = $todayDate . ' 23:59:59'; 

            $criteria=new CDbCriteria;
            $criteria->addBetweenCondition('Added_Date', $startOfDay , $endOfDay );
            $model = Reservation::model()->search($criteria);
            
            $count = count($model);
            $date = date("Y-m-d G:i:s");
            $user = Yii::app()->user->employee;

                // Export it
            $this->toExcel($model,
                array(                    
                    array(
                            'name' => 'Reservation_ID',
                            'header' => 'Reservation ID',
                            'footer'=>'Total pending reservations : '.$count, 
                    ),
                    'user.Username',                    
                    array(
                            'name' => 'route.Route_Description',
                            'header' => 'Route Description',
                            'footer'=>'Downloaded date : '.$date, 
                    ),
                    'time.Time',                    
                    array(
                            'name' => 'reason.Reason_Description',
                            'header' => 'Reason Description',
                            'footer'=>'Downloaded by : '.$user, 
                    ),
                    'Nearest_City',
                    'Added_Date',
                    'user.employee.Employee_Name',
                    'user.employee.Phone_Number',
                    'user.project.Project_Name'
                ),
                'Pending_Reservation',
                array(
                    'creator' => 'VmiT',
                ),
                'Excel5'
            );
        }
        
        public function actionHistoryRes()
        {
            // Load data (scoped)
            $model = Reservation::model()->findAll();
            $count = count($model);
            $date = date("Y-m-d G:i:s");
            $user = Yii::app()->user->employee;
                // Export it
            $this->toExcel($model,
                array(                    
                    array(
                            'name' => 'Reservation_ID',
                            'header' => 'Reservation ID',
                            'footer'=>'Total reservations(whole time) : '.$count, 
                    ),
                    'user.Username',                    
                    array(
                            'name' => 'route.Route_Description',
                            'header' => 'Route Description',
                            'footer'=>'Downloaded date : '.$date, 
                    ),
                    'time.Time',                    
                    array(
                            'name' => 'reason.Reason_Description',
                            'header' => 'Reason Description',
                            'footer'=>'Downloaded by : '.$user, 
                    ),
                    'Nearest_City',
                    'Added_Date',
                    'user.employee.Employee_Name',
                    'user.employee.Phone_Number',
                    'user.project.Project_Name'
                ),
                'Reservation_History',
                array(
                    'creator' => 'VmiT',
                ),
                'Excel5'
            );
        }
        
        public function actionUserRes()
        {
            $user = Yii::app()->user->id;
            
            $criteria=new CDbCriteria;
            $criteria->condition = 't.User_ID ='.$user;
            $model = Reservation::model()->findAll($criteria);
            
            $count = count($model);
            $date = date("Y-m-d G:i:s");
            $user = Yii::app()->user->employee;

                // Export it
            $this->toExcel($model,
                array(                    
                    array(
                            'name' => 'Reservation_ID',
                            'header' => 'Reservation ID',
                            'footer'=>'Total reservations of '.$user.' : '.$count, 
                    ),
                    'user.Username',                    
                    array(
                            'name' => 'route.Route_Description',
                            'header' => 'Route Description',
                            'footer'=>'Downloaded date : '.$date, 
                    ),
                    'time.Time',                    
                    array(
                            'name' => 'reason.Reason_Description',
                            'header' => 'Reason Description',
                            'footer'=>'Downloaded by : '.$user, 
                    ),
                    'Nearest_City',
                    'Added_Date',
                    'user.employee.Employee_Name',
                    'user.employee.Phone_Number',
                    'user.project.Project_Name'
                ),
                'User_Reservations',
                array(
                    'creator' => 'VmiT',
                ),
                'Excel5'
            );
        }
        
	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
            $this->render('view',array(
                'model'=>$this->loadModel($id),
            ));
	}
        
        public function actionViewAdmin($id)
	{
            $this->render('view_admin',array(
                'model'=>$this->loadModel($id),
            ));
	}
        
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Reservation;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Reservation']))
		{
                    $model->attributes = $_POST['Reservation'];
                    $model->User_ID = Yii::app()->user->id;
                    $model->Added_Date = date("Y-m-d G:i:s");

                    if($model->save())
                    {
                        Yii::app()->user->setFlash('success', "added successfully!");
                        $this->redirect(array('view','id'=>$model->Reservation_ID));
                    }
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Reservation']))
		{
			$model->attributes=$_POST['Reservation'];
			if($model->save())
                        {
                            Yii::app()->user->setFlash('update_success', "updated successfully!");
                            $this->redirect(array('view','id'=>$model->Reservation_ID));
                        }
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}
        
        public function actionAjaxDelete()
	{
            if(isset($_POST['id']))
            {
                $this->loadModel($_POST['id'])->delete();
            }  
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Reservation');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{            
            $model=new Reservation('search');
            $model->unsetAttributes();  // clear any default values
            if(isset($_GET['Reservation']))
                    $model->attributes=$_GET['Reservation'];

            $this->render('admin',array(
                    'model'=>$model,
            ));
	}
        
        public function actionUserAdmin()
	{
            $model=new Reservation('search');
            $model->unsetAttributes();  // clear any default values
            if(isset($_GET['Reservation']))
                    $model->attributes=$_GET['Reservation'];

            $this->render('user_admin',array(
                    'model'=>$model,
            ));
	}
        
        public function actionHistory()
	{            
            $model=new Reservation('search');
            $model->unsetAttributes();  // clear any default values
            if(isset($_GET['Reservation']))
                    $model->attributes=$_GET['Reservation'];

            $this->render('history',array(
                    'model'=>$model,
            ));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Reservation the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Reservation::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Reservation $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='reservation-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
