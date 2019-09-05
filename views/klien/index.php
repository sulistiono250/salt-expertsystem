<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\KlienSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Daftar Klien';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="klien-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Klien', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_user',
            'nama',
            'alamat',
            'telp',
            //'pekerjaan',
            // 'email:email',

            ['class' => 'yii\grid\ActionColumn',
            'contentOptions' => ['style' => 'width:65px;'],
            ],
        ],
    ]); ?>
</div>
