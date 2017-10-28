<?php
/* @var $this EmployeeController */
/* @var $model Employee */

$this->breadcrumbs=array(
	'Employees'=>array('index'),
	$model->Employee_ID,
);

$this->menu=array(
	array('label'=>'Add Employees', 'url'=>array('create')),
	array('label'=>'Update Employee', 'url'=>array('update', 'id'=>$model->Employee_ID)),
	array('label'=>'Manage Employees', 'url'=>array('admin')),
);
?>

<h1>View Employee #<?php echo $model->Employee_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Employee_ID',
		'Employee_Name',
		'Phone_Number',
	),
)); ?>
