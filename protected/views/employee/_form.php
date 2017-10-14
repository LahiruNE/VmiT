<?php
/* @var $this EmployeeController */
/* @var $model Employee */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'employee-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>
        
        <div class="row">
		<?php echo $form->labelEx($model,'Employee_ID'); ?>
		<?php echo $form->textField($model,'Employee_ID',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Employee_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Employee_Name'); ?>
		<?php echo $form->textField($model,'Employee_Name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Employee_Name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Phone_Number'); ?>
		<?php echo $form->textField($model,'Phone_Number', array('placeholder'=>'07xxxxxxxx')); ?>
		<?php echo $form->error($model,'Phone_Number'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->