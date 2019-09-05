<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rule';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rule1-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Rule', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
    'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'rule',
            'warna',
            'rasa',
            'bentuk',
            'hasil',
           // 'kandungan',
             //'jenis',

            ['class' => 'yii\grid\ActionColumn',
            'contentOptions' => ['style' => 'width:65px;'],
            ],
        ],
    ]); ?>
</div>
