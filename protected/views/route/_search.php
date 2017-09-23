<?php
/* @var $this RouteController */
/* @var $model Route */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Route_Number'); ?>
		<?php
                $this->widget('ext.select2.ESelect2', array(
                    'model' => $model,
                    'attribute' => 'Route_Number',
                    'data' =>CHtml::listData(Route::model()->findAll(), 'Route_Number', 'Route_Number'),
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
		<?php echo $form->label($model,'Route_Description'); ?>
		<?php
                $this->widget('ext.select2.ESelect2', array(
                    'model' => $model,
                    'attribute' => 'Route_Description',
                    'data' =>CHtml::listData(Route::model()->findAll(), 'Route_Description', 'Route_Description'),
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