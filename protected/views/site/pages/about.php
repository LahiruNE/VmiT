<script>
    $(document).ready(function() {

	
	$("a#inline").fancybox({
		'hideOnContentClick': true
	});

	
    });
</script>

<?php 
    Yii::app()->clientscript
            ->registerScriptFile( Yii::app()->theme->baseUrl . '/js/jquery.js', CClientScript::POS_END )
            ->registerScriptFile( Yii::app()->theme->baseUrl . '/js/main.js', CClientScript::POS_END )
?>

<style>
    #services {
        background: #000 url(<?php echo Yii::app()->theme->baseUrl; ?>/img/services/bg_services.png);
        background-size: cover;
    }
</style>


    <section id="feature" class="transparent-bg">
        <div class="container">
            <div class="clients-area center wow fadeInDown">
                <h2>Our Team</h2>
            </div>

            <div class="row">
                <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">
                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/Mrkapila.jpg" class="img-circle" alt="">
                        <h4><span>-Kapila /</span>  QA</h4>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">
                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/MsMaleen.jpg" class="img-circle" alt="">
                        <h4><span>-Maleen /</span>  Shared Services</h4>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">
                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/Mr Dilshan.jpg" class="img-circle" alt="">
                        <h4><span>-Dilshan /</span>  Admin</h4>
                    </div>
                </div>
           </div>

        </div><!--/.container-->       
    </section><!--/#feature-->
    
    <section id="services" class="service-item">
        <br><br>
	   <div class="container">
            <div class="center wow fadeInDown">
                <h2>Our Projects</h2>
                <p class="lead">View our ongoing and recently completed projects.</p>
            </div>
               <center>
                   <div  style="position:relative;">
                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown" style="width:320px !important; height:170px !important; margin-left: 200px">
                        <div class="pull-left">
                            <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl; ?>/img/services/services5.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Ongoing <br>Projects</h3>
                            <p>View details</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown" style="width:320px !important; height:170px !important; margin-left: 200px">
                        <div class="pull-left">
                            <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl; ?>/img/services/services2.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Completed Projects</h3>
                            <p>View details</p>
                        </div>
                    </div>
                </div>   
                
            </div><!--/.row--></center>
        </div><!--/.container-->
    </section><!--/#services-->
    
    
