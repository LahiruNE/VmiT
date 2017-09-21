<?php
/* @var $this ProjectController */
/* @var $model Project */

$this->breadcrumbs=array(
	'Projects'=>array('index'),
	$model->Project_ID=>array('view','id'=>$model->Project_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Projects', 'url'=>array('index')),
	array('label'=>'Add Projects', 'url'=>array('create')),
	array('label'=>'View Project', 'url'=>array('view', 'id'=>$model->Project_ID)),
	array('label'=>'Manage Projects', 'url'=>array('admin')),
);
?>

<h1>Update Project <?php echo $model->Project_ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>