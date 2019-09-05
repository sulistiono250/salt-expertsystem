<?php


use yii\helpers\Html;
use yii\helpers\Url;

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lumino - Forms</title>
<?php

         $this->registerCssFile('@web/css/bootstrap.min.css');
         $this->registerCssFile('@web/fonts/css/font-awesome.min.css');
         $this->registerCssFile('@web/css/datepicker3.css');
         $this->registerCssFile('@web/css/styles.css');
         
                 
        ?>


<!--Icons-->
<?php
$this->registerJsFile('@web/js/lumino.glyphs.js');

?>


<style>
#<?= yii::$app->session->get('mn'); ?>{
     background-color:#e0eeee!important;
}
</style>
<?php $this->head() ?>    
</head>

<body>
<?php $this->beginBody() ?>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><span></span>Admin</a>
                <ul class="user-menu">
                    <li class="dropdown pull-right">
                        <a <a href="<?= Url::to(['site/logout'])?>" data-method="post"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Logout User</a>
                       
                    </li>
                </ul>
            </div>
                            
        </div><!-- /.container-fluid -->
    </nav>
        
    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <ul class="nav menu">
            <li id="siswa"><a href="<?= Url::to(['siswa/index']); ?>">
            <svg class="glyph stroked male user ">
            <use xlink:href="#stroked-male-user"/></svg>
            Data Siswa
            </a></li>

            <li id="bobot"><a href="<?= Url::to(['bobot/index']); ?>">
            <svg class="glyph stroked clipboard with paper">
            <use xlink:href="#stroked-clipboard-with-paper"/></svg>
            Bobot
            </a></li>


            <li id="proses"><a href="<?= Url::to(['penilaian-proses/index']); ?>">
            <svg class="glyph stroked dashboard dial">
            <use xlink:href="#stroked-dashboard-dial"/></svg>
            Proses
            </a></li>
           
 
            <li role="presentation" class="divider"></li>
            <li id="user"><a href="<?= Url::to(['login/index']); ?>">
            <svg class="glyph stroked male-user">
            <use xlink:href="#stroked-male-user"></use></svg> 
            User Login
            </a></li>
        </ul>

    </div><!--/.sidebar-->
        
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">           
      
    
                
        
        <div class="row">

          <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            
                                    <?php echo $content; ?>
        
          </div><!-- /.col -->
        </div><!-- /.row -->
        
    </div><!--/.main-->
<?php
            $this->registerJsFile('@web/js/jquery-1.11.1.min.js');
            $this->registerJsFile('@web/js/bootstrap.min.js');
            $this->registerJsFile('@web/js/chart.min.js');
            $this->registerJsFile('@web/js/chart-data.js');
            $this->registerJsFile('@web/js/easypiechart.js');
            $this->registerJsFile('@web/js/easypiechart-data.js');
            $this->registerJsFile('@web/js/bootstrap-datepicker.js');
            $this->registerJsFile('@web/js/custom.js');


?>

    <script>
        !function ($) {
            $(document).on("click","ul.nav li.parent > a > span.icon", function(){        
                $(this).find('em:first').toggleClass("glyphicon-minus");      
            }); 
            $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
        }(window.jQuery);

        $(window).on('resize', function () {
          if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
        })
        $(window).on('resize', function () {
          if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
        })
    </script>   
<?php $this->endBody() ?>    
</body>

</html>
<?php $this->endPage() ?>
