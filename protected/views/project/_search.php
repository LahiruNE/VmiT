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
        <?php
            $this->widget('ext.select2.ESelect2', array(
                'model' => $model,
                'attribute' => 'Project_Name',
                'data' =>CHtml::listData(Project::model()->findAll(), 'Project_Name', 'Project_Name'),
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
        <?php echo $form->label($model,'Start_Date'); ?>
        <?php Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
            $this->widget('CJuiDateTimePicker',array(
                'model'=>$model, //Model object
                'attribute'=>'Start_Date', //attribute name
                'mode'=>'date', //use "time","date" or "datetime" (default)   
                'language' => 'en',
                'options'=>array(
                    'dateFormat'=>'yy-mm-dd',
                    'changeMonth'=>true,
                    'changeYear'=>true,
                    'yearRange'=>'1990:2099',
                    'minDate' => '1990-01-01', 
                    'maxDate' => date('Y-m-d'),
                ) // jquery plugin options
            ));
        ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'End_Date'); ?>
        <?php Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
            $this->widget('CJuiDateTimePicker',array(
                'model'=>$model, //Model object
                'attribute'=>'End_Date', //attribute name
                'mode'=>'date', //use "time","date" or "datetime" (default)   
                'language' => 'en',
                'options'=>array(
                    'dateFormat'=>'yy-mm-dd',
                    'changeMonth'=>true,
                    'changeYear'=>true,
                    'yearRange'=>'1990:2099',
                    'minDate' => '1990-01-01', 
                    'maxDate' => date('Y-m-d'),
                ) // jquery plugin options
            ));
        ?>
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
                'style' => 'width:210px',                                    
            ),
            'options' => array(
                'containerCssClass' => 'mainDrops',
            ),
        )); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->