<?php
/* @var $this RequestLogController */
/* @var $model RequestLog */

$this->breadcrumbs=array(
	'Request Logs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RequestLog', 'url'=>array('index')),
	array('label'=>'Manage RequestLog', 'url'=>array('admin')),
);
?>

<h1>Create RequestLog</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>