<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;


?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Neon Admin Panel" />
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

  <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
<?php $this->head() ?>        

</head>
<body class="page-body login-page" data-url="http://neon.dev">
<?php $this->beginBody() ?>
<div class="login-container">
  
  
  <div class="login-progressbar">
    <div></div>
  </div>
  
  <div class="login-form">
    
    <div class="login-content">
      
     
     <br>
       <?php echo $content; ?>
      
      
      <div class="login-bottom-links">
        
        
        
        <br />
        
        
        
      </div>
      
    </div>
    
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
if (class_exists('yii\debug\Module')) {
    $this->off(\yii\web\View::EVENT_END_BODY, [\yii\debug\Module::getInstance(), 'renderToolbar']);
}
?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>    