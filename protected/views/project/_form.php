<?php
/* @var $this ProjectController */
/* @var $model Project */
/* @var $form CActiveForm */
?>
<script>
    $(document).ready(function (){
        $('#status').on("change", function() { 
            if($('#status').val()==1){
                $('#compDate').show();
            }else{
                $('#compDate').hide();
            }            
        });
    });
</script>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'project-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php //echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Project_Name'); ?>
		<?php echo $form->textField($model,'Project_Name'); ?>
		<?php echo $form->error($model,'Project_Name'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($model,'Status'); ?>
                <?php
                $this->widget('ext.select2.ESelect2', array(
                    'model' => $model,
                    'attribute' => 'Status',
                    'data' =>array(0=>'Ongoing', 1=>'Completed'),
                    'htmlOptions' => array(
                        'prompt' => '- Select -',
                        'id' => 'status',
                        'style' => 'width:210px',
                    ),
                    'options' => array(
                        'containerCssClass' => 'mainDrops',
                    ),
                )); ?>   
		<?php echo $form->error($model,'Status'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'Start_Date'); ?>
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
		<?php echo $form->error($model,'Start_Date'); ?>
	</div>

        <div class="row" id="compDate" style="display: none">
		<?php echo $form->labelEx($model,'End_Date'); ?>
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
		<?php echo $form->error($model,'End_Date'); ?>
	</div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->