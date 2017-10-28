<?php
/* @var $this RequestLogController */
/* @var $model RequestLog */

$this->breadcrumbs=array(
	'Request Logs'=>array('index'),
	$model->Request_Log_ID,
);

$this->menu=array(
    array('label'=>'Manage RequestLog', 'url'=>array('admin')),
);
?>

<h1>View Request Log #<?php echo $model->Request_Log_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Request_Log_ID',
		'Employee_ID',
		'Username',
		'User_Role_ID',
		'Project_ID',
		'Status',
		'Remark',
	),
)); ?>
