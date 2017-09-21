<?php
/* @var $this UserRoleController */
/* @var $model UserRole */

$this->breadcrumbs=array(
	'User Roles'=>array('index'),
	$model->User_Role_ID=>array('view','id'=>$model->User_Role_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List User Roles', 'url'=>array('index')),
	array('label'=>'Add User Roles', 'url'=>array('create')),
	array('label'=>'View User Role', 'url'=>array('view', 'id'=>$model->User_Role_ID)),
	array('label'=>'Manage User Roles', 'url'=>array('admin')),
);
?>

<h1>Update User Role <?php echo $model->User_Role_ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>