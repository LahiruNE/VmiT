<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->User_ID=>array('view','id'=>$model->User_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'My Account', 'url'=>array('view', 'id'=>$model->User_ID)),
);
?>

<h1>Update Info <?php echo $model->User_ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>