<?php
/* @var $this RequestLogController */
/* @var $model RequestLog */

$this->breadcrumbs=array(
	'Request Logs'=>array('index'),
	$model->Request_Log_ID,
);

$this->menu=array(
	array('label'=>'List RequestLog', 'url'=>array('index')),
	array('label'=>'Create RequestLog', 'url'=>array('create')),
	array('label'=>'Update RequestLog', 'url'=>array('update', 'id'=>$model->Request_Log_ID)),
	array('label'=>'Delete RequestLog', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Request_Log_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RequestLog', 'url'=>array('admin')),
);
?>

<h1>View RequestLog #<?php echo $model->Request_Log_ID; ?></h1>

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
