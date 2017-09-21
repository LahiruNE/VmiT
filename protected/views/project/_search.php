<?php
/* @var $this ProjectController */
/* @var $model Project */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
    <div class="row">
        <?php echo $form->label($model,'Project_Name'); ?>
        <?php echo $form->textField($model,'Project_Name'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'Start_Date'); ?>
        <?php echo $form->textField($model,'Start_Date'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'End_Date'); ?>
        <?php echo $form->textField($model,'End_Date'); ?>
    </div>

    <div class="row"> 
        <?php echo $form->label($model,'Status'); ?>        
        <?php
        $this->widget('ext.select2.ESelect2', array(
            'model' => $model,
            'name' => 'Status',
            'attribute' => 'Status',
            'data' =>array(0=>'Ongoing',1=>'Completed'),
            'htmlOptions' => array(
                'prompt' => '- Select -',
                'id' => 'attribute',
                'style' => 'width:150px',                                    
            ),
            'options' => array(
                'containerCssClass' => 'mainDrops',
            ),
        )); ?>
    </div>

    <div class="row buttons" style="display: none">
        <?php echo CHtml::submitButton('Search'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->