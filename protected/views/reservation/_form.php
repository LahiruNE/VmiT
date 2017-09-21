<?php
/* @var $this ReservationController */
/* @var $model Reservation */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'reservation-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'User_ID'); ?>
		<?php echo $form->textField($model,'User_ID'); ?>
		<?php echo $form->error($model,'User_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Route_ID'); ?>
		<?php echo $form->textField($model,'Route_ID'); ?>
		<?php echo $form->error($model,'Route_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Time_ID'); ?>
		<?php echo $form->textField($model,'Time_ID'); ?>
		<?php echo $form->error($model,'Time_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Reason_ID'); ?>
		<?php echo $form->textField($model,'Reason_ID'); ?>
		<?php echo $form->error($model,'Reason_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nearest_City'); ?>
		<?php echo $form->textField($model,'Nearest_City',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'Nearest_City'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->