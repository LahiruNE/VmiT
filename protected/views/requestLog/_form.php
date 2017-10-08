<?php
/* @var $this RequestLogController */
/* @var $model RequestLog */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'request-log-form',
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
		<?php echo $form->labelEx($model,'Status'); ?>
		<?php echo $form->textField($model,'Status'); ?>
		<?php echo $form->error($model,'Status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Remark'); ?>
		<?php echo $form->textField($model,'Remark',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'Remark'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->