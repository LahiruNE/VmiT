<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('User_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->User_ID), array('view', 'id'=>$data->User_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Employee_ID')); ?>:</b>
	<?php echo CHtml::encode($data->Employee_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Username')); ?>:</b>
	<?php echo CHtml::encode($data->Username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Password')); ?>:</b>
	<?php echo CHtml::encode($data->Password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('User_Role_ID')); ?>:</b>
	<?php echo CHtml::encode($data->User_Role_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Project_ID')); ?>:</b>
	<?php echo CHtml::encode($data->Project_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Is_Approved')); ?>:</b>
	<?php echo CHtml::encode($data->Is_Approved); ?>
	<br />


</div>