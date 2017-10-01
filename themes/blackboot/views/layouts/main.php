<?php
<<<<<<< HEAD
    date_default_timezone_set('Asia/Colombo');
    
    Yii::app()->clientscript
            // use it when you need it!

            ->registerCssFile( Yii::app()->theme->baseUrl . '/css/bootstrap.css' )
            ->registerCssFile( Yii::app()->theme->baseUrl . '/css/bootstrap-responsive.css' )
            ->registerCssFile( Yii::app()->theme->baseUrl . '/sweetalert2/dist/sweetalert2.min.css' )
            ->registerCoreScript( 'jquery' )
            ->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-transition.js', CClientScript::POS_END )
            ->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-alert.js', CClientScript::POS_END )
            ->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-modal.js', CClientScript::POS_END )
            ->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-dropdown.js', CClientScript::POS_END )
            ->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-scrollspy.js', CClientScript::POS_END )
            ->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-tab.js', CClientScript::POS_END )
            ->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-tooltip.js', CClientScript::POS_END )
            ->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-popover.js', CClientScript::POS_END )
            ->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-button.js', CClientScript::POS_END )
            ->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-collapse.js', CClientScript::POS_END )
            ->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-carousel.js', CClientScript::POS_END )
            ->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-typeahead.js', CClientScript::POS_END )
            ->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap.min.js', CClientScript::POS_END )
            ->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap.affix.js', CClientScript::POS_END )
            ->registerScriptFile( Yii::app()->theme->baseUrl . '/js/html5shiv.js', CClientScript::POS_END )
            ->registerScriptFile( Yii::app()->theme->baseUrl . '/js/jquery.isotope.min.js', CClientScript::POS_END )
            ->registerScriptFile( Yii::app()->theme->baseUrl . '/js/jquery.prettyPhoto.js', CClientScript::POS_END )
            ->registerScriptFile( Yii::app()->theme->baseUrl . '/js/respond.min.js', CClientScript::POS_END )
            ->registerScriptFile( Yii::app()->theme->baseUrl . '/js/wow.min.js', CClientScript::POS_END )
            ->registerScriptFile( Yii::app()->theme->baseUrl . '/sweetalert2/dist/sweetalert2.min.js', CClientScript::POS_END )
            ->registerScriptFile( 'https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js', CClientScript::POS_END )
            

?>

=======
	Yii::app()->clientscript
		// use it when you need it!
		
		->registerCssFile( Yii::app()->theme->baseUrl . '/css/bootstrap.css' )
		->registerCssFile( Yii::app()->theme->baseUrl . '/css/bootstrap-responsive.css' )
		->registerCoreScript( 'jquery' )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-transition.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-alert.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-modal.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-dropdown.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-scrollspy.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-tab.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-tooltip.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-popover.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-button.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-collapse.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-carousel.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-typeahead.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap.min.js', CClientScript::POS_END )
                ->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap.affix.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/html5shiv.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/jquery.isotope.min.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/jquery.prettyPhoto.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/respond.min.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/wow.min.js', CClientScript::POS_END )
		
		
?>
>>>>>>> e4dca117e078be83bf406e9ec79e29e1ddd5544a
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
<meta name="language" content="en" />
<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!-- Le styles -->
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap-responsive.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" />

<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/animate.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/font-awesome.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/main.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/prettyPhoto.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/responsive.css" />
<!-- Le fav and touch icons -->

<style>
    #list a:hover{
        background-color: #234377 !important;        
        background-image: none;
    }
    #list a{        
        font-size: 14px;
    }
    #list li a:active{
        background-color: #234377 !important;        
        background-image: none;
    }
    .container > .navbar-collapse{
        padding: 0 !important;
    }
</style>
</head>

