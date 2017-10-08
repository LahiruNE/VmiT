<?php
/* @var $this RequestLogController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Request Logs',
);

$this->menu=array(
	array('label'=>'Create RequestLog', 'url'=>array('create')),
	array('label'=>'Manage RequestLog', 'url'=>array('admin')),
);
?>

<h1>Request Logs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
