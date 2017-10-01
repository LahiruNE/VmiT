<?php
/* @var $this EmployeeController */
/* @var $model Employee */

$this->breadcrumbs=array(
	'Employees'=>array('index'),
	$model->Employee_ID=>array('view','id'=>$model->Employee_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Employees', 'url'=>array('index')),
	array('label'=>'Add Employees', 'url'=>array('create')),
	array('label'=>'View Employee', 'url'=>array('view', 'id'=>$model->Employee_ID)),
	array('label'=>'Manage Employees', 'url'=>array('admin')),
);
?>

<h1>Update Employee <?php echo $model->Employee_ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>