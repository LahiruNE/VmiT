<?php
/* @var $this RouteController */
/* @var $model Route */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'route-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Route_Number'); ?>
		<?php echo $form->textField($model,'Route_Number'); ?>
		<?php echo $form->error($model,'Route_Number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Route_Description'); ?>
		<?php echo $form->textField($model,'Route_Description',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'Route_Description'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->