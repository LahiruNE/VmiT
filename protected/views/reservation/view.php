<?php
/* @var $this ReservationController */
/* @var $model Reservation */

$this->breadcrumbs=array(
	'Reservations'=>array('index'),
	$model->Reservation_ID,
);

$this->menu=array(
	//array('label'=>'List Reservation', 'url'=>array('index')),
	array('label'=>'Create Reservation', 'url'=>array('create')),
	array('label'=>'Update Reservation', 'url'=>array('update', 'id'=>$model->Reservation_ID)),
	array('label'=>'Delete Reservation', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Reservation_ID),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Manage Reservation', 'url'=>array('admin')),
);
?>

<h1>My Reservation #<?php echo $model->Reservation_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
    'data'=>$model,
    'attributes'=>array(
        array('name'=>'Employee', 'value'=>$model->user->employee->Employee_Name),
        array('name'=>'Contact', 'value'=>$model->user->employee->Phone_Number),
        array('name'=>'Proj', 'value'=>!empty($model->user->project->Project_Name)?$model->user->project->Project_Name : "Not Assigned"),
        array('name'=>'Time_ID', 'value'=>$model->time->Time),
        array('name'=>'Route_ID', 'value'=>$model->route->Route_Description),
        array('name'=>'Reason_ID', 'value'=>isset($model->reason->Reason_Description)?$model->reason->Reason_Description:"Not Submitted"),
        'Nearest_City',
        'Added_Date',     
    ),
)); ?>
