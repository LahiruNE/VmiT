<?php
/* @var $this ReasonController */
/* @var $model Reason */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Reason'); ?>
		<?php echo $form->textField($model,'Reason'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Reason_Description'); ?>
		<?php echo $form->textField($model,'Reason_Description',array('size'=>60,'maxlength'=>1024)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->