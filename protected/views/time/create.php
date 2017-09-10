<?php
/* @var $this TimeController */
/* @var $model Time */

$this->breadcrumbs=array(
	'Schedules'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Schedules', 'url'=>array('index')),
	array('label'=>'Manage Schedules', 'url'=>array('admin')),
);
?>

<h1>Add Schedules</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>