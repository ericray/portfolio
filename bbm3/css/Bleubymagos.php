<?php
//include_once('../Clases/Temporada.php');
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
header('content-type:text/css');

/*$tem=new Temporada(0,'','','','');

$fechaactual=date("d-m");

//$fechaactual='18-02';

$tem->Convertirfecha($fechaactual);

$fecha=$tem->convercion;
$tem->exitencia($fecha);

echo $tem->idtemp;

if($tem->idtemp!=0){$idtemp=$tem->idtemp;}else{$idtemp=0;}

$temp=new Temporada($idtemp,'','','','');
$diseño=$temp->recupera_diseno($idtemp);
*/


//fondo
$colorFondo = '#4C3A2E';
//cabecaraypie color cafe
$cabecaraypie="#895507";
//linea naranja
$pienaranja="#F0960F";
//color ed la tabla
$table="#FCF9C4";
//color cafe de arriba de la pagina
$th="#895507";
//efectops de la tabla hover
$efectotabla="#F2DA8F";
//color de texto cafes
$textocolor="#895507";
//cuerpo de la pagina
$cuerpo="#EFF0B7";
//color boton
$boton="#005285";
//efecto del boton
$botonefect="#2575CF";
//texto del boton
$texboton="#FFFFFF";
//bordes en cartelera
$carteleracuadros="#AD9363";
//efcto menu y categorias
$efctmanucate="#00A9B5";
//texto primcipal
$principaltext="#00A9B5";

$vinetas="vineta.png";

$color="#895507";

echo "
#letra{ color:".$textocolor.";}
#centrarp{ position:relative; left:250px; text-align:center; margin: 0 auto; }
#centrarc{ position:relative; left:250px; text-align:center; margin: 0 auto; }
#centrari{ position:relative; left:280px; text-align:center; margin: 0 auto; }
#centrarct{ position:relative; left:290px; text-align:center; margin: 0 auto; }
#centrarto{ position:relative; left:30px; text-align:center; margin: 0 auto; }



body{ background-color:".$colorFondo.";}
#up{position:relative; bottom:7px;}
#pie{position:relative; top:30px;}
#cuerpo{ background-color:".$cuerpo."; position:relative; bottom:10px;}
#cabecera{ background-color:".$cabecaraypie.";}
#subirbody{ position:relative;  top:-9px;}
#sombra{-moz-box-shadow: 0 2px 4px rgba(0,0,0,0.6);
-webkit-box-shadow: 1 2px 4px rgba(0,0,0,0.6);
}
#ingresar{ position:relative; left:15px; top:4px;}
#adorno1{ position:relative; top:-6px;}
#adorno2{ position:relative; bottom:-5px;}
#cabecerasubir{ position:relative; top:-13px; height:117px;}
#logo{ position:relative; left:40px;}
#link2{ position:relative; top:50px; color:".$pienaranja."; font-family:Arial; font-size:14px;}
#carrito{ position:relative; top:10px;}
#buscador{ position:relative; top:15px;}
#pienaranja{ background-color:".$pienaranja."; height:6px;}
#piecafe{  background-color:".$cabecaraypie."; height:80px;}
#cabecera1{background-color:".$cuerpo."; color:".$textocolor."; font-family:Arial; font-size:14px; height:22px;}
#menu{ position: relative; top:4px; text-align:right;}
a{ text-decoration:none; color:".$textocolor.";}
#menu a:hover{ color:".$efctmanucate.";}
#cabecera1 a:hover{ color:".$efctmanucate.";}
#text{ border-color:#F00;}
#separar{ margin-left:3px;}

/*botones*/
.button, .button:visited {
position:relative; left:17px;
background: #222 url(http://sites.google.com/site/zavaletaster/Home/overlay.png) repeat-x;
display: inline-block;
padding: 5px 10px 6px;
color: ".$texboton.";
text-decoration: none;
-moz-border-radius: 6px;
-webkit-border-radius: 6px;
-moz-box-shadow: 0 1px 3px rgba(0,0,0,0.6);
-webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.6);
text-shadow: 0 -1px 1px rgba(0,0,0,0.25);
border-top: 0px;
border-left: 0px;
border-right: 0px;
border-bottom: 1px;
position: relative;
cursor:pointer;
}

