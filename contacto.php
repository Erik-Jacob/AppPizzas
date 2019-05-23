

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

			<div data-role="collapsible-set" data-theme="c" data-content-theme="d" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">



<div data-role="collapsible" data-theme="b" data-content-theme="b">
			<h3>Politicas de Envio</h3>
			<p>*Los precios de envio solo son validos dentro de la ciudad de Zacatecas.</p>
			<p>*El cliente se compromete a dar una direccion donde se estregara el producto.</p>
			<p>*Todas las pizzas enviadas van perfectamente empaquetadas, si a la hora de la entrega el cliente nota  una anomalia en el empaque no la reciba y exija un reembolso.</p>
			<p>*Si su pedidio llega despues de 45 min su entrega es gratis.</p>
			<p>*El  tamaño de las pizzas puede variar por la elaboracion artesanal y horneado.</p>
			<p>*Los precios en promociones estan sujetos a cmbios y sin previo aviso. </p>

</div>




			<div data-role="collapsible" data-theme="b" data-content-theme="c">
			<h3>Formulario Contacto</h3>
			<form id="form1" action="" method="POST">
				<input type="text" name="nombre" placeholder="Escribe tu nombre" required="">

				<input type="email" name="email" placeholder="Escribe tu email" required="">
				<select>
					<option>Comentario</option>
					<option>Sugerencia</option>
					<option>Pregunta</option>
				</select>
				<textarea name="comentario" placeholder="Escribe lo que desees..." required=""></textarea>

				<input type="submit" name="registrar" value="enviar">
			</form>
			</div>







			<div data-role="collapsible" data-theme="b" data-content-theme="b">
			<h3>Informacion del Contacto</h3>
			<p><b>Nombre: </b> Erik Jacob Salas Cruz</p>
			<p><b>Direccion: </b> San Judas #121, San Fernando</p>
			<p><b>Celular: </b> 492-144-01-22</p>
			<p><b>E-Mail: </b> ingerjasacr@gmail.com</p>
			<p> <b>Facebook: </b> <a href="https://www.facebook.com/erikjacob.salascruz" target="_blank"><img alt="siguenos en facebook" height="32" src="http://2.bp.blogspot.com/-q_Tm1PpPfHo/UiXnJo5l-VI/AAAAAAAABzU/MKdrVYZjF0c/s1600/face.png" title="siguenos en facebook" width="32" /></a>
  			 </p>
  			 </div>


	<div data-role="collapsible" data-theme="b" data-content-theme="b">
			<h3>Facturacion</h3>
			<p>Ingrese a la siguiente direción para solicitar su facturación:</p>
			<p> <a href="https://www.siat.sat.gob.mx/PTSC/" target="_blank"><img alt="SAT - Sistema de Administracion Tributaria" height="32"/></a>
  			 </p>
  			 </div>


	



			<div data-role="collapsible" data-theme="b" data-content-theme="b">
			<h3>Mapa de hubicacion</h3>
			<p>



<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4362.218815895093!2d-102.6089256607522!3d22.769780577391703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86824e1a8ef6a1f3%3A0x12c21d36c75c07e5!2sFraccionamiento+San+Fernando%2C+Zacatlan%2C+98160_00+Zacatecas%2C+Zac.!5e1!3m2!1ses!2smx!4v1496815719540" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>


			</p>
			</div>

	



<form action="" method="POST">
<input type="submit" name="mostrar" value="Mostrar">

	

</form>
<?php
	if(isset($_POST['mostrar'])){


$registro= mysqli_query($conexion,"select * from contacto") or die (mysqli_error("Error al registrar"));
echo "<textarea>";
while ($consulta=mysqli_fetch_array($registro)) 
{


	echo $consulta['nombre'],"\n";
	echo $consulta['comentario'],"\n\n";


}
echo "</textarea>";
}else{
	
}

?>





			</div>
			</div>




<!-- Pie de pagina-->
<div data-role="footer" data-theme="b">
<h4>Pizza Tec. todos los derechos reservados</h4>
</div>


</div> <!-- Fin del la Pgina-->


<?php
	if(isset($_POST['registrar'])){
			$nombre=$_POST['nombre'];
			$email=$_POST['email'];
			$comentario=$_POST['comentario'];

$registro= mysqli_query($conexion,"insert into contacto (nombre,email,comentario) values
('$nombre','$email','$comentario') ") or die (mysqli_error("Error al registrar"));

}else{
	
}

?>

</body>
</html>