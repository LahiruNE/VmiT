<?php
/* @var $this UserRoleController */
/* @var $model UserRole */

$this->breadcrumbs=array(
	'User Roles'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List User Roles', 'url'=>array('index')),
	array('label'=>'Manage User Roles', 'url'=>array('admin')),
);
?>

<h1>Add User Role</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>