button::-moz-focus-inner,
input[type=\"reset\"]::-moz-focus-inner,
input[type=\"button\"]::-moz-focus-inner,
input[type=\"submit\"]::-moz-focus-inner,
input[type=\"file\"] > input[type=\"button\"]::-moz-focus-inner {
border: none;
}

.button, .button:visited,.medium.button, .medium.button:visited {
font-size: 13px;
font-weight:900;
line-height: 1;
text-shadow: 0 -1px 1px rgba(0,0,0,0.25);
}
.blue.button, .blue.button:visited { background-color: ".$boton."; }
.blue.button:hover{ background-color: ".$botonefect."; }
/*botones*/
table{-moz-box-shadow: 0 2px 3px rgba(1,1,1,0.6); font-family:Arial, Helvetica, sans-serif; font-size:14px; background-color:".$table."; text-align:center; -moz-border-radius: 6px; -moz-box-shadow: 0 1px 3px rgba(0,0,0,0.6);
-webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.6); border-radius: 6px;}
th{ background-color:".$th."; radius-border:10px; color:#FFF; width:140px;}
table tr:hover{background:".$efectotabla.";}
td{ color:".$textocolor.";}
#link{ color:".$efctmanucate.";}
#resaltar a:hover{ color:".$textocolor.";}
.textarea {width:150px;height:20px;border: 1px solid #F0960F; -moz-border-radius: 6px;}
#acomodarprincipal{ margin-top:25px;  margin-bottom:25px;}
ul {
padding-left: 0; /*Limpieza de mÃ¡rgenes (se puede cambiar)*/
margin-left: 36px; /*Indentado de la lista (se puede cambiar)*/
list-style-type: none; /*Quitar estilo de viÃ±eta*/
}
#li {
background: url('../imagenes/".$vinetas."') left center no-repeat;
margin-bottom: 10px;
padding-left: 20px;
font-family:Arial; font-size:14px;
}
#categoriasmover{ position:relative; left:20px;}
li a:hover{ color:".$efctmanucate.";}
#importe a:hover{ color:".$cuerpo.";}
#filtros{ color:".$textocolor."; font-family:Arial; font-size:13px; position:relative; left:10px;}
input, select{ margin-top:3px; margin-bottom:3px; color:".$efctmanucate."; border: 1px solid ".$pienaranja."; -moz-border-radius: 6px;
-webkit-border-radius: 6px; border-radius: 6px;  }
textarea{ margin-top:3px; margin-bottom:3px; color:#00A9B5; border: 1px solid #F0960F; -moz-border-radius: 6px;
-webkit-border-radius: 6px; border-radius: 6px;  }
#imagen{ margin-bottom:20px; position:relative; left:-10px;}
#marcado{ background:".$carteleracuadros."; width:190px; height:280px;  font-family:Arial; font-size:14px; text-align:center;}
#producto{width:190px; margin-top:11px; height:30px; }
#botoncarro{width:190px; height:30px}
#imgcartelera{ margin-top:15px; margin-bottom:15px;}
label a:hover{ color:".$efctmanucate.";}
#textcarrito{ width:30px;}
#acomodarbotoncarro{ position:relative; left:-3px;}
label{ color:".$textocolor."}
#redes{ position:relative; top:20px;}
#leyendapie{ position:relative; top:30px; text-align:center; font-family:Arial; font-size:14px; color:#FFF;}
.titulo{ text-align:center; font-family:Arial; font-size:20px; color:".$principaltext.";}
#centrar{ margin-top:100x; text-align:center; margin: 0 auto;
}
.botoncentrar{ position:relative; left:400px; margin-bottom:20px;}
#botoncentro{ position:relative; left:400px; margin-bottom:20px;}
.alinearbotonescategorias{ position:relative; left:330px; margin-top:15px;}
.alinearbotonesroles{ position:relative; left:360px; margin-top:15px;}
#imagenproducto{ position:relative; left:320px;}
#th{ background-color:".$th."; radius-border:10px; color:#FFF; width:115px;}
#th1{ background-color:".$th."; radius-border:10px; color:#FFF; width:60px;}

td{height:23px;}
#mover{ margin-top:40px;}
.botoncentrar2{ position:relative; left:430px;}
#imagenproductocarro{ margin-top:6px; margin-bottom:6px;}
#acomodarlink{ position:relative; left:50px;font-size:16px; }
#acomodarlink a:hover{ color:#00A8B1;}
#ajuste{ color:".$textocolor.";}
#acomodarlistado{ position:relative; left:150px;}
#acomodarlistado2{ position:relative; left:300px;}
ramon{ position:relative; left:300px;}
ramon2{ position:relative; left:200px;}
#centaraconfirmacion{  text-align:center;}
.centar{ position:relative; left:70px;}
#alienear{ position:relative; left:-500;}
#azul_confirmacion{ color:#00A9B5;}
#tamano{ font-size:15px;}
#titulo{ position:relative; left:-50px;}
#alineaciondetexto{ text-align:left;}
#separar{ margin-top:15px}
#linea{border-right: 4px dashed #009966;}
#descripcion{ position:relative; left:-50px;}
#movercategoria{ position:relative; top:-25px; left:320px; font-size:18px;}
#descripcion{color:#895507;}


.moverboton{ position:relative; left:-15px; margin-bottom:5px; margin-top:5px;}
.moverboton1{ position:relative; left:200px; margin-bottom:5px; margin-top:5px;}
#thorden{ width:20px;}
#thordenus{ width:80px;}
#colorletras{ color:#00A9B5; font-size:18px}
#tamanotexto{ font-size:15px;}

.titulo1{ position:relative; left:320px; font-family:Arial; font-size:20px; color:".$principaltext.";}

#mainNavigation li { 
display: inline; 
margin: 0 3px; 
}

#checkout1 { background-color:#53C4CF; color:#FFFFFF; border-radius:5px; text-align:center; width:150px;}
#checkout2 { background-color:#53C4CF; color:#FFFFFF; border-radius:5px; text-align:center;}
a{text-decoration:none;}
.actual{ background-color:#003; color:#FFFFFF; border-radius:5px; text-align:center;}

.wizard-steps {
    margin:20px 10px 0px 10px;
    padding:0px;
    position: relative;
    clear:both;
    font-family:Helvetica, Arial, sans-serif;
    font-weight: bold;
}
.wizard-steps div {
    position:relative;
}

.wizard-steps span {
    display: block;
    float: left;
    font-size: 10px;
    text-align:center;
    width:15px;
    margin: 2px 5px 0px 0px;
    line-height:15px;
    color: #ccc;
    background:#fff;
    border: 2px solid #CCC;
    -webkit-border-radius:10px;
    -moz-border-radius:10px;
    border-radius:10px;
}

.wizard-steps a {
    position:relative;
    display:block;
    width:auto;
    height:24px;
    margin-right: 18px;
    padding:0px 10px 0px 3px;
    float: left;
    font-size:11px;
    line-height:24px;
    color:#666;
    background: #F0EEE3;
    text-decoration:none;
    text-shadow:1px 1px 1px rgba(255,255,255, 0.8);
}
.wizard-steps a:before {
    width:0px;
    height:0px;
    border-top: 12px solid #F0EEE3;
    border-bottom: 12px solid #F0EEE3;
    border-left:12px solid transparent;
    position: absolute;
    content: '';
    top: 0px;
    left: -12px;
}
.wizard-steps a:after {
    width: 0;
    height: 0;
    border-top: 12px solid transparent;
    border-bottom: 12px solid transparent;
    border-left:12px solid #F0EEE3;
    position: absolute;
    content: '';
    top: 0px;
    right: -12px;
}

.wizard-steps .completed-step a {
    color:#E9EAB3;
    background: ".$cabecaraypie.";
}
.wizard-steps .completed-step a:before {
    border-top: 12px solid ".$cabecaraypie.";
    border-bottom: 12px solid ".$cabecaraypie.";
}
.wizard-steps .completed-step a:after {
    border-left: 12px solid ".$cabecaraypie.";
}
.wizard-steps .completed-step span {
    border: 2px solid #163038;
    color: #163038;
    text-shadow:none;
}

.wizard-steps .active-step a {
    color:#E9EAB3;
    background: ".$colorFondo.";
    text-shadow:1px 1px 1px rgba(0,0,0, 0.8);
}
.wizard-steps .active-step a:before {
    border-top: 12px solid ".$colorFondo.";
    border-bottom: 12px solid ".$colorFondo.";
	
}


.wizard-steps .active-step a:after {
    border-left: 12px solid ".$colorFondo.";
}
.wizard-steps .active-step span {
    color: ".$pienaranja.";
    -webkit-box-shadow:0px 0px 2px rgba(0,0,0, 0.8);
    -moz-box-shadow:0px 0px 2px rgba(0,0,0, 0.8);
    box-shadow:0px 0px 2px rgba(0,0,0, 0.8);
    text-shadow:none;
    border: 2px solid ".$pienaranja.";
}
.wizard-steps .completed-step:hover a, .wizard-steps .active-step:hover a {
    color:#fff;
    background: ".$boton.";
    text-shadow:1px 1px 1px rgba(0,0,0, 0.8);
}
.wizard-steps .completed-step:hover span, .wizard-steps .active-step:hover span {
    color:#8F061E;
}
.wizard-steps .completed-step:hover a:before, .wizard-steps .active-step:hover a:before {
    border-top: 12px solid ".$boton.";
    border-bottom: 12px solid ".$boton.";
}
.wizard-steps .completed-step:hover a:after, .wizard-steps .active-step:hover a:after {
    border-left: 12px solid ".$boton.";
}




#paso2{ margin-top:25px; margin-bottom:30px;}
#btnpaso2{ margin-top:15px; position: relative; left:120px;}
#tablapaso2{ position:relative; left:70px; top:10px; margin-bottom:10px;}
.titulo2{ position:relative; left:50px; font-family:Arial; font-size:20px; color:".$principaltext.";}
#tab2{ margin:20px;}










body {
	
	color: ".$cuerpo.";
	
}


h1 {
	
	color: ".$cabecaraypie.";
	font: 2em normal Arial, Helvetica, sans-serif;
	margin-bottom: 0.5em;
}
#h1 {
	
	color: ".$cabecaraypie.";
	
	
}

#container {
	margin: 0 auto;
	width: 80%;
}

