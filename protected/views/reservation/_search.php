<?php
/* @var $this ReservationController */
/* @var $model Reservation */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Reservation_ID'); ?>
		<?php echo $form->textField($model,'Reservation_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'User_ID'); ?>
		<?php echo $form->textField($model,'User_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Route_ID'); ?>
		<?php echo $form->textField($model,'Route_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Time_ID'); ?>
		<?php echo $form->textField($model,'Time_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Reason_ID'); ?>
		<?php echo $form->textField($model,'Reason_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nearest_City'); ?>
		<?php echo $form->textField($model,'Nearest_City',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->