<?php
/* @var $this UserRoleController */
/* @var $data UserRole */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('User_Role_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->User_Role_ID), array('view', 'id'=>$data->User_Role_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('User_Role_Name')); ?>:</b>
	<?php echo CHtml::encode($data->User_Role_Name); ?>
	<br />


</div>