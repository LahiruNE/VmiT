<?php
/* @var $this TimeController */
/* @var $model Time */

$this->breadcrumbs=array(
	'Times'=>array('index'),
	$model->Time_ID,
);

$this->menu=array(
	array('label'=>'List Schedules', 'url'=>array('index')),
	array('label'=>'Add Schedules', 'url'=>array('create')),
	array('label'=>'Update Schedule', 'url'=>array('update', 'id'=>$model->Time_ID)),
	array('label'=>'Delete Schedule', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Time_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Schedules', 'url'=>array('admin')),
);
?>

<h1>View Time #<?php echo $model->Time_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Time_ID',
		'Time',
	),
)); ?>
