<?php
include_once('../Clases/Temporada.php');
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
header('content-type:text/css');

$tem=new Temporada(0,'','','','');

$fechaactual=date("d-m");

//$fechaactual='18-02';

$tem->Convertirfecha($fechaactual);

$fecha=$tem->convercion;
$tem->exitencia($fecha);

$tem->idtemp;

if($tem->idtemp!=0){$idtemp=$tem->idtemp;}else{$idtemp=0;}

$temp=new Temporada($idtemp,'','','','');
$diseño=$temp->recupera_diseno($idtemp);



//fondo
if($diseño->idtemp!=0){ $colorFondo='#'.$diseño->colorfondo;}else{ $colorFondo = '#4C3A2E';};
//cabecaraypie color cafe
if($diseño->idtemp!=0){ $cabecaraypie='#'.$diseño->colorcabecaraypie;}else{$cabecaraypie="#895507"; };
//linea naranja
if($diseño->idtemp!=0){ $pienaranja='#'.$diseño->coloradorno;}else{$pienaranja="#F0960F"; };
//color ed la tabla
if($diseño->idtemp!=0){ $table='#'.$diseño->colortabla;}else{$table="#FCF9C4"; };
//color cafe de arriba de la pagina
if($diseño->idtemp!=0){ $th='#'.$diseño->colortitulotabla;}else{$th="#895507"; };
//efectops de la tabla hover
if($diseño->idtemp!=0){ $efectotabla='#'.$diseño->colorefectabla;}else{$efectotabla="#F2DA8F"; };
//color de texto cafes
if($diseño->idtemp!=0){ $textocolor='#'.$diseño->colortextgeneral;}else{$textocolor="#895507"; };
//cuerpo de la pagina
if($diseño->idtemp!=0){ $cuerpo='#'.$diseño->colorcuerpo;}else{$cuerpo="#EFF0B7"; };
//color boton
if($diseño->idtemp!=0){$boton='#'.$diseño->colorboton;}else{$boton="#005285";};
//efecto del boton
if($diseño->idtemp!=0){$botonefect='#'.$diseño->colorefectboton;}else{$botonefect="#2575CF";};
//texto del boton
if($diseño->idtemp!=0){$texboton='#'.$diseño->colortextboton;}else{$texboton="#FFFFFF";};
//bordes en cartelera
if($diseño->idtemp!=0){$carteleracuadros='#'.$diseño->colorbordecartelera;}else{$carteleracuadros="#AD9363";};
//efcto menu y categorias
if($diseño->idtemp!=0){$efctmanucate='#'.$diseño->colorefectlink;}else{$efctmanucate="#00A9B5";};
//texto primcipal
if($diseño->idtemp!=0){$principaltext='#'.$diseño->colortitulos;}else{$principaltext="#00A9B5";};

if($diseño->idtemp!=0){$vinetas=$diseño->imgvinetas;}else{$vinetas="vineta.png";};	
	echo 'ul#item{		
		margin:1em 0;
		width:auto;
		height:100px;
		overflow:hidden;
		}
	ul#item li{
		list-style:none;
		float:left;
		height:240px;
		overflow:hidden;
		margin:0 4px;
		background:".$cuerpo.";
		color:".$cuerpo.";
		text-align:center;
		-moz-border-radius:5px;
		-webkit-border-radius:5px;
		border-radius:5px;
		-moz-box-shadow:0 1px 1px #000;
		-webkit-box-shadow:0 1px 1px #777;
		box-shadow:0 1px 1px #777;
		color:#555;
		}
	ul#item li:hover{color:#333;}

	ul#item li .image{
		margin:10px 10px 5px 10px;
		width:109px;
		height:75px;
		overflow:hidden;
		border:2px solid #fff;
		-moz-box-shadow:0 1px 1px #bbb;
		-webkit-box-shadow:0 1px 1px #bbb;
		box-shadow:0 1px 1px #bbb;
		}	
	ul#item h3{text-transform:uppercase;font-size:14px;font-weight:bold;margin:.25em 0;text-shadow:#f1f1f1 0 1px 0;}	
	ul#item .info{color:#999;text-shadow:#f1f1f1 0 1px 0;}	
	ol#pagination{position:relative;text-align:center;}
	
	ol#pagination li{
		display:inline-block;
		width:16px;
		height:16px;
		background:url(../images/bg_buttons.png) no-repeat 0 0;
		text-align:left;
		text-indent:-8000px;
		list-style:none;
		cursor:pointer;
		margin:0 2px;
		}
	
	
	ol#pagination li:hover{background:url(../images/bg_buttons.png) no-repeat 0 -16px;}
	ol#pagination li.current{color:#f00;font-weight:bold;background:url(../images/bg_buttons.png) no-repeat 0 -32px;}
	
	
	ol#pagination li.prev, ol#pagination li.next{
		position:absolute;
		top:-80px;
		}
		
	ol#pagination li.prev{left:-30px;background:url(../images/bg_buttons.png) no-repeat 0 -64px;}
	ol#pagination li.next{right:15px;background:url(../images/bg_buttons.png) no-repeat 0 -48px;}


	
	
	ul, ol, dl{padding:0;}
	img{border:none;}
	
	/* input[type=ª\"radio\"],input[type=\"checkbox\"], .radio, .checkbox{margin:0 .25em 0 0;}*/

