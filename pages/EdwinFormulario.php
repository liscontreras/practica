<?php
	session_start();
?>
<!doctype html>
<html lang="es">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta http-equiv="Refresh" content="300"> <!--Se refrescara la pagina cada 300 segundos es decir 5 minutos-->
<meta name="application-name" content="Reserva de mesas,pedidos de menus personalizados  y pagos via online para restaurantes gourmet">
<meta name="author" content="Edwin Estacio, edwindavid.11@hotmail.com" /> 
<meta name="copyright" content="AlimFaster"> <!--Nombre de la compañia-->
<meta name="organization" content="AlimFaster S.A." /> <!--Nombre de la Organizacion-->
<meta name="language" content="es-ES" /> <!--Lenguaje de la pagina web español-->
<meta name="classification" content="Reservas,Confirmacion">
<meta name="description" content="Confirmacion de pedidos del menu personalizado de comidas gourmet" /> <!--Descripcion de la pagina web-->
<meta name="generator" content="Bloc de notas"> <!--Cual es la herramienta que se utiliza para editar, crear la pagina web-->
<meta name="keywords" content="confirmacion de reserva de pedidos gourmet, confirmacion reservas de pedidos y pagos online de restaurantes gourmet, confirmacion de la personalizacion de pedidos de menus gourmet" /> <!--Palabras claves para que los navegadores puedan identificar y rankear nuestra pagina web-->
<meta name="robots" content="index,follow"> <!--etiqueta que sirve para que los bucadores puedan recorrer tu pagina web-->
<link href="../css/styleRestaurant.css" rel="stylesheet" type="text/css">
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css">


<link href="../css/full-slider.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Confirmacion de Pedido - Restaurante</title>
</head>
<body>
<?php
include_once("EdwinDatos.php");
$EdwinDatosObj = new EdwinDatos();
?>

<!-- boostrap -->
	<div class="jumbotron">
	<div class="bannerSuperior">
		
			<!-- Logo Y Texto Banner  -->
<div class="jumbotron">
<div class="banImgText">
				 <div class="col-md-8">
				<img src="../img/logotipo.png" title="Restaurante1"  height="100" width="240" alt="px">
				</div>
				<div class="col-md-4">
				<h1>Restaurant</h1>
				</div>
</div>
				</div>
				
<!-- Botones  -->
<div class="jumbotron">
</div>
		
	</div>
	</div>
	<div class="fondoPantalla" style ="width = 100%">
		<div class="container">
		<table class="table table-striped-edwin"  BORDER=10>
				<thead class="CaberaSuperiorTablaStriped">
					<tr ALIGN=center>
						<th>Codigo</th>
						<th>Descripcion</th>
						<th>Costo</th>
						<th>Pvp</th>
						<th>Utilidad</th>
						<th>Menu</th>
						<th width="3%" ></th>
					</tr>
				</thead>
				<tbody class="fuente">
					<?php
					foreach ($EdwinDatosObj->consultaGeneral() as $c){
					?>
					<tr>					
						<td><?php echo $c->getCodigo(); ?> </td> 
						<td><?php echo $c->getDescrip(); ?> </td>
						<td><?php echo $c->getprecio(); ?></td>
						<td>0</td>
						<td>0</td>
						
							<td>0 </td>
						<td width="3%" align="center"><a href="ProductoEliminar.php?id=<?php echo $c->getCodigo(); ?>">Eliminar</a></td>
						 
					</Tr>
					<?php}?>
					
				</tbody>
			</table> 
			<a href="ProductoFormularioInsertar.php?codeProd=<?php echo $idProducto; ?>">Nuevo Producto</a>
		</div>
  
		<div class="row">  
			<div class="divFormBoton">
				<a href="administracion_pagina.php"> 
					<input class="objetoConfirmarPedido" type="submit" value="Cancelar"/>
				</a>
			</div>
		</div>
		<div class="divEspacioEnBlanco"> </div> 
	</div>
	<div class="footer">
	Contáctenos: desarrollo@gmail.com.<br/> Ecuador 2015
	</div>
</body>

</html>