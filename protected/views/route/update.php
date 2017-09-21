<?php
/* @var $this RouteController */
/* @var $model Route */

$this->breadcrumbs=array(
	'Routes'=>array('index'),
	$model->Route_ID=>array('view','id'=>$model->Route_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Routes', 'url'=>array('index')),
	array('label'=>'Add Routes', 'url'=>array('create')),
	array('label'=>'View Route', 'url'=>array('view', 'id'=>$model->Route_ID)),
	array('label'=>'Manage Routes', 'url'=>array('admin')),
);
?>

<h1>Update Route <?php echo $model->Route_ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>