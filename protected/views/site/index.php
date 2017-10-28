<style>
    #main-slider h1{
        color: #fff;
    }
    
    #main-slider{
        position: relative !important;
        margin-left: -20px !important;
        margin-right: -20px !important;
        margin-bottom: -40px !important;
        
    }
</style>

<script>
    $(document).ready(function(){
        setTimeout(function(){
            setInterval(function(){
                $('.next').get(0).click(); 
            },5000);
        },1000);
    });
</script>

<section id="main-slider" class="no-margin">
    <div class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#main-slider" data-slide-to="0" class="active"></li>
            <li data-target="#main-slider" data-slide-to="1"></li>
            <li data-target="#main-slider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">

            <div class="item active" style="background-image: url(<?php echo Yii::app()->theme->baseUrl; ?>/img/slider/bg1.jpg)">
                <div class="container">
                    <div class="row slide-margin">
                        <div class="col-sm-6">
                            <div class="carousel-content">
                                <h1 class="animation animated-item-1">PASSION</h1>
                                <h2 class="animation animated-item-2">To inspire our global teams to deliver extraordinary results</h2>
                            </div>
                        </div>

                        <div class="col-sm-6 hidden-xs animation animated-item-4">
                            <div class="slider-img">
                                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/slider/img1.png" class="img-responsive">
                            </div>
                        </div>

                    </div>
                </div>
            </div><!--/.item-->

            <div class="item" style="background-image: url(<?php echo Yii::app()->theme->baseUrl; ?>/img/slider/bg2.jpg)">
                <div class="container">
                    <div class="row slide-margin">
                        <div class="col-sm-6">
                            <div class="carousel-content">
                                <h1 class="animation animated-item-1">INNOVATION</h1>
                                <h2 class="animation animated-item-2">Apply intellectual curiosity to reimagine better business outcomes for our clients</h2>
                            </div>
                        </div>

                        <div class="col-sm-6 hidden-xs animation animated-item-4">
                            <div class="slider-img">
                                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/slider/img2.png" class="img-responsive">
                            </div>
                        </div>

                    </div>
                </div>
            </div><!--/.item-->

            <div class="item" style="background-image: url(<?php echo Yii::app()->theme->baseUrl; ?>/img/slider/bg3.jpg)">
                <div class="container">
                    <div class="row slide-margin">
                        <div class="col-sm-6">
                            <div class="carousel-content">
                                <h1 class="animation animated-item-1">RESPECT</h1>
                                <h2 class="animation animated-item-2">Protect our environment, honor our diversity and treat everyone with dignity</h2>
                            </div>
                        </div>
                        <div class="col-sm-6 hidden-xs animation animated-item-4">
                            <div class="slider-img">
                                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/slider/img3.png" class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
            
        </div><!--/.carousel-inner-->
    </div><!--/.carousel-->
    <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
        <i class="fa fa-chevron-left"></i>
    </a>
    <a class="next hidden-xs" href="#main-slider" data-slide="next">
        <i class="fa fa-chevron-right"></i>
    </a>
</section><!--/#main-slider-->