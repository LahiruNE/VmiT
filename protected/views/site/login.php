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
</style>
<h1>Login</h1>

<p>Please fill out the following form with your login credentials:</p>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'login-form',
        'enableClientValidation'=>true,
        'clientOptions'=>array(
                'validateOnSubmit'=>true,
        ),
)); ?>


        <div class="row">
                <?php echo $form->labelEx($model,'username'); ?>
                <?php echo $form->textField($model,'username'); ?>
                <?php echo $form->error($model,'username'); ?>
        </div>

        <div class="row">
                <?php echo $form->labelEx($model,'password'); ?>
                <?php echo $form->passwordField($model,'password'); ?>
                <?php echo $form->error($model,'password'); ?>
        </div>

        <div class="row rememberMe">
                <?php echo $form->checkBox($model,'rememberMe'); ?>
                <?php echo $form->label($model,'rememberMe'); ?>
                <?php echo $form->error($model,'rememberMe'); ?>
        </div>

        <div class="row buttons">
                <?php echo CHtml::submitButton('Login'); ?>
        </div>

<?php $this->endWidget(); ?>
</div><!-- form -->

<!--<div class="signup_prompt">
    <span><h2>Still don't have registered?</h2></span>
    <img id="prompt" src="<?php echo Yii::app()->theme->baseUrl; ?>/img/sign-up.png"  alt="sign up">
</div>-->