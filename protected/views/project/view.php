<?php
/* @var $this ProjectController */
/* @var $model Project */

$this->breadcrumbs=array(
	'Projects'=>array('index'),
	$model->Project_ID,
);

$this->menu=array(
	array('label'=>'List Projects', 'url'=>array('index')),
	array('label'=>'Add Projects', 'url'=>array('create')),
	array('label'=>'Update Project', 'url'=>array('update', 'id'=>$model->Project_ID)),
	array('label'=>'Delete Project', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Project_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Projects', 'url'=>array('admin')),
);
?>

<h1>View Project #<?php echo $model->Project_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
            'Project_ID',
            'Project_Name',
            'Start_Date',
            'End_Date',
            array('name'=>'Status', 'value'=>$model->Status==0?"Ongoing":"Completed"),
	),
)); ?>