table#cart {
	border-collapse: collapse;
	margin-bottom: 1em;
	width: 100%;
}
	
	table#cart th {
		background: ".$cabecaraypie.";
		color: #fff;
		text-align: left;
		white-space: nowrap;
	}
	
	table#cart th,
	table#cart td {
		padding: 5px 10px;
	}
	
	table#cart .item_name {
		width: 100%;
	}
	
	table#cart .quantity input {
		text-align: center;
	}
	
	table#cart tr td {
		background: #fff;
	}
	
	table#cart tr.odd td {
		background: #eee;
	}
	
	.center {
		text-align: center;
	}



/* ----------------------------------------------------------------------------------------------------------------*/
/* ---------->>> global settings needed for thickbox <<<-----------------------------------------------------------*/
/* ----------------------------------------------------------------------------------------------------------------*/
*{padding: 0; margin: 0;}

/* ----------------------------------------------------------------------------------------------------------------*/
/* ---------->>> thickbox specific link and font settings <<<------------------------------------------------------*/
/* ----------------------------------------------------------------------------------------------------------------*/
#TB_window {
	font: 12px Arial, Helvetica, sans-serif;
	color: #333333;
}

#TB_secondLine {
	font: 10px Arial, Helvetica, sans-serif;
	color:#666666;
}