<body>
    <header id="header" style="margin-top: -40px !important">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="https://www.facebook.com/virtusa.colombo/?ref=br_rs"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/VirtusaCorp?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.linkedin.com/company/5140/"><i class="fa fa-linkedin"></i></a></li> 
                                <li><a href="http://www.virtusa.com/"><i class="fa fa-dribbble"></i></a></li>
                            <div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                    <i class="fa fa-search"></i>
                                </form>
                           </div>
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner" style="border-radius:0px !important;">
                    <div class="container">
<<<<<<< HEAD
                        <div class="navbar-header" style="margin-left: 50px !important;">
=======
                        <div class="navbar-header" style="margin-left: 30px !important;">
>>>>>>> e4dca117e078be83bf406e9ec79e29e1ddd5544a
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="index.html"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/logo.png"  alt="logo"></a>
                        </div>

<<<<<<< HEAD
                        <div class="collapse navbar-collapse navbar-right" style="margin-right: 30px !important;">      
=======
                        <div class="collapse navbar-collapse navbar-right" >      
>>>>>>> e4dca117e078be83bf406e9ec79e29e1ddd5544a
                            <?php $this->widget('zii.widgets.CMenu',array(
                                    'encodeLabel' => false,
                                    'submenuHtmlOptions' => array(
                                        'class' => 'dropdown-menu',
                                        'id'=> 'list',
                                    ),
                                    'htmlOptions' => array( 'class' => 'nav navbar-nav' ),
                                    'activeCssClass'	=> 'active',
                                    'items'=>array(
                                            array('label'=>'Home', 'url'=>array('/site/index')),
                                            array(
                                            'label' => 'Transport <i class="fa fa-angle-down"></i>',
                                            'url' => '#',
                                            'visible'=>Yii::app()->user->checkAccess('3'),
                                            'linkOptions'=> array(
                                                'class' => 'dropdown-toggle',
                                                'data-toggle' => 'dropdown',
                                                ),
                                            'itemOptions' => array('class'=>'dropdown'),
                                            'items' => array(
                                                    array(
<<<<<<< HEAD
                                                        'label' => 'Make Reservation',
                                                        'url' => array('/reservation/create'),
                                                    ),  
                                                    array(
                                                        'label' => 'My Reservations',
                                                        'url' => array('/reservation/userAdmin'),
                                                    ), 
                                                    array(
                                                        'label' => 'Current Reservations',
                                                        'url' => array('/reservation/admin'),
                                                    ), 
                                                    array(
                                                        'label' => 'Reservation History',
                                                        'url' => array('/reservation/history'),
                                                    ), 
=======
                                                        'label' => 'Reservation',
                                                        'url' => array('/reservation/admin'),
                                                    ),                                                    
>>>>>>> e4dca117e078be83bf406e9ec79e29e1ddd5544a
                                                )
                                            ),
                                            array('label'=>'Dinner', 'url'=>array('#'), 'visible'=>Yii::app()->user->checkAccess('3'),),    
                                            array(
                                            'label' => 'Users <i class="fa fa-angle-down"></i>',
                                            'url' => '#',
                                            'visible'=>Yii::app()->user->checkAccess('3') || Yii::app()->user->checkAccess('2'),
                                            'linkOptions'=> array(
                                                'class' => 'dropdown-toggle',
                                                'data-toggle' => 'dropdown',
                                                ),
                                            'itemOptions' => array('class'=>'dropdown'),
                                            'items' => array(
                                                    array('label'=>'My Account', 
                                                        'url'=>array('/user/view&id='.Yii::app()->user->getId()), 
                                                        'visible'=>Yii::app()->user->checkAccess('3') || Yii::app()->user->checkAccess('2'),
                                                    ),
                                                    array('label'=>'Sign Up Requests', 
                                                        'url'=>array('/user/regRequest'), 
                                                        'visible'=>Yii::app()->user->checkAccess('2'),
                                                    ), 
                                                    array('label'=>'Manage Users', 
                                                        'url'=>array('/user/admin'), 
                                                        'visible'=>Yii::app()->user->checkAccess('1'),
                                                    ),
                                                )
                                            ),                                            
                                            array(
                                            'label' => 'Master Data <i class="fa fa-angle-down"></i>',
                                            'url' => '#',
                                            'visible'=>Yii::app()->user->checkAccess('1'),
                                            'linkOptions'=> array(
                                                'class' => 'dropdown-toggle',
                                                'data-toggle' => 'dropdown',
                                                ),
                                            'itemOptions' => array('class'=>'dropdown'),
                                            'items' => array(
                                                    array(
                                                        'label' => 'Projects',
                                                        'url' => array('/project/admin'),
                                                    ),
                                                    array(
                                                        'label' => 'Employees',
                                                        'url' => array('/employee/admin'),
                                                    ),
                                                    array(
                                                        'label' => 'Routes',
                                                        'url' => array('/route/admin'),
                                                    ),                                                    
                                                    array(
                                                        'label' => 'Schedules',
                                                        'url' => array('/time/admin'),
                                                    ),
                                                    array(
                                                        'label' => 'User Roles',
                                                        'url' => array('/userRole/admin'),
                                                    ),
                                                    array(
                                                        'label' => 'Reason Codes',
                                                        'url' => array('/reason/admin'),
                                                    ),
                                                )
<<<<<<< HEAD
                                            ),    
=======
                                            ),                                        
>>>>>>> e4dca117e078be83bf406e9ec79e29e1ddd5544a
                                            array('label'=>'About Us', 'url'=>array('/site/page', 'view'=>'about')),
                                            array('label'=>'Contact Us', 'url'=>array('/site/contact')),
                                            array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                                            array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                                    ),
                            )); ?>   
                        </div>
                    </div><!--/.container-->
		</nav><!--/nav-->
	</header>	
	
	<div class="cont">
	<div class="container-fluid">
	  <?php if(isset($this->breadcrumbs)):?>
			<?php $this->widget('zii.widgets.CBreadcrumbs', array(
				'links'=>$this->breadcrumbs,
				'homeLink'=>false,
				'tagName'=>'ul',
				'separator'=>'',
				'activeLinkTemplate'=>'<li><a href="{url}">{label}</a> <span class="divider">/</span></li>',
				'inactiveLinkTemplate'=>'<li><span>{label}</span></li>',
				'htmlOptions'=>array ('class'=>'breadcrumb')
			)); ?>
		<!-- breadcrumbs -->
	  <?php endif?>
	
	<?php echo $content ?>
	
	
	</div><!--/.fluid-container-->
	</div>
    
	<footer id="footer" class="midnight-blue">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        &copy; 2017. All Rights Reserved.
                    </div>
                    <div class="col-sm-6">
                        <?php $this->widget('zii.widgets.CMenu',array(
                                'htmlOptions' => array( 'class' => 'pull-right' ),
                                'activeCssClass'=> 'active',
                                'items'=>array(
                                        array('label'=>'Home', 'url'=>array('/site/index')),
                                        //array('label'=>'Transport', 'url'=>array('/site/contact')),
                                        //array('label'=>'Dinner', 'url'=>array('/site/contact')),
                                        array('label'=>'About Us', 'url'=>array('/site/page', 'view'=>'about')),
                                        array('label'=>'Contact Us', 'url'=>array('/site/contact')),
                                        //array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                                        //array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                                ),
                        )); ?>
                    </div>
                </div>
            </div>
        </footer>
</body>
</html>
<<<<<<< HEAD
<?php 
    if(Yii::app()->user->hasFlash('res_success'))
    { 
        echo "<script>swal(
            'Success!',
            'Your reservation is added!',
            'success'
          )</script>";                        
    }
    if(Yii::app()->user->hasFlash('res_update_success'))
    { 
        echo "<script>swal(
            'Success!',
            'Your reservation is updated!',
            'success'
          )</script>";                        
    }
?>
=======
>>>>>>> e4dca117e078be83bf406e9ec79e29e1ddd5544a
