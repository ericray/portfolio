<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta property="og:title" content="Bleubymagos" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="http://mce-desarrollo.utmetropolitana.edu.mx/~a10090823/www/Bluebymagos/" />
		<meta property="og:image" content="http://mce-desarrollo.utmetropolitana.edu.mx/~a10090823/www/Bluebymagos/imagenes/Bluebymagos.png" />
		<meta property="og:site_name" content="Blue by magos" />
		<meta property="fb:admins" content="1280866516" />
		<title>Bleubymagos</title>
		<link href="imagenes/favicon.ico" type="image/x-icon" rel="shortcut icon" />
		<link href="css/960.css" rel="stylesheet" type="text/css" />
		<link href="css/Bleubymagos.php" rel="stylesheet" type="text/css" />
		<link href="css/screen.css" rel="stylesheet" type="text/css" media="screen"/>
		<link  href="css/jquery-ui-1.8.18.custom.css" rel="stylesheet" type="text/css" media="screen"/>
		<script src="js/jquery.js" type="text/javascript"></script>
		<script src="js/jquery.validate.js" type="text/javascript"></script>
		<script src="js/jquery.metadata.js" type="text/javascript"></script>
		<script src="js/jq.js" type="text/javascript"></script>
		<script src="js/jquery.min.js" type="text/javascript"></script>
		<script src="js/jquery-ui.min.js" type="text/javascript"></script>
		<script src="js/jquery-1.2.6.pack.js" type="text/javascript"></script>
		<script src="js/jquery.color.js" type="text/javascript"></script>
		<script src="js/thickbox.js" type="text/javascript"></script>
		<script src="js/cart.js" type="text/javascript"></script>
		<script type="text/javascript" src="js/jquery.cycle.all.2.74.js"></script>
	</head>
	<body>
		<div class="container_12">
			<!--cabecera de la pagina-->
			<div id="sombra"class="grid_12 alpha omega">
				<div class="grid_12 alpha omega">
				   
					<div id="cabecera1" class="grid_12 alpha omega">
						<div id="ingresar" class="grid_2 alpha">
							<a id="blanco" href="#">Usuario</a>(<a id="blanco" href="#">Salir</a>)
						</div>
						<div class="grid_6 alpha">
							&nbsp;
						</div>
						<div id="menu" class="grid_4 omega">
							<a href="index.php">Inicio</a> | <a href="Empresa/quienes_somos.php">Acerca de nosotros</a> | <a href="index.php">Contacto</a> | <a href="index.php">Ofertas</a>
						</div>
					</div>
				
					<div class="clear"></div>
				
					<div id="cabecera" class="grid_12 alpha omega">
						<div id="adorno1" class="grid_12 alpha omega">
							<img src="imagenes/adorno.png" />
						</div>
						
						<div class="clear"></div>
						
						<div id="cabecerasubir" class="grid_12 alpha omega">
							<div id="logo" class="grid_4 alpha">
								<a href="index.php"><img src="imagenes/Bluebymagos.png" /></a>
							</div>
							<div class="grid_4 ">
								<!-- imagenesTemporada(9) -->
								&nbsp;
							</div>
							<div id="buscador" class="grid_4 omega">
								<div class="grid_4 alpha omega">
									<!-- contenido -->
									<script>		
										$(function() {
											$("form.cart_form").submit(function() {
												var title = "Your Shopping Cart";
												var id_producto = $("input[name=id_producto]", this).val();
												var cantidad = $("input[name=cantidad]", this).val();
												var precio = $("input[name=precio]", this).val();
												var status = $("input[name=status]", this).val();
												//var submit = $("input[name=submit]", this).val();
												var url = "blueMagos/operaciones_carro.php?id_producto="+id_producto+"&cantidad="+cantidad+"&precio="+precio+"&status="+status+"&submit=Agregar&TB_iframe=true&height=400&width=780";
												tb_show(title, url, false);
												return false;
											});
										});
									</script>

									<form id="text" action="index.php">
										<input id="search" name="criterio" type="search" results=5 value="" placeholder="Buscar..."/>
										<input id="btn1" class="button medium blue"  name="" type="submit" value="Buscar"/>
									</form>
								</div>
								<div id="carrito" class="grid_4 alpha omega">
									<div class="grid_1 alpha">
										<!-- genera_icono_carro() -->
										<img src="imagenes/BolsadeCompra.png" width="57" height="74" />
									</div>
									<div id="importe" class="grid_3 omega">
										<!-- genera_mporte_nombre() -->
										<a id="link2" href="blueMagos/Detalle_carro.php">2 Productos | $100</a>
									</div>
								</div>
							</div>
						</div>
						<div class="clear"></div>
						<div id="adorno2" class="grid_12 alpha omega">
							<img src="imagenes/adorno.png" />
						</div>
						<div class="clear"></div>
					</div>
					<div class="clear"></div>
					<div id="up" class="grid_12 alpha omega">
						<img src="imagenes/adorno2.png"  width="940"/>
					</div>
					<div class="clear"></div>
				</div>
				<div class="clear"></div>
				
				<!-- banner -->
				<div class="slideshow2 grid_12 alpha omega">

					<!--<img width="940" height="200" src="imganuncios/"/>-->
				   
				</div>
				
				<!--cuerpo de la pagina -->
				<div id="cuerpo" class="grid_12 alpha omega">
			
					<div id="acomodarprincipal" class="grid_12 alpha omega">
						<div class="grid_3 alpha">
							<div class="grid_3 alpha omega">
								<div id="categoriasmover" class="grid_2 alpha">
									<div class="grid_2 alpha omega">
										<img src="imagenes/categorias.png" />
									</div>
									<div class="grid_2 alpha omega">
										<ul>
											<li id="li"><a href="index.php">Todos</a></li>
											<!-- -->
										</ul>
									</div>
								</div>
								<div class="1 omega">
									&nbsp;
								</div>
								<div class="clear"></div>
							</div>
								
							<div class="grid_3 alpha omega">
								<div id="categoriasmover" class="grid_2 alpha">
									<div class="grid_2 alpha omega">
										<img src="imagenes/filtro.png" />
									</div>
									<div id="filtros" class="grid_2 alpha omega">
										<form class="cmxform" id="commentForm" action="index.php">
											<input name="criterio" type="hidden" value=""/>
											Ordenar productos por: <br>
											<select title="Ordenar Productos por" name="ordenador"  style="width: 140px">
												<option  value="Nombre" >Nombre</option>
												<option  value="Precio">Precio</option>
											</select>
											<br>
											Filtro por precio <br>
										   <select title="Filtro por precio" name="criterio_precio" style="width: 140px">
												<option value="Mayor">Mayor</option>
												<option value="Menor">Menor</option>
												<option  value="Mayor_Igual">Mayor igual</option>
												<option value="Menor_Igual">Menor igual</option>
												<option value="Igual"> Igual</option>
											</select>
											<br>
											$<input  name="cantidad_criterio_precio" class="required number" type="text" value="" size="17"/>
											<br>
											<input  class="button medium blue" name="" type="submit" value="Filtrar"/>
										</form>
									</div>
								</div>
								<div class="1 omega">
									&nbsp;
								</div>
								<div class="clear"></div>
							</div>
						</div>
						<div class="grid_9 omega">
							<div id="imagen" class="grid_9 alpha omega">
								<img src="imagenes/Cartelera.png" />
								<label id="movercategoria">Categoría Regalos</label>
							</div>
							<div class="clear"></div>
							<div id="cartelera"  class="grid_9 alpha omega">
								<?
									$por_fila=3;
									$contador=1;
									$contador_css=0;
								?>
								<? for($i=1;$i < 6; $i++): ?>
								<?
									$contador_css++;
									$temporal_css='';

									if($contador_css>3){
										$temporal_css=' id="mover" ';
									}
										
									$temporal_alpha='';

									if($contador==1){
										$temporal_alpha=' alpha ';
									}

									$temporal_omega='';

									if($contador==3) $temporal_omega=' omega ';
								?>
								<div <?= $temporal_css ?> class="grid_3 <?= $temporal_alpha.' '.$temporal_omega ?>">
									<div id="marcado" class="grid_3 alpha omega">
										<a href="producto/'.$elemento['clave'].'"><img id="imgcartelera" src="img_ocasion/<?=$i ?>.jpg" width="158" height="116" border="0" title="'.$elemento['nombreproducto'].'" /></a>
										<div id="producto" class="grid_3 alpha omega">
										   <label id="tamano">
												<a href="producto/1">Invitación</a>
										   </label>
										</div>
										
										<div class="clear"></div>
										
										<div id="producto" class="grid_3 alpha omega">
											<label> $400</label>
										</div>
										
										<div class="clear"></div>
										
										<div id="producto" class="grid_3 alpha omega">
											<div id="botoncarro" class="grid_3 alpha omega">
												<form class="cart_form" action="cart.php" method="get">
													<input type="hidden" name="id_producto" value="1"/>
													<input name="cantidad" type="hidden" value="1"/>
													<input name="precio" type="hidden" value="100"/>
													<input name="status" type="hidden" value="1" />
													<input type="submit" id="acomodarbotoncarro" class="button medium blue" name="submit" value="Agregar" />
												</form>
											
											</div>
											
											<div class="clear"></div>
											
										</div>
										
										<div class="clear"></div>
													   
									</div>
								</div>
								<?
									if($contador==$por_fila){
									   echo '<div class="clear"></div>';
									   $contador=1;
									}
									else $contador++;
								?>
								<? endfor ?>	
							</div>
							<div class="clear"></div>
						</div>
						
						<div class="clear"></div>
			
						<!--pie de la pagina-->
			
						<div class="grid_12 alpha omega" id="pie">
							<div id="pienaranja" class="grid_12 alpha omega">
								&nbsp;
							</div>
							<div class="clear"></div>
							<div id="piecafe" class="grid_12 alpha omega">
								<div class="grid_3 alpha">
									&nbsp;
								</div>
								<div id="leyendapie" class="grid_6">
									© BleubyMagos 2011. Todos los derechos reservados. 
								</div>
								<div class="grid_3 omega">
									<div class="grid_1 alpha">
										&nbsp;
									</div>
									<div class="grid_1 ">
										<img id="redes" src="imagenes/face.png" width="48" height="44" />
									</div>
									<div class="grid_1 omega">
										<img id="redes" src="imagenes/twiter.png" width="48" height="44" />
									</div>
								</div>
							</div>
							<div class="clear"></div>
						</div>
						<div class="clear"></div>
						<!-- -->
					</div>
				</div>
			</div>
		</div>
	</body>
</html>