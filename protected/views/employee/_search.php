<?php
/* @var $this EmployeeController */
/* @var $model Employee */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Employee_ID'); ?>
		<?php echo $form->textField($model,'Employee_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Employee_Name'); ?>
		<?php echo $form->textField($model,'Employee_Name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Phone_Number'); ?>
		<?php echo $form->textField($model,'Phone_Number'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->