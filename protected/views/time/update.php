<?php
/* @var $this TimeController */
/* @var $model Time */

$this->breadcrumbs=array(
	'Times'=>array('index'),
	$model->Time_ID=>array('view','id'=>$model->Time_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Schedules', 'url'=>array('index')),
	array('label'=>'Add Schedules', 'url'=>array('create')),
	array('label'=>'View Schedule', 'url'=>array('view', 'id'=>$model->Time_ID)),
	array('label'=>'Manage Schedules', 'url'=>array('admin')),
);
?>

<h1>Update Time <?php echo $model->Time_ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>