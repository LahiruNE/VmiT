<?php
/* @var $this UserRoleController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'User Roles',
);

$this->menu=array(
	array('label'=>'Add User Roles', 'url'=>array('create')),
	array('label'=>'Manage User Roles', 'url'=>array('admin')),
);
?>

<h1>User Roles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
