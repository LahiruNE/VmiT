<?php
/* @var $this ProjectController */
/* @var $model Project */

$this->breadcrumbs=array(
	'Projects'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Projects', 'url'=>array('index')),
	array('label'=>'Manage Projects', 'url'=>array('admin')),
);
?>

<h1>Add Projects</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>