/* //  HTML elements */	

/* base */
	
		
		
	a, a:visited{
		text-decoration:none;
		
		}
	a:hover{color:#999;}

/* base */

/* content */

	#container{	
		margin:0 auto;
		width:818px;
		text-align:left;
		position:relative;
		padding:2em 0;
		}
		
	ul#items{		
		margin:1em 0;
		width:auto;
		height:100px;
		overflow:hidden;
		}
	ul#items li{
		list-style:none;
		float:left;
		height:240px;
		overflow:hidden;
		margin:0 4px;
		background:".$cuerpo.";
		color:".$cuerpo.";
		text-align:center;
		-moz-border-radius:5px;
		-webkit-border-radius:5px;
		border-radius:5px;
		-moz-box-shadow:0 1px 1px #000;
		-webkit-box-shadow:0 1px 1px #777;
		box-shadow:0 1px 1px #777;
		color:#555;
		}
	ul#items li:hover{color:#333;}

	ul#items li .image{
		margin:10px 10px 5px 10px;
		width:109px;
		height:75px;
		overflow:hidden;
		border:2px solid #fff;
		-moz-box-shadow:0 1px 1px #bbb;
		-webkit-box-shadow:0 1px 1px #bbb;
		box-shadow:0 1px 1px #bbb;
		}	
	ul#items h3{text-transform:uppercase;font-size:14px;font-weight:bold;margin:.25em 0;text-shadow:#f1f1f1 0 1px 0;}	
	ul#items .info{color:#999;text-shadow:#f1f1f1 0 1px 0;}	
	ol#pagination{position:relative;text-align:center;}
	
	ol#pagination li{
		display:inline-block;
		width:16px;
		height:16px;
		background:url(../images/bg_buttons.png) no-repeat 0 0;
		text-align:left;
		text-indent:-8000px;
		list-style:none;
		cursor:pointer;
		margin:0 2px;
		}
	
	
	ol#pagination li:hover{background:url(../images/bg_buttons.png) no-repeat 0 -16px;}
	ol#pagination li.current{color:#f00;font-weight:bold;background:url(../images/bg_buttons.png) no-repeat 0 -32px;}
	
	
	ol#pagination li.prev, ol#pagination li.next{
		position:absolute;
		top:-80px;
		}
		
	ol#pagination li.prev{left:-30px;background:url(../images/bg_buttons.png) no-repeat 0 -64px;}
	ol#pagination li.next{right:5px;background:url(../images/bg_buttons.png) no-repeat 0 -48px;}
	
	
	.slideshow { 
	height: 272px; width: 332px; margin: auto ;
	position:relative; left:20px;
	
	}


.slideshow img { 
	padding: 15px; border: 1px solid #ccc; 
	background-color:".$cuerpo.";
	 -moz-box-shadow: 0px 0px 5px #000000;
	-webkit-box-shadow: 0px 0px 5px #000000;
	box-shadow: 0px 0px 5px #000000;
	border:none 0px #000000;
	-moz-border-radius-topleft: 5px;
	-moz-border-radius-topright:5px;
	-moz-border-radius-bottomleft:5px;
	-moz-border-radius-bottomright:5px;
	-webkit-border-top-left-radius:5px;
	-webkit-border-top-right-radius:5px;
	-webkit-border-bottom-left-radius:5px;
	-webkit-border-bottom-right-radius:5px;
	border-top-left-radius:5px;
	border-top-right-radius:5px;
	border-bottom-left-radius:5px;
	border-bottom-right-radius:5px;

}';

?>