<?php 
    Yii::app()->clientscript
            ->registerScriptFile( Yii::app()->theme->baseUrl . '/js/jquery.js', CClientScript::POS_END )
            ->registerScriptFile( Yii::app()->theme->baseUrl . '/js/main.js', CClientScript::POS_END )
?>

<section id="contact-info" style="position: relative; margin-top: 30px;">
    <div class="center wow fadeInDown">
        <h2>How to Reach Us?</h2>
        <p class="lead">Virtusa (pvt.) Ltd.</p>
    </div>
    <div class="gmap-area wow fadeInDown">
        <div class="container">
            <div class="row" >
                <div class="col-sm-8 text-center">
                    <div class="gmap">
                        <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.580089149679!2d79.87741064988711!3d6.940682720074832!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae259ab50ab7955%3A0xc12234faf9b0a59d!2sVirtusaPolaris+Pvt.+Ltd.!5e0!3m2!1sen!2slk!4v1504954638514" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    
                    </div>
                </div>

                <div class="col-sm-4 map-content">
                    <ul class="row">
                        <li class="col-sm-6">
                            <address>
                                <h5>Head Office</h5>
                                <p>752 Dr Danister De Silva Mawatha,<br> 
                                    Colombo 00900,<br>
                                    Sri Lanka</p>
                                <p>Phone:+94 11 4 605500 <br>
                                Web : http://www.virtusa.com/</p>
                            </address>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>  <!--/gmap_area -->