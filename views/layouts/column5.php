<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Sepeda" />
    <meta name="author" content="" />
    
    <title>garam</title>
    
    <?php

         $this->registerCssFile('@web/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css');
         $this->registerCssFile('@web/css/font-icons/entypo/css/entypo.css');
         $this->registerCssFile('@web/css/bootstrap.css');
         $this->registerCssFile('@web/css/neon-core.css');
         $this->registerCssFile('@web/css/neon-theme.css');
         $this->registerCssFile('@web/css/neon-forms.css');
         $this->registerCssFile('@web/css/custom.css');
         $this->registerCssFile('@web/css/font-awesome.css');
         $this->registerCssFile('@web/css/skins/blue.css');
         
   ?>

<?php
$this->registerJsFile('@web/js/jquery-1.11.0.min.js');

?>
    
<?php $this->head() ?>        
</head>
<body class="page-body" data-url="http://neon.dev">
<?php $this->beginBody() ?>
<div class="page-container">
    
    <div class="sidebar-menu">
        
            
        <header class="logo-env">
            
            <!-- logo -->
            <div class="logo">
                <a href="index.html">
                    <img src="<?= Yii::$app->request->baseUrl ?>/images/logo2.png" width="120" alt="" />
                </a>
            </div>
            
                        <!-- logo collapse icon -->
                        
            <div class="sidebar-collapse">
                <a href="#" class="sidebar-collapse-icon with-animation">

                    <i class="entypo-menu"></i>
                </a>
            </div>
            
                                    
            
            
            <div class="sidebar-mobile-menu visible-xs">
                <a href="#" class="with-animation">
                    <i class="entypo-menu"></i>
                </a>
            </div>
            
        </header>
     
                <div class="sidebar-user-info">
            
            <div class="sui-normal">
                <a href="#" class="user-link">
                    <img src="<?= Yii::$app->request->baseUrl ?>/images/thumb-1a.png" alt="" class="img-circle" />
                    
                    <span>Welcome,</span>
                    <strong>Klien area</strong>
                </a>
            </div>
            
            <div class="sui-hover inline-links animate-in"><!-- You can remove "inline-links" class to make links appear vertically, class "animate-in" will make A elements animateable when click on user profile -->             
                <a href="#">
                    <i class="entypo-pencil"></i>
                    New Page
                </a>
                
                <a href="mailbox.html">
                    <i class="entypo-mail"></i>
                    Inbox
                </a>
                
                <a href="extra-lockscreen.html">
                    <i class="entypo-lock"></i>
                    Log Off
                </a>
                
                <span class="close-sui-popup">&times;</span><!-- this is mandatory -->          </div>
        </div>           
        
        
                
        
                
        <ul id="main-menu" class="">
            <li>
                <a href="<?= Url::to(['klien/new']); ?>">
                    <i class="fa fa-users"></i>
                    <span> Pendaftaran</span>
                </a>
         
            </li>
           
         </ul>
                
    </div>  
    <div class="main-content">
        
<div class="row">
    
    <!-- Profile Info and Notifications -->
    <div class="col-md-6 col-sm-8 clearfix">
        
     <!--   APLIKASI KONSULTASI GARAM-->
<h3><strong>
                    <i class="fa fa-medkit"></i>
                    <span>Aplikasi Konsultasi Jenis Garam</span>
</strong></h3>      
                
        
    
    </div>
    
    
    <!-- Raw Links -->
    <div class="col-md-6 col-sm-4 clearfix hidden-xs">
        
        <ul class="list-inline links-list pull-right">
            
            
            
            <li class="sep"></li>
            
                        
          
            
            <li class="sep"></li>
            
            <li>
                <a  href="<?= Url::to(['site/logout'])?>" data-method="post">
                    Log Out <i class="entypo-logout right"></i>
                </a>
            </li>
        </ul>
        
    </div>
    
</div>

<hr />
     
<div class="row">
    <div class="col-md-12">
     <!-- ini isi utama  -->
     <?php echo $content; ?>
    
    </div>
</div>


<!-- Footer -->
</div>
    
</div>
    <?php
            $this->registerJsFile('@web/js/gsap/main-gsap.js');
            $this->registerJsFile('@web/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js');
            $this->registerJsFile('@web/js/bootstrap.js');
            $this->registerJsFile('@web/js/joinable.js');
            $this->registerJsFile('@web/js/resizeable.js');
            $this->registerJsFile('@web/js/neon-api.js');
            $this->registerJsFile('@web/js/bootstrap-switch.min.js');
            $this->registerJsFile('@web/js/neon-chat.js');
            $this->registerJsFile('@web/js/neon-custom.js');
            $this->registerJsFile('@web/js/neon-demo.js');
?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>    