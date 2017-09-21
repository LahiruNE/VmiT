<?php
/* @var $this RouteController */
/* @var $model Route */

$this->breadcrumbs=array(
	'Routes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Routes', 'url'=>array('index')),
	array('label'=>'Manage Routes', 'url'=>array('admin')),
);
?>

<h1>Add Routes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>