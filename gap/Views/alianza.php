<?php
include_once 'Shared/Layout.php';
$layout=new Layout('Alianzas | GAP Seguros y Fianzas','alianza');
$layout->inicio();

$idioma="";
$alianza="";
if (isset($_SESSION['idioma'])) {
	
	$idioma=$_SESSION['idioma'];

	if ($idioma=="es") {
		
		$alianza="Alianza";
	}

	if ($idioma=="en") {
		$alianza="Alliance";
	}
}

else{
	$alianza="Alianza";
}

?>

<div class="container">
	<div class="row-fliud">
		<div class="col-lg-9">

			<h2 class="text-center"><?php echo $alianza; ?></h2>
			<br><br>
			<img src="../assets/img/alianza/alianza1.png" alt="" class="img-responsive">
			<br><br>
			<img src="../assets/img/alianza/alianza2.png" alt="" class="img-responsive">
		</div>

	</div>
</div>

<?php
$layout->fin();
?>