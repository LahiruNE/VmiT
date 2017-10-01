<?php
/* @var $this ReservationController */
/* @var $model Reservation */
/* @var $form CActiveForm */
$time = date("G:i:s");
?>



<?php
if(strtotime($time)>Yii::app()->params['lockTime'])
{ ?>
    <div class="timeErr">
        <span>You cannot either add or update reservations after 4p.m.</span>
    </div>
    
<?php } ?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'reservation-form',
	'enableClientValidation'=>true,
        'clientOptions'=>array(
            'validateOnSubmit'=>true,
        ),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>
        <table>
            <tr>
                <td><?php echo $form->error($model,'Route_ID'); ?></td>
            </tr>
            <tr>
                <td><?php echo $form->error($model,'Time_ID'); ?></td>
            </tr>
            <tr>
                <td><?php echo $form->error($model,'Reason_ID'); ?></td>
            </tr>
            <tr>
                <td><?php echo $form->error($model,'Nearest_City'); ?></td>
            </tr>
        </table>    
        
	<div class="row">
		<?php echo $form->labelEx($model,'Route_ID'); ?>
		<?php
                $this->widget('ext.select2.ESelect2', array(
                    'model' => $model,
                    'attribute' => 'Route_ID',
                    'data' =>CHtml::listData(Route::model()->findAll(), 'Route_ID', 'Route_Description'),
                    'htmlOptions' => array(
                        'prompt' => '- Select -',
                        'style' => 'width:210px', 
                        'disabled'=>(strtotime($time)>Yii::app()->params['lockTime'])?'disabled':false
                    ),
                    'options' => array(
                        'containerCssClass' => 'mainDrops',
                    ),
                ));                 
                ?> 
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Time_ID'); ?>
		<?php
                $this->widget('ext.select2.ESelect2', array(
                    'model' => $model,
                    'attribute' => 'Time_ID',
                    'data' =>CHtml::listData(Time::model()->findAll(), 'Time_ID', 'Time'),
                    'htmlOptions' => array(
                        'id' => 'time',
                        'prompt' => '- Select -',
                        'style' => 'width:210px',
                        'onchange' => 'showReason(this.value)',
                        'disabled'=>(strtotime($time)>Yii::app()->params['lockTime'])?'disabled':false
                    ),
                    'options' => array(
                        'containerCssClass' => 'mainDrops',
                    ),
                ));                 
                ?> 
	</div>

        <div class="row reason" style="display: none">
		<?php echo $form->labelEx($model,'Reason_ID'); ?>
		<?php
                $this->widget('ext.select2.ESelect2', array(
                    'model' => $model,
                    'attribute' => 'Reason_ID',
                    'data' =>CHtml::listData(Reason::model()->findAll(), 'Reason', 'Reason_Description'),
                    'htmlOptions' => array(
                        'prompt' => '- Select -',
                        'style' => 'width:210px', 
                        'disabled'=>(strtotime($time)>Yii::app()->params['lockTime'])?'disabled':false
                    ),
                    'options' => array(
                        'containerCssClass' => 'mainDrops',
                    ),
                ));                 
                ?> 
		
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nearest_City'); ?>
		<?php echo $form->textField($model,'Nearest_City',array('size'=>32,'maxlength'=>32, 'disabled'=>(strtotime($time)>Yii::app()->params['lockTime'])?'disabled':false)); ?>		
	</div> 

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('disabled'=>(strtotime($time)>Yii::app()->params['lockTime'])?'disabled':false)); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<script>
    
    
$(document).ready(function(){
    <?php 
    if($model->Reason_ID!='')
    {?>
        $('.reason').show();        
   <?php }else{ ?>
        $('.reason').hide();  
   <?php } ?>    
       
       
       if($('time').val() != '')
       {
           $('.reason').show();
       }
});  
    
function showReason(val){
    if(val != 3){
        $('.reason').show();
    }else{
        $('.reason').hide();
    }
}

</script>


<style>
    .timeErr{
        position: absolute;
        margin-left: 450px;
        margin-top: 180px;
        width: 410px;
        padding: 10px;
        font-size: 14px;
        border-radius: 5px;
        background-color: rgba(204, 83, 83,0.3);    
    }
</style>