<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Konsultasi */

$this->title = "Detail Konsultasi";
$this->params['breadcrumbs'][] = ['label' => 'Konsultasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="konsultasi-view">

    <h1><?= Html::encode($this->title) ?></h1>

   
<div class="row" style="color:#000000">

<div class="col-md-12">

        
                <table class="table table-condensed table-bordered table-hover table-striped">
                    <tr>
                        <td>Tanggal konsultasi</td>
                        <td><?= $model->tgl ;?></td>
                    </tr>
                    <tr>
                        <td>Jenis</td>
                        <td><?= $model->jenis ; ?></td>
                    </tr>
                    <tr>
                        <td>Ciri-ciri</td>
                        <td><?php

                         $ciri=explode("|",  $model->ciri);
                         echo "Warna : ".$ciri[0]."<br>";
                         echo "Rasa : ".$ciri[1]."<br>";
                         echo "Bentuk : ".$ciri[2]."<br>";


                          ; ?></td>
                    </tr>
                    <tr>
                        <td>Hasil</td>
                        <td><?= $model->hasil; ?></td>
                    </tr>
                    <tr>
                        <td>Kandungan</td>
                        <td><?= $hasil= str_replace(",", "<br>", $model->kandungan) ; ?></td>
                    </tr>

                    <?php
if(substr($model->hasil,0,3)=="KW3"){
?>
<tr>
                        <td>Solusi</td>
                        <td>Dilakukan revinasi atau daur ulang dengan cara direbus dengan air panas atau dilarutkan dengan air, kemudian busa yang mengambang dibuang dan dilakukan proses kristalisasi kembali</td>
                    </tr>

<?php
}
?>

                </table>
                



</div>


</div>

</div>
