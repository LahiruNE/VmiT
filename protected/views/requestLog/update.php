<?php
/* @var $this RequestLogController */
/* @var $model RequestLog */

$this->breadcrumbs=array(
	'Request Logs'=>array('index'),
	$model->Request_Log_ID=>array('view','id'=>$model->Request_Log_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List RequestLog', 'url'=>array('index')),
	array('label'=>'Create RequestLog', 'url'=>array('create')),
	array('label'=>'View RequestLog', 'url'=>array('view', 'id'=>$model->Request_Log_ID)),
	array('label'=>'Manage RequestLog', 'url'=>array('admin')),
);
?>

<h1>Update RequestLog <?php echo $model->Request_Log_ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>