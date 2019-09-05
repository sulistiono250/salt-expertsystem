<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
?>
<div class="klien-index">
<h1>Proses konsultasi</h1>
<p>Silahkan jawab pertanyaan dibawah ini sesuai dengan kondisi yang ada</p>
</div>


<!-- ini mulai -->
<form id="forum_post" class="form-vertical" action="<?= Url::to(['konsultasi/hasil']); ?>" method="post" style="color:#000000">
<div class="row">
<!-- pertama -->
<div class="col-md-4">
		
		<div class="panel panel-primary" data-collapsed="0">
		
			<div class="panel-heading">
				<div class="panel-title">
				Warna garam ?
				</div>
				
				<div class="panel-options">
					
					<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
					
			
				</div>
			</div>
			
			<div class="panel-body">
				
				<div class="row">
					
					
					<div class="col-md-12 form-group">
					       



						<ul class="icheck-list" >
						    <li>
						    <input  class="icheck" type="radio" id="warna-1" name="warna" value="Putih Bening Kering">
						       <label for="warna-2">Putih Bening Kering</label>
						    </li>
						    <li>
						        <input  class="icheck" type="radio" id="warna-2" name="warna" value="Putih Bening Basah" >
						        <label for="warna-2">Putih Bening Basah</label>
						    </li>
						     <li>
						        <input  class="icheck" type="radio" id="warna-3" name="warna" value="Putih Kapur Kering">
						        <label for="warna-1">Putih Kapur Kering</label>
						    </li>
						    <li>
						        <input  class="icheck" type="radio" id="warna-4" name="warna" value="Putih Kapur Basah">
						        <label for="warna-2">Putih Kapur Basah</label>
						    </li>
						     <li>
						        <input  class="icheck" type="radio" id="warna-5" name="warna" value="Kemerahan Basah">
						        <label for="warna-1">Kemerahan Basah</label>
						    </li>
						    <li>
						        <input  class="icheck" type="radio" id="warna-6" name="warna" value="Kecoklatan Basah">
						        <label for="warna-2">Kecoklatan Basah</label>
						    </li>
						     <li>
						        <input  class="icheck" type="radio" id="warna-7" name="warna" value="Kehitaman Basah">
						        <label for="warna-1">Kehitaman Basah</label>
						    </li>
						   
						 
						</ul>
						
					</div>
				</div>
				
			</div>
			
			
			
		
		</div>
		
	</div>

<!-- kedua  -->
<div class="col-md-4">
		
		<div class="panel panel-primary" data-collapsed="0">
		
			<div class="panel-heading">
				<div class="panel-title">
				Rasa garam ?
				</div>
				
				<div class="panel-options">
					
					<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
					
			
				</div>
			</div>
			
			<div class="panel-body">
				
				<div class="row">
					
					
					<div class="col-md-12 form-group">
					       



						<ul class="icheck-list">
						    <li class="rasa" id="rasa1">
						    <input  class="icheck" type="radio" id="rasa-1" name="rasa" value="Asin Garam">
						       <label for="rasa-2">Asin Garam</label>
						    </li>
						    <li class="rasa" id="rasa2">
						        <input  class="icheck" type="radio" id="rasa-2" name="rasa" value="Asin Ringan" >
						        <label for="rasa-2">Asin Ringan</label>
						    </li>
						     <li class="rasa" id="rasa3">
						        <input  class="icheck" type="radio" id="rasa-3" name="rasa" value="Asin Pahit">
						        <label for="rasa-1">Asin Pahit</label>
						    </li>
						    <li class="rasa" id="rasa4">
						        <input  class="icheck" type="radio" id="rasa-4" name="rasa" value="Pahit">
						        <label for="rasa-2">Pahit</label>
						    </li>
					 
						</ul>
						
					</div>
				</div>
				
			</div>
			
			
			
		
		</div>
		
	</div>

	<!-- ketiga  -->
<div class="col-md-4">
		
		<div class="panel panel-primary" data-collapsed="0">
		
			<div class="panel-heading">
				<div class="panel-title">
				Bentuk garam ?
				</div>
				
				<div class="panel-options">
					
					<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
					
			
				</div>
			</div>
			
			<div class="panel-body">
				
				<div class="row">
					
					
					<div class="col-md-12 form-group">
					       



						<ul class="icheck-list">
						    <li class="bentuk" id="bentuk1">
						    <input  class="icheck" type="radio" id="bentuk-1" name="bentuk" value="Segi Empat">
						       <label for="bentuk-2">Segi Empat</label>
						    </li>
						    <li class="bentuk" id="bentuk2">
						        <input  class="icheck" type="radio" id="bentuk-2" name="bentuk" value="Tajam" >
						        <label for="bentuk-2">Tajam</label>
						    </li>
						   
					 
						</ul>
						
					</div>
				</div>
				
			</div>
			
			
			
		
		</div>
		
	</div>


</div>
<!-- ini ahir -->

<!-- 
<input type="hidden" name="warna" id="warna">
<input type="hidden" name="rasa" id="rasa">
<input type="hidden" name="bentuk" id="bentuk"> -->
<input type="submit" id="submit" name="" value="Proses" class="btn btn-blue">
</form>

<?php
$script = <<< JS

$(".rasa").hide();
$(".bentuk").hide();


$("#warna-1").change(function(){
$(".rasa").hide();
$(".bentuk").hide();

$("#rasa1").show();
$("#rasa2").show();
});

$("#warna-2").change(function(){
$(".rasa").hide();
$(".bentuk").hide();

$("#rasa1").show();
$("#rasa2").show();
$("#rasa3").show();
$("#rasa4").show();
});

$("#warna-3,#warna-4").change(function(){
$(".rasa").hide();
$(".bentuk").hide();
$("#rasa1").show();
$("#rasa2").show();
$("#rasa3").show();

});

$("#warna-5,#warna-6,#warna-7").change(function(){
$(".rasa").hide();
$(".bentuk").hide();
$("#rasa3").show();

});


$("#rasa-1,#rasa-2,#rasa-3").change(function(){

$(".bentuk").hide();
$("#bentuk1").show();
$('#bentuk-1').prop('checked', true);
});

$("#rasa-4").change(function(){

$(".bentuk").hide();
$("#bentuk2").show();
$('#bentuk-2').prop('checked', true);
});




 $("#submit").click(function(){
 var a=	$('input[name=warna]:checked').val();
 if(typeof  a != 'undefined'){
 
}else{
 alert("Warna garam belum diisi, silahkan isi terlebih dahulu");
 return false;
}

var a=	$('input[name=rasa]:checked').val();
 if(typeof  a != 'undefined'){
 
}else{
 alert("Rasa garam belum diisi, silahkan isi terlebih dahulu");
 return false;
}

var a=	$('input[name=bentuk]:checked').val();
 if(typeof  a != 'undefined'){
 
}else{
 alert("Bentuk garam belum diisi, silahkan isi terlebih dahulu");
 return false;
}
 
 }); 



JS;
$this->registerJs($script);
?>