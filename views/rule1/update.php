<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Rule1 */

$this->title = 'Update Rule: ' . $model->rule;
$this->params['breadcrumbs'][] = ['label' => 'Rule', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rule1-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