#TB_window a:link {color: #666666;}
#TB_window a:visited {color: #666666;}
#TB_window a:hover {color: #000;}
#TB_window a:active {color: #666666;}
#TB_window a:focus{color: #666666;}

/* ----------------------------------------------------------------------------------------------------------------*/
/* ---------->>> thickbox settings <<<-----------------------------------------------------------------------------*/
/* ----------------------------------------------------------------------------------------------------------------*/
#TB_overlay {
	position: fixed;
	z-index:100;
	top: 0px;
	left: 0px;
	height:100%;
	width:100%;
}

.TB_overlayMacFFBGHack {background: url(../images/macFFBgHack.png) repeat;}
.TB_overlayBG {
	background-color:".$colorFondo.";
	filter:alpha(opacity=75);
	-moz-opacity: 0.75;
	opacity: 0.75;
}

* html #TB_overlay { /* ie6 hack */
     position: absolute;
     height: expression(document.body.scrollHeight > document.body.offsetHeight ? document.body.scrollHeight : document.body.offsetHeight + 'px');
}

#TB_window {
	position: fixed;
	background: #ffffff;
	z-index: 102;
	color:#000000;
	display:none;
	border: 2px solid ".$pienaranja.";
	text-align:left;
	top:50%;
	left:50%;
}

