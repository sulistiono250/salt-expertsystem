<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\Rule1Search */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rule1-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'rule') ?>

    <?= $form->field($model, 'warna') ?>

    <?= $form->field($model, 'rasa') ?>

    <?= $form->field($model, 'bentuk') ?>

    <?php // echo $form->field($model, 'hasil') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
