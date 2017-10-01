<script>
    $(document).ready(function(){
        $('#prompt').on('click',function(){
            $('.signup_prompt').hide();
            $('.signup_form').show();           
        });
    });
    
    function loginPrompt(){
        $('.login_form').css('display','visible').hide().fadeIn("slow");
        $('.button').hide();
        $('#word').hide();
        $('.signup_form').hide();
    }
    
    function signupPrompt(){
        $('.signup_form').css('display','visible').hide().fadeIn("slow");
        $('.button').hide();
        $('#word').hide(); 
        $('.login_form').hide(); 
    }
</script>

<table style="width: 100%">
    <tr>
        <td style="padding: 60px;"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/logo.png"  alt="logo"></td>
    </tr>
    <tr>
        <td><center><div class="button b1" onclick="signupPrompt()">Sign Up</div></center></td>
    </tr>
    <tr>
        <td class="signup_form" style="display: none">

            <div>
                <?php 
                $this->renderPartial('application.views.user._form_1', array('model'=>$newUserModel));
                ?>
            </div>            
        </td> 
    </tr> 
    
    <div id="word" style="position: absolute; margin-left: 67px; margin-top:250px;  font-size: 15px;">Already have an account?</div>
    
    <tr>        
        <td><center><div class="button b2" onclick="loginPrompt()">Log In</div></center></td>
    </tr>
    <tr>
        <td>
            <div class="login_form" style="display: none">
                <?php 
                $this->renderPartial('application.views.site.login', array('model'=>$loginFormModel));
                ?>                
            </div>
        </td>               
    </tr>
</table>
<br><br><br><br>

<style>
    .button{
        width: 180px;
        height:50px;        
        padding: 12px;
        border-radius: 5px;
        font-size: 18px;
    }
    
    .button:hover{
        cursor: pointer; 
    }
    
    .b1{
        background-color: #406eb7;
        color: #FFF;     
        
    }
    
    .b2{
        border: 1px solid #406eb7;
        color: #406eb7;
        position: relative;
        margin-top: 55px;
    }
    
    div{
        position: relative;
    }
    
    .form{
        position: relative;
        margin-top: -20px;
        
    }
    
</style>
    