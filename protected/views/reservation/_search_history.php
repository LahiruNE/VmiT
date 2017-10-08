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
            <?php echo $form->label($model,'Employee'); ?>
            <?php
                $this->widget('ext.select2.ESelect2', array(
                    'model' => $model,
                    'attribute' => 'Employee',
                    'data' =>CHtml::listData(Employee::model()->findAll(), 'Employee_ID', 'Employee_Name'),
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
            <?php echo $form->label($model,'Proj'); ?>
            <?php
            $this->widget('ext.select2.ESelect2', array(
                'model' => $model,
                'attribute' => 'Proj',
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
            <?php echo $form->label($model,'Time_ID'); ?>
            <?php
                $this->widget('ext.select2.ESelect2', array(
                    'model' => $model,
                    'attribute' => 'Time_ID',
                    'data' =>CHtml::listData(Time::model()->findAll(), 'Time_ID', 'Time'),
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
            <?php echo $form->label($model,'Route_ID'); ?>
            <?php
                $this->widget('ext.select2.ESelect2', array(
                    'model' => $model,
                    'attribute' => 'Route_ID',
                    'data' =>CHtml::listData(Route::model()->findAll(), 'Route_ID', 'Route_Description'),
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
		<?php echo $form->label($model,'Reason_ID'); ?>
		<?php
                $this->widget('ext.select2.ESelect2', array(
                    'model' => $model,
                    'attribute' => 'Reason_ID',
                    'data' =>CHtml::listData(Reason::model()->findAll(), 'Reason', 'Reason_Description'),
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
		<?php echo $form->label($model,'Nearest_City'); ?>
		<?php echo $form->textField($model,'Nearest_City',array('size'=>32,'maxlength'=>32)); ?>
	</div>
    
        <div clss="row" style="margin-left: -15px;">
            <?php echo $form->labelEx($model,'Added_Date');?>
            <?php
            $this->widget('zii.widgets.jui.CJuiDatePicker',array(
                                'model'=>$model,							
                                'attribute'=>'Added_Date',
                                'value'=>$model->Added_Date,
                                'options'=>array(
                                'showAnim'=>'fadeIn',
                                'dateFormat'=>'yy-mm-dd',
                                'changeMonth'=>true,
                                'changeYear'=>true,
                                'yearRange'=>'1990:2099',
                                'minDate' => '1990-01-01', 
                                'maxDate' => date('Y-m-d'),
                                ),
                                'htmlOptions'=>array(
                                'style' => 'width:210px', 
                                ),
                        ));
            ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->