* html #TB_window { /* ie6 hack */
position: absolute;
margin-top: expression(0 - parseInt(this.offsetHeight / 2) + (TBWindowMargin = document.documentElement && document.documentElement.scrollTop || document.body.scrollTop) + 'px');
}

#TB_window img#TB_Image {
	display:block;
	margin: 15px 0 0 15px;
	border-right: 1px solid #ccc;
	border-bottom: 1px solid #ccc;
	border-top: 1px solid #666;
	border-left: 1px solid #666;
}

#TB_caption{
	height:25px;
	padding:7px 30px 10px 25px;
	float:left;
}

#TB_closeWindow{
	height:25px;
	padding:11px 25px 10px 0;
	float:right;
}

#TB_closeAjaxWindow{
	padding:7px 10px 5px 0;
	margin-bottom:1px;
	text-align:right;
	float:right;
}

#TB_ajaxWindowTitle{
	float:left;
	padding:7px 0 5px 10px;
	margin-bottom:1px;
}

#TB_title{
	background-color:".$cabecaraypie.";
	height:27px;
}

#TB_ajaxContent{
	clear:both;
	padding:2px 15px 15px 15px;
	overflow:auto;
	text-align:left;
	line-height:1.4em;
}

#TB_ajaxContent.TB_modal{
	padding:15px;
}

#TB_ajaxContent p{
	padding:5px 0px 5px 0px;
}

#TB_load{
	position: fixed;
	display:none;
	height:13px;
	width:208px;
	z-index:103;
	top: 50%;
	left: 50%;
	margin: -6px 0 0 -104px; /* -height/2 0 0 -width/2 */
}

* html #TB_load { /* ie6 hack */
position: absolute;
margin-top: expression(0 - parseInt(this.offsetHeight / 2) + (TBWindowMargin = document.documentElement && document.documentElement.scrollTop || document.body.scrollTop) + 'px');
}

#TB_HideSelect{
	z-index:99;
	position:fixed;
	top: 0;
	left: 0;
	background-color:#fff;
	border:none;
	filter:alpha(opacity=0);
	-moz-opacity: 0;
	opacity: 0;
	height:100%;
	width:100%;
}

* html #TB_HideSelect { /* ie6 hack */
     position: absolute;
     height: expression(document.body.scrollHeight > document.body.offsetHeight ? document.body.scrollHeight : document.body.offsetHeight + 'px');
}

#TB_iframeContent{
	clear:both;
	border:none;
	margin-bottom:-1px;
	margin-top:1px;
	_margin-bottom:1px;
}

#jq{ position:relative; top:-10px; font-size:16px;}


.imgchicas{ margin-top:30px;}
#descripcionprod{ margin-top:10px; color:".$textocolor."; text-align:left; font-family:Arial; font-size:16px;}
#titulodes{ color:".$textocolor."; font-weight:bold;}
#textoscomentarios{ color:".$textocolor."; font-family:Arial; font-size:15px;}
#todasimagenes{position:relative; left:20px;}
#imgmcoment{position:relative; left:20px;}
#tablacomentario{position:relative; left:150px;}

#alinea{left:-30px; position:relative;}
#centrart{ position:relative; right:120px; text-align:center; margin: 0 auto; }
#aline{position:relative; right:120px;}
.titulo2{ left:-10px; font-family:Arial; font-size:20px; color:".$principaltext.";}
.p{text-align:left; font-size:14px; color:".$color.";};

input[type='search']::-webkit-search-cancel-button {

    -webkit-appearance: none;

    height: 10px;
    width: 10px;
}

#search{border-radius: 20px; height:22px;}

#btn{left:-10px;}
#btn1{left:1px;}


#botoncen{position:relative; left:400px; }
#btndetalle{position:relative; left:410px; }
#btndetalledos{position:relative; left:210px; }
#cancelar{position:relative; left:17px; margin-bottom:20px;}
#cancelar2{position:relative; left:21px; margin-bottom:20px;}
#botonret{position:relative; left:425px; margin-bottom:20px;}
.comentfb{position:relative; left:140px; margin-bottom:20px; padding-top:15px;}

";


?>