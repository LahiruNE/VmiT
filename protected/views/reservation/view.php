<?php
/* @var $this ReservationController */
/* @var $model Reservation */

$this->breadcrumbs=array(
	'Reservations'=>array('index'),
	$model->Reservation_ID,
);

$this->menu=array(
	array('label'=>'List Reservation', 'url'=>array('index')),
	array('label'=>'Create Reservation', 'url'=>array('create')),
	array('label'=>'Update Reservation', 'url'=>array('update', 'id'=>$model->Reservation_ID)),
	array('label'=>'Delete Reservation', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Reservation_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Reservation', 'url'=>array('admin')),
);
?>

<h1>View Reservation #<?php echo $model->Reservation_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Reservation_ID',
		'User_ID',
		'Route_ID',
		'Time_ID',
		'Reason_ID',
		'Nearest_City',
	),
)); ?>
