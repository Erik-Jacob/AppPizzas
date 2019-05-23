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


<ul data-role="listview" data-insert="true" data-split-icon="gear" data-split-theme="d">


<li data-role="list-divider" data-theme="c">Nuestros Productos</li>
<li data-theme="c">
	<a href="#">
	<img src="images/producto.png">
	<h2>Producto 1</h2>
	<p>Pizza Mexicana con Chiles</p>
	<a href="#promo1" data-rel="popup" data-positiion-to="window" data-transition="pop"> Mas Información</a>
	</a>
</li>

<li data-theme="c">
	<a href="#">
	<img src="images/oferta.png">
	<h2>Producto 2</h2>
	<p>Pizza de peperoni</p>
	<a href="#promo2" data-rel="popup" data-positiion-to="window" data-transition="pop"> Mas Información</a>
	</a>
</li>


<li data-theme="c">
	<a href="#">
	<img src="images/oferta2.png">
	<h2>Producto 3</h2>
	<p>Pizza con doble peperoni y doble queso</p>
	<a href="#promo3" data-rel="popup" data-positiion-to="window" data-transition="pop"> Mas Información</a>
	</a>
</li>

</ul>
<div data-role="popup" id="promo1" data-theme="d" class="ui-content" data-overlay-theme="b">
<h3>Promociones</h3>
<p>Pizza a la Mexicana con Chiles y aderesos caseros. Comprar por solo $102.99  </p>
<form id="form1" action="" method="POST">
<u>
<input type="text" name="nombreProm1" placeholder="Escribe tu nombre" required="">
  <input type="text" name="telefonoProm1" placeholder="Escribe tu telefono" required="">
   <input type="text" name="direccionProm1" placeholder="Escribe tu direccion" required="">
<input type="submit" name="Producto1" value="Enviar Pedido">
  </u>
</form>
</div>


<div data-role="popup" id="promo2" data-theme="d" class="ui-content" data-overlay-theme="b">
<h3>Promociones</h3>
<p>Pizza de peperoni estilo American Hot. Comprar por solo $105.00  </p>
<form id="form2" action="" method="POST">
<u>
<input type="text" name="nombreProm2" placeholder="Escribe tu nombre" required="">
  <input type="text" name="telefonoProm2" placeholder="Escribe tu telefono" required="">
   <input type="text" name="direccionProm2" placeholder="Escribe tu direccion" required="">
  </u>
<input type="submit" name="Registrar" value="Enviar Pedido">
</form>
</div>


<div data-role="popup" id="promo3" data-theme="d" class="ui-content" data-overlay-theme="b">
<h3>Promociones</h3>
<p>Pizza con doble peperoni y doble queso chedar. Comprar por solo $200.00 </p>
<form id="form3" action="" method="POST">
<u>
<input type="text" name="nombreProm3" placeholder="Escribe tu nombre" required="">
  <input type="text" name="telefonoProm3" placeholder="Escribe tu telefono" required="">
   <input type="text" name="direccionProm3" placeholder="Escribe tu direccion" required="">

 </u>
<input type="submit" name="Registrar" value="Enviar Pedido">
</form>
</div>

</div>


<div data-role="content" data-theme="b">
<ul data-role="listview" data-insert="true" data-split-icon="gear" data-split-theme="d">



<li data-role="list-divider" data-theme="c">Promocines especiales del dia</li>
<li data-theme="c">
	<a href="#">
	<img src="images/oferta.png">
	<h2>Promocion 1</h2>
	<p>Pizza con peperoni</p>
	<a href="#prod1" data-rel="popup" data-positiion-to="window" data-transition="pop"> Mas Información</a>
	</a>
</li>

<li data-theme="c">
	<a href="#">
	<img src="images/oferta2.png">
	<h2>Promocion 2</h2>
	<p>Alistas Buffalo</p>
	<a href="#prod2" data-rel="popup" data-positiion-to="window" data-transition="pop"> Mas Información</a>
	</a>
</li>


<li data-theme="c">
	<a href="#">
	<img src="images/oferta3.jpg">
	<h2>Promocion 3</h2>
	<p>Pastel de carne</p>
	<a href="#prod3" data-rel="popup" data-positiion-to="window" data-transition="pop"> Mas Información</a>
	</a>
</li>

</ul>
<div data-role="popup" id="prod1" data-theme="d" class="ui-content" data-overlay-theme="b">
<h3>Promociones</h3>
<p>Pizza de peperonio con doble queso, preparada en sarten.  Comprar por solo $78.99 </p>
<form id="form4" action="" method="POST">
<u>
<input type="text" name="nombreProd1" placeholder="Escribe tu nombre" required="">
  <input type="text" name="telefonoProd1" placeholder="Escribe tu telefono" required="">
   <input type="text" name="direccionProd1" placeholder="Escribe tu direccion" required="">

</u>
<input type="submit" name="Registrar" value="Enviar Pedido">
</form>
</div>


<div data-role="popup" id="prod2" data-theme="d" class="ui-content" data-overlay-theme="b">
<h3>Promociones</h3>
<p>10 Alitas estilo buffalo, con adereso cesar. Comprar por solo $56.00 </p>  
<form id="form5" action="" method="POST">
 <u>
 <input type="text" name="nombreProd2" placeholder="Escribe tu nombre" required="">
  <input type="text" name="telefonoProd2" placeholder="Escribe tu telefono" required="">
   <input type="text" name="direccionProd2" placeholder="Escribe tu direccion" required="">
 </u>
<input type="submit" name="Registrar" value="Enviar Pedido">
</form>
</div>

<div data-role="popup" id="prod3" data-theme="d" class="ui-content" data-overlay-theme="b">
<h3>Promociones</h3>
<p>10 Alitas estilo buffalo, con adereso cesar. Comprar por solo $56.00 </p>  
<form id="form6" action="" method="POST">
 <u>
 <input type="text" name="nombreProd2" placeholder="Escribe tu nombre" required="">
  <input type="text" name="telefonoProd2" placeholder="Escribe tu telefono" required="">
   <input type="text" name="direccionProd2" placeholder="Escribe tu direccion" required="">
 </u>
 <input type="submit" name="Registrar" value="Enviar Pedido">
 </form>

</div>






	<div><p></p></div>




</div> <!-- Fin del la Pgina-->




				
<!-- Pie de pagina-->
<div data-role="footer" data-theme="b">
<h4>Pizza Tec. todos los derechos reservados</h4>
</div>




<?php
	if(isset($_POST['producto1'])){
			$nombre=$_POST['nombre'];
			$telefono=$_POST['telefono'];
			$direccion=$_POST['direccion'];

$registro= mysqli_query($conexion,"insert into pedidos (nombre,telefono,direccion) values
('$nombre','$telefono','$direccion') ") or die (mysqli_error("Error al registrar"));

}else{
	
}

?>


</body>
</html>