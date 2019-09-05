<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Klien */

$this->title = "Berikut adalah detail user anda";
$this->params['breadcrumbs'][] = ['label' => 'Kliens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="klien-view" style="color:#000000">

    <h1><?= Html::encode($this->title) ?></h1>

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


    <p>Berikut adalah username dan password</p>
     <?= DetailView::widget([
        'model' => $model_login,
        'attributes' => [
        'username',
        'password',
          ],
    ]) ?>

     <p>
        <?= Html::a('Update', ['klien/update','id'=>$model->id_user], ['class' => 'btn btn-primary']) ?>
       
    </p>

</div>
