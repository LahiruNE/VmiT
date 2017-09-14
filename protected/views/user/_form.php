<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>
<script>
    $(document).ready(function(){
        if(<?php echo Yii::app()->user->getState('roles')?>==1){
            $("#role").show();            
        }else{
            $("#role").hide();
        }
        
    });
</script>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>    
	<p class="note">Fields with <span class="required">*</span> are required.</p>
    <table style="position: relative; margin-top: -30px;">
    <tr>
	<div class="row">
            <td><?php echo $form->labelEx($model,'Employee_ID'); ?></td>
            <td style="padding-bottom: 10px;"><?php
                $this->widget('ext.select2.ESelect2', array(
                    'model' => $model,
                    'attribute' => 'Employee_ID',
                    'data' =>CHtml::listData(Employee::model()->findAll(), 'Employee_ID', 'Employee_Name'),
                    'htmlOptions' => array(
                        'prompt' => '- Select -',
                        'id' => 'Employee_ID',
                        'style' => 'width:210px',
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
            <td><?php echo $form->labelEx($model,'Username'); ?></td>
            <td><?php echo $form->textField($model,'Username',array('size'=>32,'maxlength'=>32)); ?></td>
            <td><?php echo $form->error($model,'Username'); ?></td>
	</div>
    </tr>
    <tr>
	<div class="row">
            <td><?php echo $form->labelEx($model,'Password'); ?></td>
            <td><?php echo $form->passwordField($model,'Password',array('size'=>32,'maxlength'=>32)); ?></td>
            <td><?php echo $form->error($model,'Password'); ?></td>
	</div>
    </tr>
    <tr>
        <div class="row">
            <td><?php echo $form->labelEx($model,'Retype_Password'); ?></td>
            <td><?php echo $form->passwordField($model,'Retype_Password',array('size'=>32,'maxlength'=>32)); ?></td>
            <td><?php echo $form->error($model,'Retype_Password'); ?></td>
	</div>
    </tr>
    <tr id="role" style="display: none">
        <div class="row" >
            <td><?php echo $form->labelEx($model,'User_Role_ID'); ?></td>
            <td><?php
                $this->widget('ext.select2.ESelect2', array(
                    'model' => $model,
                    'attribute' => 'User_Role_ID',
                    'data' =>CHtml::listData(UserRole::model()->findAll(), 'User_Role_ID', 'User_Role_Name'),
                    'htmlOptions' => array(
                        'prompt' => '- Select -',
                        'id' => 'User_Role_ID',
                        'style' => 'width:210px',
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
            <td><?php echo $form->labelEx($model,'Project_ID'); ?></td>
            <td style="padding-top: 10px;"><?php
                $this->widget('ext.select2.ESelect2', array(
                    'model' => $model,
                    'attribute' => 'Project_ID',
                    'data' =>CHtml::listData(Project::model()->findAll(), 'Project_ID', 'Project_Name'),
                    'htmlOptions' => array(
                        'prompt' => '- Select -',
                        'id' => 'Project_ID',
                        'style' => 'width:210px',
                    ),
                    'options' => array(
                        'containerCssClass' => 'mainDrops',
                    ),
                )); ?>  
            </td>
            <td><?php echo $form->error($model,'Project_ID'); ?></td>
	</div>
    </tr>
    <tr>
        <td></td>
        <td>
            <div class="row buttons" style="position: relative; margin-left: -140px;">
                    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
            </div>
        </td> 
        <td></td>
    </tr>
<?php $this->endWidget(); ?>
    </table>
</div><!-- form -->