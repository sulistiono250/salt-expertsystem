<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Klien */

$this->title = 'Update Klien: ' . $model->id_user;
$this->params['breadcrumbs'][] = ['label' => 'Kliens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_user, 'url' => ['view', 'id' => $model->id_user]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="klien-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form_edit', [
        'model' => $model,
        'model_login'=>$model_login,
    ]) ?>

</div>
