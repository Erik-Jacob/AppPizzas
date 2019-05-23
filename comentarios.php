

<?php

include 'conexion.php';

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Pizza Tec</title>
<meta name"viewport" content="width=devie-width,inicial-scale=1">
<link rel="stylesheet"  href="css/jquery.mobile-1.3.0.min.css">

<script src="js/jquery.js"></script>
<script src="js/jquery.mobile-1.3.0.js"></script>

</head>

<body>

<!-- Pagina de Inicio -->
<div data-role="page" id="inicio">


<!-- Encabezado-->
<div data-role="header" data-theme="c">
<a href="index.html" data-icon="home">Inicio</a>
<a href="comentarios.php" data-icon="grid">Ver comentarios</a>
<h1><img src="images/logo.png"></h1>
<h1> App Para Pizzas</h1>


<mav data-role="navbar">
	<ul>
			<li><a href="acerca.html" data-icon="start" data-theme="c">Acerca</a></li>
		<li><a href="producto.php" data-icon="check" data-theme="c">Prodcutos</a></li>
		<li><a href="sucursales.html" data-icon="search" data-theme="c">Sucursaes</a></li>
		<li><a href="contacto.php" data-icon="info" data-theme="c">Contanto</a></li>
	</ul>
</mav>

</div>




<!-- Cuerpo de la pagina-->


<div data-role="content"> 

			<ul data-role="listview" data-inset="true" data-theme="d" data-divider-theme="d" 
			data-count-theme="b">
			<li data-role="list-divider">Comentarios</li>
			</ul>


<form action="" method="POST">
<input type="submit" name="mostrar" value="Mostrar">

	

</form>

<?php
	if(isset($_POST['mostrar'])){


$registro= mysqli_query($conexion,"select * from contacto") or die (mysqli_error("Error al registrar"));
while ($consulta=mysqli_fetch_array($registro)) 
{


	echo "<h4>".$consulta['nombre']."</h4>",'  ',$consulta['comentario'];
	echo "<br>";
	echo "<br>";

}

}else{
	
}

?>






<!-- Pie de pagina-->
<div data-role="footer" data-theme="b">
<h4>Pizza Tec. todos los derechos reservados</h4>
</div>


</div> <!-- Fin del la Pgina-->





	



</body>
</html>
