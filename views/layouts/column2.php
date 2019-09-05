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
    
    <title>PUGAR</title>
    
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
<body class="page-body" data-url="http://neon.dev" style="color:#00000">
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
                    <strong><?=  Yii::$app->user->identity->username; ?></strong>
                </a>
            </div>
            
            <div class="sui-hover inline-links animate-in"><!-- You can remove "inline-links" class to make links appear vertically, class "animate-in" will make A elements animateable when click on user profile -->             
               <a href="<?= Url::to(['klien/detail','id'=>Yii::$app->user->identity->username]); ?>">
                    <i class="fa fa-user-circle"></i>
                    <span> Detail User</span>
                </a>
                
               <a href="<?= Url::to(['konsultasi/mulai']); ?>">
                    <i class="fa fa-file-zip-o"></i>
                    <span> Proses</span>
                </a>
                
                <a href="<?= Url::to(['site/logout'])?>">
                    <i class="entypo-lock"></i>
                    Log Out
                </a>
                
                <span class="close-sui-popup">&times;</span><!-- this is mandatory -->          </div>
        </div>           
        
        
                
        
                
        <ul id="main-menu" class="">
<li>
                <a href="<?= Url::to(['konsultasi/home']); ?>">
                    <i class="fa fa-home"></i>
                    <span> Home</span>
                </a>
         
            </li>
            <li>
                        <a href="#">
                          <i class="fa fa-address-book-o "></i>
                            <span>Informasi</span>
                        </a>
                        <ul>
                            <li>
                                <a href="<?= Url::to(['klien/informasi']); ?>">
                                <i class="fa fa-address-card"></i>
                                    <span>Tentang pakar</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= Url::to(['klien/informasi3']); ?>">
                                <i class="fa fa-newspaper-o"></i>
                                    <span>Jenis-jenis garam</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= Url::to(['klien/informasi2']); ?>">
                                     <i class="fa fa-address-card-o"></i>
                                    <span>Pembuat web</span>
                                </a>
                            </li>
                        </ul>
                    </li>
<?php 
if(Yii::$app->user->identity->role=="user"){


?>
             <li>
                <a href="<?= Url::to(['konsultasi/detail']); ?>">
                    <i class="fa fa-medkit"></i>
                    <span> Riwayat konsultasi user</span>
                </a>
         
            </li>
<?php
}else{



?>
            <li>
                <a href="<?= Url::to(['klien/index']); ?>">
                    <i class="fa fa-users"></i>
                    <span> Klien</span>
                </a>
         
            </li>
            <li>
                <a href="<?= Url::to(['konsultasi/index']); ?>">
                    <i class="fa fa-medkit"></i>
                    <span> Riwayat konsultasi</span>
                </a>
         
            </li>
            


                <li>
                <a href="<?= Url::to(['rule1/index']); ?>">
                    <i class="fa fa-history"></i>
                    <span> Rule </span>
                </a>
         
            </li>
 <?php
 }
 ?>           
            <li>
                <a href="<?= Url::to(['konsultasi/mulai']); ?>">
                    <i class="fa fa-file-zip-o"></i>
                    <span> Proses</span>
                </a>
         
            </li>
          
           

             <li>
                <a href="<?= Url::to(['klien/detail','id'=>Yii::$app->user->identity->username]); ?>">
                    <i class="fa fa-user-circle"></i>
                    <span> Detail User</span>
                </a>
            </li>

            <li>
            <a href="<?= Url::to(['site/logout'])?>">
                    <i class="entypo-lock"></i>
                    Log Out
            </a>
            </li>

         </ul>
                
    </div>  
    <div class="main-content">
        
<div class="row">
    
    <!-- Profile Info and Notifications -->
    <div class="col-md-6 col-sm-8 clearfix">
        
     <!--   APLIKASI KONSULTASI GARAM-->
<h1><strong>
                    <i class="fa fa-medkit"></i>
                    <span style="color:#18217A">PUGAR</span>
                    <p><i class="fa fa-map-pin"></i>   Desa Sedayulawas, Kecamatan Brondong, Kebupaten Lamongan</p>
</strong></h1>      
                
        
    
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