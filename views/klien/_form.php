<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Klien */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="klien-form">

    <?php $form = ActiveForm::begin(); ?>
<div class="row">
<div class="col-md-6">
    <?= $form->field($model, 'id_user')->textInput(['maxlength' => true, 'readOnly'=>true]) ?>
</div>
<div class="col-md-6">
    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-6">
    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-6">
    <?= $form->field($model, 'telp')->textInput(['maxlength' => true]) ?>
</div>

<div class="col-md-6">
    <?= $form->field($model, 'password')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-6">
    <?= $form->field($model, 'repassword')->textInput(['maxlength' => true]) ?>
</div>
</div>    
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
