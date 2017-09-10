<?php
/* @var $this TimeController */
/* @var $data Time */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Time_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Time_ID), array('view', 'id'=>$data->Time_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Time')); ?>:</b>
	<?php echo CHtml::encode($data->Time); ?>
	<br />


</div>