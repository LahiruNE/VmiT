<?php
/* @var $this UserRoleController */
/* @var $model UserRole */

$this->breadcrumbs=array(
	'User Roles'=>array('index'),
	$model->User_Role_ID,
);

$this->menu=array(
	array('label'=>'Add User Roles', 'url'=>array('create')),
	array('label'=>'Update User Role', 'url'=>array('update', 'id'=>$model->User_Role_ID)),
	array('label'=>'Manage User Roles', 'url'=>array('admin')),
);
?>

<h1>View User Role #<?php echo $model->User_Role_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'User_Role_ID',
		'User_Role_Name',
	),
)); ?>
