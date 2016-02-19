<?php
	session_start();
?>

<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Refresh" content="300"> <!--Se refrescara la pagina cada 300 segundos es decir 5 minutos-->
<meta name="application-name" content="Reserva de mesas,pedidos de menus personalizados  y pagos via online para restaurantes gourmet">
<meta name="author" content="Roger Peñafiel, rpenafie@espol.edu.ec" /> 
<meta name="copyright" content="AlimFaster"> <!--Nombre de la compañia-->
<meta name="organization" content="AlimFaster S.A." /> <!--Nombre de la Organizacion-->
<meta name="language" content="es-ES" /> <!--Lenguaje de la pagina web español-->
<meta name="classification" content="Reservas">
<meta name="description" content="Reserva de espacio en un restaurante de gourmet asociado" /> <!--Descripcion de la pagina web-->
<meta name="generator" content="Bloc de notas,gedit"> <!--Cual es la herramienta que se utiliza para editar, crear la pagina web-->
<meta name="keywords" content="reserva de restaurantes gourmet,  reserva de pedido y pago online de restaurantes gourmet, reserva de un espacio en restaurantes gourmet" /> <!--Palabras claves para que los navegadores puedan identificar y rankear nuestra pagina web-->
<meta name="robots" content="index,follow"> <!--etiqueta que sirve para que los bucadores puedan recorrer tu pagina web-->
<link href="../css/styleRestaurant.css" rel="stylesheet" type="text/css">
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="../js/jquery.js"></script>
<script>
$(window).load(function(){
$("#mapita").click(function(){
	$(this).next().toggle();
});
});
</script>
<title>Formulario de Registro</title>
</head>
<body >
<?php
include_once("PersonaDatos.php");
include_once("UsuarioDatos.php");
$id = 1;
$PersonaDatosObj = new Detalle_facturaDatos();
$UsuarioDatosObj = new ProductoDatos();
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
<div class="botones">

				<a href="../index.php"><button type="button" class="botonHomeNextBack"><img src="../img/home.png" height="40" width="40" alt="px"></button></a>
				
				<a href="../index.php"><button type="button" class="botonHomeNextBack"><img src="../img/back.png" height="40" width="40" alt="px"></button></a>
</div>
</div>

</div>
</div>
<div class="fondoPantalla" style="width: 100%">
<div class="container">
    <div class="row">
        
        <div class="col-md-8">
        <div class="table-responsive">    
			<form action="">
				<br/>
				<h2>DATOS DEL USUARIO</h2>
				  <div class="divForm">
				  <label class=" col-xs-3" for="nombre">Nombre</label>
				  <input id="nombre" type="text" />
				  </div>
				  
				  <div class="divForm">
				  <label class=" col-xs-3" for="apellido">Apellido</label>
				  <input id="apellido" type="text" />
				  </div>

				<div class="divForm">
				<label class=" col-xs-3" for="usuario">Usuario</label>
				<input id="usuario"  type="text" />
				</div>
				
				<div class="divForm">
				<label class=" col-xs-3" for="cedula">Cedula o Ruc</label>
				<input id="cedula" maxlength="13" type="text" />
				</div>

				<div class="divForm">				
				<label class=" col-xs-3" for="correo">Mail</label>
				<input id="correo" type="text" />
				</div>

				<div class="divForm">
				<label class=" col-xs-3" for="genero">Genero</label>
				<input id="genero" type="text" />
				</div>

				<div class="divForm">
				<label class=" col-xs-3" for="civil">Estado Civil</label>
				<input id="civil" type="text" />
				</div>
					
				<div class="divForm">	
				<label class=" col-xs-3" for="telefono">Telefono</label>
				<input id="telefono" maxlength="10" type="text" />
				</div>

				<div class="divForm">
				<label class=" col-xs-3" for="direccion">Direccion</label>
				<input id="direccion" type="text" />
				</div>
				
				<div class="divFormBoton">
					<a href="primera.php">
						<input class="objetoFormReservarForm" type="button" value="Guardar"/>
					</a>
					<br/><br/>
				</div>
			</form>	
		</div>
        </div>
    </div>
</div>


 		
		
		
</div>

<div class="footer">
<br/>
Contactenos: desarrollo@gmail.com.<br/> Ecuador 2015
<br/><br/>
</div>
</body>
</html>