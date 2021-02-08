<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<?php
	$clientes = array();
	$clientes["nombre"] = array("Sonia Alcántara Hernández","Pascuala Navidad Pérez");
	$clientes["direccion"] = array("Calle falsa Nº123","Nuves Oscuras Nº5");
	$clientes["tlf"] = array("987654321","598316229");
?>

<body>
<div id="contenedorAdmin">
<nav class="navegacion">
			<ul class="menu">
				<li><a href="index.php">Salir</a></li>
				<li>Privado</li>
				<li>Público</li>
				<li><a href="">Contacto</a></li>
			</ul>
		</nav>
</div>
<div id="trabajo">
<div id="herramientas">
	<ul>
		<li id="red"><strong>Herramientas</strong></li>
		<li>Facturas</li>
		<a href="clientes.php"><li>Clientes</li></a>
		<li id="opc">Empleados</li>
		<a href="contactos.php"><li>Contactos</li></a>
		<li>Proveedores</li>
		<li>Documentos</li>
		<li>Gastos</li>
	</ul>
	</div>
	<div id="areaTrabajo">
		<p id="cabecera"><a href="admin.php">Área de trabajo</a></p>
		<?php
			for($i = 0; $i < count($clientes["nombre"]); $i++){
				$indice = $i + 1;
				$nombre = $clientes["nombre"][$i];
				$direccion = $clientes["direccion"][$i];
				$tlf = $clientes["tlf"][$i];
				echo "<div>";
				echo "<h3>Empleado ".($i+1)."</h3>";
				echo "<table>";
				echo "<tr>";
				echo "<td><img src='imagenes/clientes/img$indice.jpg' width='100px'></td>";
				echo "<td>";
				echo "<p><strong>Nombre: </strong>$nombre</p>";
				echo "<p><strong>Dirección: </strong>$direccion</p>";
				echo "<p><strong>Número de teléfono: </strong>$tlf</p>";
				echo "</td>";
				echo "</table>";
				echo "</div>";
			}
		?>
	</div>
<div id="utilidades">
	<ul>
		<li id="red"><strong>Utilidades</strong></li>
		<li>Calculadora</li>
		<li>Email</li>
		<li>Notas</li>
		<li>Avisos</li>
		<li>Documentos</li>
	</ul>
	</div>
</div>
</body>
</body>
</html>