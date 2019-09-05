<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

        
<?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

<h1 style="color:#858a91">WELCOME</h1>

        <div class="form-group">
          
          <div class="input-group">
            <div class="input-group-addon">
              <i class="entypo-user"></i>
            </div>
            <?=$form->field($model, 'username')->textInput(['autofocus' => true])->input('username', ['placeholder' => "username"])->label(false)->error(false); ?>

            

          </div>
          
        </div>
        
        <div class="form-group">
          
          <div class="input-group">
            <div class="input-group-addon">
              <i class="entypo-key"></i>
            </div>
            
<?= $form->field($model, 'password')->passwordInput()->input('password', ['placeholder' => "password"])->label(false)->error(false); ?>
          </div>
        
        </div>
        
        <div class="form-group">
          <button type="submit" class="btn btn-primary btn-block btn-login">
            <i class="entypo-login"></i>
            Login In
          </button>
        </div>
        <div class="form-group">
          <em>- or -</em>
        </div>
         
         <div class="form-group">
         <a href="<?= Url::to(['klien/new']); ?>">
          <button type="button" class="btn btn-primary btn-block btn-login">
            <i class="entypo-login"></i>
            Create account
          </button>
         </a> 
        </div>
        
        

        <!-- Implemented in v1.1.4 -->        <div class="form-group">
          <em style="color:red"><?= Html::error($model, 'password'); ?></em>
                              <div>
                                <i class="fa fa-home fa-4x" style="font-size: 26px;"></i>

                                
                              </div>

        </div>
        
      
      <?php ActiveForm::end(); ?><!-- form -->

