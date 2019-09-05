<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Rule1 */

$this->title = "Detail Rule";
$this->params['breadcrumbs'][] = ['label' => 'Rule', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rule1-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Create Rule', ['create'], ['class' => 'btn btn-success']) ?>
    
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
           // 'id',
            'rule',
            'warna',
            'rasa',
            'bentuk',
            'jenis',
            'hasil',
            'kandungan',
        ],
    ]) ?>

</div>
