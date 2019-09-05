<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Rule1 */
/* @var $form yii\widgets\ActiveForm */
?>

<?php $form = ActiveForm::begin(); ?>
<div class="rule1-form">
<div class="row">
<div class="col-md-6">

    <?= $form->field($model, 'rule')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'warna')->dropDownList( [
            'Putih Bening Kering' => 'Putih Bening Kering',
            'Putih Bening Basah' => 'Putih Bening Basah',
            'Putih Kapur Kering' => 'Putih Kapur Kering',
            'Putih Kapur Basah'=>'Putih Kapur Basah',
            'Kemerahan Basah'=>'Kemerahan Basah',
            'Kecoklatan Basah'=>'Kecoklatan Basah',
            'Kehitaman Basah'=>'Kehitaman Basah',
        ]) ?>

    <?= $form->field($model, 'rasa')->dropDownList( [
            'Asin Garam' => 'Asin Garam',
            'Asin Ringan'=>'Asin Ringan',
            'Asin Pahit'=>'Asin Pahit',
            'Pahit'=>'Pahit',

        ]) ?>

    <?= $form->field($model, 'bentuk')->dropDownList( [
            'Segi Empat' => 'Segi Empat',
            'Tajam'=>'Tajam',
            
        ]) ?>

</div>
<div class="col-md-6">



    <?= $form->field($model, 'jenis')->dropDownList( [
            'Garam Konsumsi ' => 'Garam Konsumsi ',
            'Garam Industri'=>'Garam Industri',
            
        ]) ?>

    <?= $form->field($model, 'hasil')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'kandungan')->textarea(['rows' => '5']) ?>
</div>
</div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
