<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Riwayat Konsultasi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="konsultasi-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'id',
           // 'id_user',
            'tgl',
            'jenis',
            'ciri',
            'kandungan',
            'hasil',

            ['class' => 'yii\grid\ActionColumn',
                   'template' => '{view}',
            'contentOptions' => ['style' => 'width:20px;'],
            ],
        ],
    ]); ?>
</div>
