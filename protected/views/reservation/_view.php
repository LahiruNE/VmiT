<?php
/* @var $this ReservationController */
/* @var $data Reservation */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Reservation_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Reservation_ID), array('view', 'id'=>$data->Reservation_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Route_ID')); ?>:</b>
	<?php echo CHtml::encode($data->Route_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Time_ID')); ?>:</b>
	<?php echo CHtml::encode($data->Time_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Reason_ID')); ?>:</b>
	<?php echo CHtml::encode($data->Reason_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nearest_City')); ?>:</b>
	<?php echo CHtml::encode($data->Nearest_City); ?>
	<br />


</div>