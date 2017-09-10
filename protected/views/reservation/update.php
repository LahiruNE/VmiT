<?php
/* @var $this ReservationController */
/* @var $model Reservation */

$this->breadcrumbs=array(
	'Reservations'=>array('index'),
	$model->Reservation_ID=>array('view','id'=>$model->Reservation_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Reservation', 'url'=>array('index')),
	array('label'=>'Create Reservation', 'url'=>array('create')),
	array('label'=>'View Reservation', 'url'=>array('view', 'id'=>$model->Reservation_ID)),
	array('label'=>'Manage Reservation', 'url'=>array('admin')),
);
?>

<h1>Update Reservation <?php echo $model->Reservation_ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>