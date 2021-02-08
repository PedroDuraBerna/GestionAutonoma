<!DOCTYPE html>
<html>
<head>
	<title>Gestión Autónoma</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<meta charset="utf-8">
</head>
<?php 

	//Inicialización de las variables
	
	$usuario = "";
	$contraseña = "";
	$errores = array();
	
	//Para cuando pulsemos el botón de entrar
	
	if(isset($_POST["Entrar"])){
		
		//recogemos las variables introducidas en el formulario
		
			$usuario = $_POST["usuario"];
			$contraseña = $_POST["contraseña"];

		$errores = datosAdminCorrectos($usuario,$contraseña,$errores);

	} 
	
	//funcion de validación de datos de admin
	
	function datosAdminCorrectos($usuario,$contraseña,$errores){
		
		if($usuario != "admin"){
			$errores["usuario"] = "err";
		}
		
		if($contraseña != "admin"){
			$errores["contraseña"] = "err";
		}	
		
		return $errores;
		
	}
	
	//Para cuando nos logeamos como usuario admin y contraseña admin nos lleva a admin.php
	
	if(empty($errores) && isset($_POST["Entrar"])){

		$direccion = "admin.php";
		header("Location: ".$direccion);

	}
?>
<body>
	<header>
		<h1>Gestión Autónoma</h1>
	</header>
	<nav class="navegacion">
		<ul class="menu">
			<li><a href="">Inicio</a></li>
			<li>Servicios 
				<ul class="submenu">
					<li><a href="">Servicio 1</a></li>
					<li><a href="">Servicio 2</a></li>
					<li><a href="">Servicio 3</a></li>
				</ul>
			</li>
			<li><a href="">Contacto</a></li>
			<li><a href="">Noticias</a></li>
		</ul>
	</nav>
	<div id="contenedorGlobal">
	<div id="contenedor1">
		<form method="POST" action="<?php echo($_SERVER["PHP_SELF"]) ?>">
			<p class="inN"><input type="text" name="usuario" placeholder="Usuario/Correo" <?php echo "value='".$usuario."'" ?> <?php if(isset($errores["usuario"])) echo "id='".$errores["usuario"]."'" ?> ></p>
			<p class="inN"><input type="password" name="contraseña" placeholder="Contraseña" <?php echo "value='".$contraseña."'" ?> <?php if(isset($errores["contraseña"])) echo "id='".$errores["contraseña"]."'" ?> ></p>
			<p class="inEn"><input type="submit" value="Entrar" name="Entrar"></p>
			<p><a href="">¿Has olvidado la contraseña?</a></p>
			<hr>
			<p class="inNu"><input type="button" value="Crear nuevo usuario" name=""></p>
		</form>
	</div>
	<div id="contenedor2">
		<h2><strong>¿QUIÉNES SOMOS?</strong></h2>
		<p>Gestión autónoma es una página web que te ofrece diferentes herramientas para la gestión de tu negocio.</p>
		<p>Se ofrecen diferentes opciones como la creación desde cero de tu sistema de gestión, comenzar con una plantilla predeterminada o incluso puedes ponerte en contacto con nosotros para que nos ocupemos del diseño.</p>
		<hr>
		<p id="sencillo">¡Con nosotros la gestión de tu negocio será mucho más sencilla!</p>
	</div>
	</div>
	<div id="contenedor3">
		<img src="imagenes/estudio.jpg" >
	</div>
	<div id="contenedor41">
	<h1>Redes Sociales</h1>
	<div id="contenedor42">
		<table>
			<tr>
				<td><a href=""><img src="imagenes/facebook.png" width="100px"></a></td>
				<td><a href="http://www.instagram.com/pedro_dube"><img src="imagenes/instagram.png" width="100px"></a></td>
				<td><a href=""><img src="imagenes/flickr.png" width="100px"></a></td>
				<td><a href=""><img src="imagenes/pinterest.png" width="100px"></a></td>
				<td><a href=""><img src="imagenes/twitter.png" width="100px"></a></td>
				<td><a href=""><img src="imagenes/youtube.png" width="100px"></a></td>
			</tr>
		</table>
	</div>
	</div>
	<div id="contenedor5">
		<h1>Últimos trabajos</h1>
		<table>
			<tr>
				<td><img src="imagenes/trabajo1.jpg" width="450" height="250"></td>
				<td><p>Trabajo donde exploramos las diferentes posibilidades del position absolute.<br><br><i>Realizado por Pedro Durá Berná para el curso de 2DAW en 2020.</i></p></td>
			</tr>
			<tr>
				<td><img src="imagenes/trabajo2.jpg" width="450" height="250"></td>
				<td><p>Trabajo donde realizamos una página web para una fisioterapeuta.<br><br><i>Realizado por Pedro Durá Berná para el curso de 2DAW en 2020.</i></p></td>
			</tr>
			<tr>
				<td><img src="imagenes/trabajo3.jpg" width="450" height="250"></td>
				<td><p>Trabajo donde exploramos las diferentes posibilidades del position absolute.<br><br><i>Realizado por Pedro Durá Berná para el curso de 2DAW en 2020.</i></p></td>
			</tr>
		</table>
	</div>
	<div id="contenedor6">
		<table>
			<tr>
				<td><h1>Gestión Autónoma</h1></td>
				<td><p><a href="">Aviso legal</a></p><p><a href="">Política de cookies</a></p></td>
				<td><p><a href="">Inicio</a></p><p><a href="">¿Quienes somos?</a></p><p><a href="">Redes Sociales</a></p><p><a href="">Contacto</a></p><p><a href="">Últimos trabajos</a></p></td>
			</tr>
		</table>
	</div>
	<footer>
		<p><strong><i>Se reservan derechos de autor 2020 Peter Hard®</i></strong></p>
	</footer>
</body>
</html>