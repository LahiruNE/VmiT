<?php
/* @var $this RouteController */
/* @var $model Route */

$this->breadcrumbs=array(
	'Routes'=>array('index'),
	$model->Route_ID,
);

$this->menu=array(
	array('label'=>'Add Routes', 'url'=>array('create')),
	array('label'=>'Update Route', 'url'=>array('update', 'id'=>$model->Route_ID)),
	array('label'=>'Manage Routes', 'url'=>array('admin')),
);
?>

<h1>View Route #<?php echo $model->Route_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Route_ID',
		'Route_Number',
		'Route_Description',
	),
)); ?>
