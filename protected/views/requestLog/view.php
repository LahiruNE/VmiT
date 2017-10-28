<?php
/* @var $this RequestLogController */
/* @var $model RequestLog */

$this->breadcrumbs=array(
	'Request Logs'=>array('index'),
	$model->Request_Log_ID,
);

$this->menu=array(
    array('label'=>'Manage Request Logs', 'url'=>array('admin')),
);
?>

<h1>View Request Log #<?php echo $model->Request_Log_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
            'Request_Log_ID',
            array('name' => 'Employee ID', 'value' => $model->Employee_ID),
            array('name' => 'Employee_ID', 'value' => $model->employee->Employee_Name),
            'Username',
            array('name' => 'User_Role_ID', 'value' => $model->userRole->User_Role_Name),
            array('name' => 'Project_ID', 'value' => $model->project->Project_Name),
            array('name'=> 'Status', 'value'=> $model->Status = 1 ? "Approved" : "Denied"),
            'Remark',
	),
)); ?>
