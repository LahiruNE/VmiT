<?php
/* @var $this ProjectController */
/* @var $data Project */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Project_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Project_ID), array('view', 'id'=>$data->Project_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Project_Name')); ?>:</b>
	<?php echo CHtml::encode($data->Project_Name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Start_Date')); ?>:</b>
	<?php echo CHtml::encode($data->Start_Date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('End_Date')); ?>:</b>
	<?php echo CHtml::encode($data->End_Date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Status')); ?>:</b>
	<?php echo CHtml::encode($data->Status); ?>
	<br />


</div>