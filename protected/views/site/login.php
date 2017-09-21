<style>
    .signup_prompt{
        position: relative !important;
        margin-left: 700px !important;
        margin-top: -200px !important;
    }
    
    #prompt{
        position: relative;
        width: 200px;
        margin-left: 25px;
        margin-top: -20px;
        cursor: pointer;
    }
    
    td{
        padding: 0px;
    }    
</style>


<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'login-form',
        'enableClientValidation'=>true,
        'clientOptions'=>array(
                'validateOnSubmit'=>true,
        ),
        'htmlOptions'=>array(
        'class'=>'log',
    ),

)); ?>    
    <table>
        <tr>
            <td><?php echo $form->error($model,'username'); ?></td>
        </tr>
        <tr>
            <td><?php echo $form->error($model,'password'); ?></td>
        </tr>
        <tr>
            <td><?php echo $form->error($model,'rememberMe'); ?></td>
        </tr>
    </table>
    
    <div class="row">
            <span class="add-on"><i class="fa fa-user" aria-hidden="true"></i></span>
            <?php echo $form->textField($model,'username',array("placeholder"=>"Username")); ?>                
    </div>

    <div class="row">
            <span class="add-on"><i class="fa fa-lock" aria-hidden="true"></i></span>
            <?php echo $form->passwordField($model,'password', array("placeholder"=>"Password")); ?>
    </div>

    <div class="row rememberMe">
        <?php echo $form->checkBox($model,'rememberMe'); ?>
        <?php echo $form->label($model,'rememberMe'); ?>
        <?php echo $form->label($model,'sign_up', array('onclick'=>'signupPrompt()', 'class'=>'sig')); ?>
    </div>

    <div class="row buttons">
            <?php echo CHtml::submitButton('Login'); ?>
    </div>

<?php $this->endWidget(); ?>
</div><!-- form -->

<style>
    .add-on{
        position: absolute;
        margin-left: -263px;
        margin-top: 8px !important;
        font-size: 20px;
    }
    
    .rememberMe{
        position: relative;
        margin-left: 0 !important; 
    }
    
    .log input[type="text"]{
        padding-left: 30px !important;
        height: 35px;
        width: 270px; 
        margin-left: 15px;
    }
    
    .log input[type="password"]{
        padding-left: 30px !important;
        height: 35px;
        width: 270px; 
        margin-left: 15px;
    }
    
    .log input[type="submit"]{
        padding-left: 10px !important;
        height: 35px;
        width: 270px; 
        margin-left: 15px;
    }
    
    .sig{
        position: relative;
        margin-left: 220px;
        margin-top: -28px;
    }
    
    
</style>