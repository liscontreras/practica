<?php 
if($_POST){
require_once('conexion.php');	
$bandera = $_POST['bandera'];
if($bandera == "1"){	
	$establecimiento = $_POST['establecimiento'];
	$sucursal = $_POST['sucursal'];
	$fechaOrden = $_POST['fechaOrden'];
	$horaOrden = $_POST['horaOrden'];
	$mesaPara = $_POST['mesaPara'];
	$nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $cedula = $_POST['cedula'];
        $telefono = $_POST['telefono'];
        $mail = $_POST['mail'];
        $forma_pago = $_POST['forma_pago'];
	
	$query ="SELECT * FROM reservacion WHERE establecimiento = '".$establecimiento."' 
            AND sucursal= '".$sucursal."' AND fecha_orden= '".$fechaOrden."' AND hora_orden='".$horaOrden."' 
                AND numero_personas='".$mesaPara."'";
	
	$compara =pg_query($conexion,$query); 
	$contar = pg_num_rows($compara);
	if($contar == 0){
	//presentar datos que se ingreso
		echo $apellido." ". $telefono." ".$cedula." ".$mail;
		$query ="INSERT INTO reservacion(establecimiento, sucursal, fecha_orden, hora_orden,numero_personas, nombre, apellido, cedula, telefono, mail, forma_pago) VALUES ('$establecimiento','$sucursal','$fechaOrden','$horaOrden','$mesaPara','$nombre','$apellido','$cedula','$telefono','$mail','$forma_pago')";             
		$insertReserv =pg_query($conexion,$query);
		if($insertReserv){
		echo "<script>alert('insertado')</script>";
		echo"<script>window.location.reload()</script>";
		}				
		}
	else{
		echo "NO HAY DISPONIBLE ES RESERV";
		}
		
	}	
	
if($bandera == "2"){
	$fecha = $_POST['fecha'];
	$hora = $_POST['hora'];
	$mesa = $_POST['mesa'];
	$query = "SELECT * FROM reservacion WHERE fecha_orden='".$fecha."' AND hora_orden='".$hora."' AND numero_personas='".$mesa."'";
	$fechaQuery =pg_query($conexion,$query);
	$contar = pg_num_rows($fechaQuery);
	if($contar <> 0){
		echo "Ya no puedes reservar alguien ha coincidido con todos los parametros de tu reservacion<br/>";
		while($filaFecha = pg_fetch_array($fechaQuery)){
			 
			$reserva_id	= $filaFecha['reserva_id'];
			$establecimiento= $filaFecha['establecimiento'];	
			$sucursal= $filaFecha['sucursal'];	
			$fecha_orden=$filaFecha['fecha_orden'];	
			$hora_orden	=$filaFecha['hora_orden'];	
			$numero_personas=$filaFecha['numero_personas'];	
			$nombre=$filaFecha['nombre'];
				
			echo $reserva_id." - ".$establecimiento." - ".$sucursal." - ".$fecha_orden." - ".$hora_orden." - ".$numero_personas." - ".$nombre."<br/>";
			}
		}
		else{
			echo "Puedes reservar <br/>";
		}
	}
}
?>

