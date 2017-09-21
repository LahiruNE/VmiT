<?php
/* @var $this ReasonController */
/* @var $model Reason */

$this->breadcrumbs=array(
	'Reasons'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Reasons', 'url'=>array('index')),
	array('label'=>'Manage Reasons', 'url'=>array('admin')),
);
?>

<h1>Add Reasons</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>