<?php
/* @var $this RequestLogController */
/* @var $data RequestLog */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Request_Log_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Request_Log_ID), array('view', 'id'=>$data->Request_Log_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Employee_ID')); ?>:</b>
	<?php echo CHtml::encode($data->Employee_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Username')); ?>:</b>
	<?php echo CHtml::encode($data->Username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('User_Role_ID')); ?>:</b>
	<?php echo CHtml::encode($data->User_Role_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Project_ID')); ?>:</b>
	<?php echo CHtml::encode($data->Project_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Status')); ?>:</b>
	<?php echo CHtml::encode($data->Status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Remark')); ?>:</b>
	<?php echo CHtml::encode($data->Remark); ?>
	<br />


</div>