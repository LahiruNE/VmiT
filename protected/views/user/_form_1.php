<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>


<div class="form">   
<center><h1>Sign Up</h1></center>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
        'enableClientValidation'=>true,
        'clientOptions'=>array(
              'validateOnSubmit'=>true,
              'afterValidate' => 'js:function(form, data, hasError) { 
                  if(hasError) {
                      
                      for(var i in data) $("#"+i).addClass("error_input");
                      return false;
                  }
                  else {
                      form.children().removeClass("error_input");
                      return true;
                  }
              }',
              'afterValidateAttribute' => 'js:function(form, attribute, data, hasError) {
                  if(hasError) $("#"+attribute.id).parent().addClass("error_input");
                      else $("#"+attribute.id).parent().removeClass("error_input"); 
              }'
          ),
)); ?>        
    
    <table style="position: relative; margin-left: 15px;">
    <tr>
        <td>
            <div class="row employee" style="padding-bottom: 10px;"><?php
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
                <td><?php echo $form->error($model,'Employee_ID'); ?></td>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="row username"><?php echo $form->textField($model,'Username',array('class'=>'sign', 'size'=>32,'maxlength'=>32, 'placeholder'=>'Username')); ?></div>
            <td><?php echo $form->error($model,'Username'); ?></td>
	</td>
    </tr>
    <tr>
	<td>
            <div class="row password"><?php echo $form->passwordField($model,'Password',array('class'=>'sign','size'=>32,'maxlength'=>32, 'placeholder'=>'Password')); ?></div>
            <td><?php echo $form->error($model,'Password'); ?></td>
	</td>
    </tr>
    <tr>
        <td>
            <div class="row retype"><?php echo $form->passwordField($model,'Retype_Password',array('class'=>'sign','size'=>32,'maxlength'=>32, 'placeholder'=>'Retype Password')); ?></div>
            <td><?php echo $form->error($model,'Retype_Password'); ?></td>
	</td>
    </tr>
    <tr>
	<td >
            <div class="row project"><?php
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
                <td><?php echo $form->error($model,'Project_ID'); ?></td>
            </div>            
	</td>
    </tr>
    <tr><td style="text-align: left; padding-top: 10px; padding-left: 217px; max-width: 150px !important;">        
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
        margin-left: 3px;
    }
    
    .error_input{
        border: 2px solid red; 
        width:274px; 
        height:35px; 
        border-radius:5px;
    }
    
</style>
