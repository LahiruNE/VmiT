<script>
    $(document).ready(function(){
        $('#prompt').on('click',function(){
            $('.signup_prompt').hide();
            $('.signup_form').show();           
        });
    });
</script>

<table style="width: 100%">
    <tr>
        <td>
            <div class="form">
                <?php 
                $this->renderPartial('application.views.site.login', array('model'=>$loginFormModel));
                ?>                
            </div>
        </td>
        <td class="signup_form" >
            <h1>Sign Up</h1>

            <p>Register with your project.</p>

            <div>
                <?php 
                $this->renderPartial('application.views.user._form', array('model'=>$newUserModel));
                ?>
            </div>            
        </td>        
    </tr>
</table>