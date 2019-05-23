	<?php

include 'conexion.php';

$resultado= mysqli_query($conexion,"select *  from contacto");


while ($consulta=mysqli_fetch_array($resultado))
{
return $consulta['nombre'],'   '$consulta['comentario'];


}


	?>
