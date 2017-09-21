<?php
/* @var $this ReasonController */
/* @var $data Reason */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Reason')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Reason), array('view', 'id'=>$data->Reason)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Reason_Description')); ?>:</b>
	<?php echo CHtml::encode($data->Reason_Description); ?>
	<br />


</div>