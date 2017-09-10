<?php
/* @var $this ReasonController */
/* @var $model Reason */

$this->breadcrumbs=array(
	'Reasons'=>array('index'),
	$model->Reason=>array('view','id'=>$model->Reason),
	'Update',
);

$this->menu=array(
	array('label'=>'List Reasons', 'url'=>array('index')),
	array('label'=>'Add Reasons', 'url'=>array('create')),
	array('label'=>'View Reason', 'url'=>array('view', 'id'=>$model->Reason)),
	array('label'=>'Manage Reasons', 'url'=>array('admin')),
);
?>

<h1>Update Reason <?php echo $model->Reason; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>