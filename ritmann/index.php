<? 
include_once('config/config_general.php'); 
$categorias = array(
	array(
		'id_categoria' => 1,
		'nomb_categoria' => 'Calzado industrial'
	),
	array(
		'id_categoria' => 2,
		'nomb_categoria' => 'Herremientas'
	),
	array(
		'id_categoria' => 3,
		'nomb_categoria' => 'Protección'
	),
	array(
		'id_categoria' => 4,
		'nomb_categoria' => 'Camiseta '
	),
	array(
		'id_categoria' => 5,
		'nomb_categoria' => 'Calzado'
	)
);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		 <title><?=TITLE ?></title>
		 <meta charset="UTF-8" />
		 <meta name="description" content="<?= DESCRIPTION ?>" />
		 
		 <link href="imagenes/favicon.ico" rel="shortcut icon" type="image/x-icon" />
		 <link href="css/960_12_col.css" rel="stylesheet" type="text/css" />
		 <link href="css/styles.css" rel="stylesheet" type="text/css" />
		 <link href="css/slides.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<div class="container_12">
			<!-- open header -->
			<header>
				<div class="grid_12 alpha omega header">
					<div class="grid_2 alpha">
						<a href="'.$this->genera_ruta().'index.php"><img src="imagenes/logo.png" width="343" height="130" alt="Ritmann Uniformes y Equipo de Seguridad Industrial"/></a>
					</div>
				   <div class="grid_4">
					&nbsp;
				   </div>
				   <div class="grid_6 omega" id="marcas">
						<img src="imagenes/marcas.gif" width="480" height="83" />
				   </div>
				</div>
			</header>
			<!-- close header -->
			  
			<!-- open info user/cart -->
			<section>
				<div class="grid_12 alpha omega">
					<div class="grid_6 alpha">
						&nbsp;
					</div>
					<div class="grid_3" id="mover_carro">
						<a href="#">Usuario</a>(<a id="blanco" href="Clientes/login_cliente.php?salir=yes">Salir</a>)
					</div>
					<div class="grid_3 omega" id="user">
						<img src="imagenes/basket-full.png" id="icono-carro">&nbsp;<a href="Carro/detalle_carro.php">2 Productos | $450</a>
					</div>
				</div>
			</section>
			<!-- close info user/cart -->
		  
			<!-- open menu -->
			<section>
				<div class="grid_12 alpha omega" id="menu">
					<ul class="menuholder">
						<li class="menu_hom"><a href="index.php" title="Inicio"></a></li> 
						<li class="menu_cat" id="menu_cat"><a href="public_html/catalogo.php" title="Catalogo"></a></li>
						<li class="menu_pro"><a href="public_html/promociones.php" title="Promociones"></a></li>
						<li class="menu_haz"><a href="public_html/haz.php" title="Haz tu uniforme"></a></li>
						<li class="menu_emp"><a href="public_html/empresa.php" title="Empresa"></a></li>
						<li class="menu_mar"><a href="public_html/Marcas.php" title="Marcas"></a></li>
						<li class="menu_not"><a href="public_html/noticias.php" title="Noticias"></a></li>
						<li class="menu_con"><a href="public_html/contacto.php" title="Contacto"></a></li>
					</ul>
				</div>
			</section>
			<!-- close menu -->
		  
			<!-- open content page -->
			<section>
				<div class="grid_12 alpha omega">

					<div class="grid_12 alpha omega" id="catalogo" align="center">
							<div class="grid_12 alpha omega">
								<br /><br />
								<div class="grid_9 omega">
									<form class="cmxform" id="commentForm" action="catalogo.php" method="post">
										<input name="criterio" type="hidden" value=""/>
										<span>Ordenar productos por:</span>
										<select title="Seleccione un m&eacute;todo de orden" class="required" name="ordenador"  style="width: 140px" >
											<option value="Nombre" >Nombre</option>
											<option value="Precio">Precio</option>
										</select>
										<span>Filtro por precio</span>
										<select title="Seleccione un filtro" class="required" name="criterio_precio" style="width: 140px">
										   <option value="Mayor">Mayor</option>
										   <option value="Menor">Menor</option>
										   <option value="Mayor_Igual">Mayor igual</option>
										   <option value="Menor_Igual">Menor igual</option>
										   <option value="Igual"> Igual</option>
										</select>
										
										<span class="addon">
											<label for="cantidad_criterio_precio">$</label>
											<input name="cantidad_criterio_precio" id="cantidad_criterio_precio" class="required number" type="text" value="" size="5"/>
											<input  class="button" name="" type="submit" value="Filtrar"/>
										</span>
									</form>
								</div>
								<div class="grid_3 alpha">
									<span class="addon">
										<form action="catalogo.php" class="cmxform" id="commentForm2" method="post">
											<input name="criterio" class="required" type="search" results=5 size="14" value="" />
											<input id="boton-buscar" class="button"  name="" type="submit" value="Buscar"/>
										</form>
									</span>
								</div>
							</div>
							
							<div class="grid_12 alpha omega bajar">
								<div class="grid_3 alpha">
									
									<div class="grid_2">
										<div id="categorias"><span>Categorías</span></div>
										<div class="clear"></div>
										<div class="grid_3 cates" id="mover_cat">
											<ul>
												<? foreach($categorias as $item_cat): ?>
												 <li><a href="#cat_<?= $item_cat['id_categoria'] ?>"><?= $item_cat['nomb_categoria'] ?></a></li>
												<? endforeach ?>
											</ul>
										</div> 
									</div>
									<div class="grid_1">&nbsp;</div>
									
									<div class="grid_3 omega">
										
									</div>      
								</div>
					
						   
								<div class="grid_9 omega">
									
									<?
										$por_fila=3;
										$contador=1;
										$contador_css=0;
									?>
								
									<? for($i=1; $i < 6 ;$i++): ?>
									<?
										$contador_css++;
									
										$temporal_css='';
										
										if($contador_css>3)
										{$temporal_css=' id="mover" ';}
									
										$temporal_alpha='';
										
										if($contador==1)
										{$temporal_alpha=' alpha ';};
									
										$temporal_omega='';
										
										if($contador==3)
										{$temporal_omega=' omega ';}
									?>
									
									<div <?=$temporal_css ?> class="grid_3 <?= $temporal_alpha.' '.$temporal_omega ?>" >
										<div class="grid_3 alpha omega caja-prod">
											
											<div class="body-caja-prod">
												<a href="#">
													<img src="imagenes/productos/<?= $i ?>.jpg" width="158" height="190" border="0" title="producto<?= $i ?>" />
												</a>
											</div>
											
											<div class="footer-caja-prod">
												<a href="../producto/1">Producto <?= $i ?></a>
												<br>
												<span class="precio"> $400 </span>
												<br>
												<a href="#" class="button">Buscar</a>
												<div class="espacio"></div>
											</div>
										</div>
									</div>
									<?
										if($contador==$por_fila)
										{
											echo '<div class="clear"></div>';
											$contador=1;
										}
										else $contador++;
									?>
									<? endfor ?>
								</div> 
							</div>
                            <div class="grid_12 alpha omega">&nbsp;</div>
                            <div class="grid_12 alpha omega">&nbsp;</div>
					</div>
				</div>

			</section>
		    <!-- close content page -->
			
			<footer>
				<div class="grid_12 alpha omega">
					<div class="newsHome subirpie" style="width:960px">
						   <div id="news">
							<div class="newscols"><span class="newstitulo">
								 <img src="imagenes/news.gif" alt="" width="106" height="60" style="float:left; padding-right: 10px; padding-bottom: 15px;"/>
								 Newsletter</span><span class="newstxt"><br />
								 Escriba su correo electrónico y reciba nuestras promociones y novedades. </span>
								 <div class="newsletter">
								  <form id="Verifica_Form1" method="post" action="Administrador/Newsletter/operaciones_news.php" onsubmit="return Verifica_Form1_Validator(this)" name="Verifica_Form1">
								 <input type="hidden" name="id_news" value="">
								   <table border="0" cellspacing="0" cellpadding="0">
									<tr>
									 <td><input name="correo" type="text" id="mail" value="" /></td>
									 <td><input type="image" class="submit" id="submit" name="operacion" value="Agregar" src="imagenes/button.gif" /></td>
									</tr>
								   </table>
								  </form>
								 </div>
							</div>
							<div class="newscols">
								<img src="imagenes/9_small.jpg" alt="" width="111" height="111" style=" float:left; padding-right:20px;"/>
								<span class="newstitulo">Grupo Expansión<br /></span>
								<span class="newstxt">Revista Manufactura nombra a Berrendo como el mejor proveedor de calzado industrial</span>
							</div>
							<div class="newscols">
							 <a href="#">
								<img src="imagenes/7_small.jpg" alt="" width="111" height="111" style=" float:left; padding-right:20px;"/>
								<span class="newstitulo">Berrendo Biotech<br /></span>
								<span class="newstxt">Berrendo Biotech es la línea con la mayor tecnología de protección en México.</span>
							 </a>
							</div>
						</div>
					</div>

					<div class="bottomHome subirpie" id="footer">
						<a href="http://www.facebook.com/UniformesRitmann" target="_blank">
							<img src="imagenes/ico_h_facebook.gif" alt="Facebook" width="46" height="46" hspace="10" vspace="10" />
						</a>
						<a href="http://twitter.com/Ritmann" target="_blank">
							<img src="imagenes/twitter.gif" alt="Twitter" width="46" height="46" hspace="10" vspace="10" />
						</a>
						<a href="http://www.youtube.com/user/RitmannWeb" target="_blank">
							<img src="imagenes/youtube.gif" alt="YouTube" width="46" height="46" hspace="10" vspace="10" />
						</a>
						<a href="skype:ritmann.ecommerce?call">
							<img src="imagenes/skype.gif" alt="Skype" width="46" height="46" hspace="10" vspace="10" />
						</a>
						<a href="/msn.shtml">
							<img src="imagenes/msn.gif" alt="Msn" width="46" height="46" hspace="10" vspace="10" />
						</a>
						<br />
						<img  src="imagenes/datos.png" alt="Tel.: (999) 941-2000" width="773" height="21" vspace="6" />
						<br />
						INICIO &middot; CATALOGO &middot; PROMOCIONES &middot; HAZ TU UNIFORME &middot; EMPRESA &middot; NUESTRAS MARCAS &middot; NOTICIAS &middot; CONTACTO<br />
						&reg; Ritmann en una marca registrada &nbsp;&copy; Todos los Derechos Reservados
						<br />
						<br />
						<br />
					</div>
				</div>
			</footer>
		</div>
	</body>
</html>