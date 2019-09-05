<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Klien */

$this->title = "Pendaftaran Berhasil";
$this->params['breadcrumbs'][] = ['label' => 'Kliens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="klien-view" >

    <h1><?= Html::encode($this->title) ?></h1>
    <p>Berikut detail data anda</p>

   

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_user',
            'nama',
            'alamat',
            'telp',
            // 'pekerjaan',
            // 'email:email',

        ],
    ]) ?>

    <p>Berikut adalah username dan password anda silahkan tekan tombol login</p>
     <?= DetailView::widget([
        'model' => $model_login,
        'attributes' => [
        'username',
        'password',
          ],
    ]) ?>

     <p>
        <?= Html::a('Login', ['site/login'], ['class' => 'btn btn-primary']) ?>
       
    </p>

</div>
