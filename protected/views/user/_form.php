<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Employee_ID'); ?>
		<?php echo $form->textField($model,'Employee_ID'); ?>
		<?php echo $form->error($model,'Employee_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Username'); ?>
		<?php echo $form->textField($model,'Username',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'Username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Password'); ?>
		<?php echo $form->passwordField($model,'Password',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'Password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'User_Role_ID'); ?>
		<?php echo $form->textField($model,'User_Role_ID'); ?>
		<?php echo $form->error($model,'User_Role_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Project_ID'); ?>
		<?php echo $form->textField($model,'Project_ID'); ?>
		<?php echo $form->error($model,'Project_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Is_Approved'); ?>
		<?php echo $form->textField($model,'Is_Approved'); ?>
		<?php echo $form->error($model,'Is_Approved'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->