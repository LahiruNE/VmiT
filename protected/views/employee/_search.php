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
		<?php
                $this->widget('ext.select2.ESelect2', array(
                    'model' => $model,
                    'attribute' => 'Employee_ID',
                    'data' =>CHtml::listData(Employee::model()->findAll(), 'Employee_ID', 'Employee_ID'),
                    'htmlOptions' => array(
                        'prompt' => '- Select -',
                        'style' => 'width:210px',   
                    ),
                    'options' => array(
                        'containerCssClass' => 'mainDrops',
                    ),
                ));                 
                ?> 
	</div>

	<div class="row">
		<?php echo $form->label($model,'Employee_Name'); ?>
		<?php
                $this->widget('ext.select2.ESelect2', array(
                    'model' => $model,
                    'attribute' => 'Employee_Name',
                    'data' =>CHtml::listData(Employee::model()->findAll(), 'Employee_Name', 'Employee_Name'),
                    'htmlOptions' => array(
                        'prompt' => '- Select -',
                        'style' => 'width:210px',   
                    ),
                    'options' => array(
                        'containerCssClass' => 'mainDrops',
                    ),
                ));                 
                ?> 
	</div>

	<div class="row">
		<?php echo $form->label($model,'Phone_Number'); ?>
		<?php echo $form->textField($model,'Phone_Number'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->