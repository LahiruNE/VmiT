<?php
/* @var $this RouteController */
/* @var $data Route */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Route_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Route_ID), array('view', 'id'=>$data->Route_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Route_Number')); ?>:</b>
	<?php echo CHtml::encode($data->Route_Number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Route_Description')); ?>:</b>
	<?php echo CHtml::encode($data->Route_Description); ?>
	<br />


</div>