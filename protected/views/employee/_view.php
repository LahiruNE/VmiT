<?php
/* @var $this EmployeeController */
/* @var $data Employee */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Employee_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Employee_ID), array('view', 'id'=>$data->Employee_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Employee_Name')); ?>:</b>
	<?php echo CHtml::encode($data->Employee_Name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Phone_Number')); ?>:</b>
	<?php echo CHtml::encode($data->Phone_Number); ?>
	<br />


</div>