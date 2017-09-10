<?php
/* @var $this ReasonController */
/* @var $model Reason */

$this->breadcrumbs=array(
	'Reasons'=>array('index'),
	$model->Reason,
);

$this->menu=array(
	array('label'=>'List Reasons', 'url'=>array('index')),
	array('label'=>'Add Reasons', 'url'=>array('create')),
	array('label'=>'Update Reason', 'url'=>array('update', 'id'=>$model->Reason)),
	array('label'=>'Delete Reason', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Reason),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Reasons', 'url'=>array('admin')),
);
?>

<h1>View Reason #<?php echo $model->Reason; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Reason',
		'Reason_Description',
	),
)); ?>
