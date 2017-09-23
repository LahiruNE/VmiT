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
		<?php
                $this->widget('ext.select2.ESelect2', array(
                    'model' => $model,
                    'attribute' => 'Reason',
                    'data' =>CHtml::listData(Reason::model()->findAll(), 'Reason', 'Reason'),
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
		<?php echo $form->label($model,'Reason_Description'); ?>
		<?php
                $this->widget('ext.select2.ESelect2', array(
                    'model' => $model,
                    'attribute' => 'Reason_Description',
                    'data' =>CHtml::listData(Reason::model()->findAll(), 'Reason_Description', 'Reason_Description'),
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

<?php $this->endWidget(); ?>

</div><!-- search-form -->