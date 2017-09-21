<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>
<script>
    $(document).ready(function(){
        if(<?php echo Yii::app()->user->getState('roles')?> != ''){
            if(<?php echo Yii::app()->user->getState('roles')?>==1){
                $("#role").show();            
            }else{
                $("#role").hide();
            }
        }
        
    });
</script>

<div class="form">   
<center><h1>Sign Up</h1></center>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>        
    
    <table style="position: relative; margin-top: -30px;">
    <tr>
	<div class="row">
            <td style="padding-bottom: 10px;"><?php
                $this->widget('ext.select2.ESelect2', array(
                    'model' => $model,
                    'attribute' => 'Employee_ID',
                    'data' =>CHtml::listData(Employee::model()->findAll(), 'Employee_ID', 'Employee_Name'),
                    'htmlOptions' => array(
                        'prompt' => '- Employee Name -',
                        'id' => 'Employee_ID',
                        'style' => 'width:270px',
                    ),
                    'options' => array(
                        'containerCssClass' => 'mainDrops',
                    ),
                )); ?> 
            </td>
            <td><?php echo $form->error($model,'Employee_ID'); ?></td>
	</div>
    </tr>
    <tr>
	<div class="row">
            <td><?php echo $form->textField($model,'Username',array('class'=>'sign', 'size'=>32,'maxlength'=>32, 'placeholder'=>'Username')); ?></td>
            <td><?php echo $form->error($model,'Username'); ?></td>
	</div>
    </tr>
    <tr>
	<div class="row">
            <td><?php echo $form->passwordField($model,'Password',array('class'=>'sign','size'=>32,'maxlength'=>32, 'placeholder'=>'Password')); ?></td>
            <td><?php echo $form->error($model,'Password'); ?></td>
	</div>
    </tr>
    <tr>
        <div class="row">
            <td><?php echo $form->passwordField($model,'Retype_Password',array('class'=>'sign','size'=>32,'maxlength'=>32, 'placeholder'=>'Retype Password')); ?></td>
            <td><?php echo $form->error($model,'Retype_Password'); ?></td>
	</div>
    </tr>
    <tr id="role" style="display: none">
        <div class="row" >
            <td><?php
                $this->widget('ext.select2.ESelect2', array(
                    'model' => $model,
                    'attribute' => 'User_Role_ID',
                    'data' =>CHtml::listData(UserRole::model()->findAll(), 'User_Role_ID', 'User_Role_Name'),
                    'htmlOptions' => array(
                        'prompt' => '- User Role -',
                        'id' => 'User_Role_ID',
                        'style' => 'width:270px',
                    ),
                    'options' => array(
                        'containerCssClass' => 'mainDrops',
                    ),
                )); ?>  
            </td>
            <td><?php echo $form->error($model,'User_Role_ID'); ?></td>
	</div>
    </tr>
    <tr>
	<div class="row">
            <td style="padding-top: 10px;"><?php
                $this->widget('ext.select2.ESelect2', array(
                    'model' => $model,
                    'attribute' => 'Project_ID',
                    'data' =>CHtml::listData(Project::model()->findAll(), 'Project_ID', 'Project_Name'),
                    'htmlOptions' => array(
                        'prompt' => '- Project -',
                        'id' => 'Project_ID',
                        'style' => 'width:270px',
                    ),
                    'options' => array(
                        'containerCssClass' => 'mainDrops',
                    ),
                )); ?>   
            </td>
            <td><?php echo $form->error($model,'Project_ID'); ?></td>
	</div>
    </tr>
    <tr><td style="text-align: left; padding-top: 10px; padding-left: 230px; max-width: 150px !important;">        
            <?php echo $form->label($model,'login', array('onclick'=>'loginPrompt()')); ?>       
    </td></tr>
    <tr>
        <td>
            <div class="row buttons">
                    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
            </div>
        </td> 
        <td></td>
    </tr>
<?php $this->endWidget(); ?>
    </table>
</div><!-- form -->

<style>
    .sign{
        width: 270px;
    }
    
    input[type="submit"]{
        padding-left: 10px !important;
        height: 35px;
        width: 270px; 
        margin-left: 15px;
    }
    
</style>