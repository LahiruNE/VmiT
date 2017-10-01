<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->User_ID,
);

$this->menu=array(
	array('label'=>'Update Info', 'url'=>array('update', 'id'=>$model->User_ID)),
);
?>

<h1>View User #<?php echo $model->User_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
            array('name'=>'Employee_ID', 'value'=> $model->employee->Employee_Name),
            'Username',
            'Password',
            array('name'=>'User_Role_ID', 'value'=> $model->userRole->User_Role_Name),
            array('name'=>'Project_ID', 'value'=> isset($model->project->Project_Name)?$model->project->Project_Name:'NULL', 'visible'=>$model->Project_ID!=''?true:false),
            array('name'=>'Is_Approved', 'value'=> $model->Is_Approved==1?"Approved":"Not Approved"),
    ),
)); ?>
