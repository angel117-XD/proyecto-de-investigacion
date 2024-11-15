<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Menu1 Guereca Marin</title>
</head>
<body>
	<style type="text/css">
		body{
			background-color: peru;
			width: 100%;
		}
		.navegacion{
			width: 60%;
			margin: 30px auto;
			background: orange;
		}
		.navegacion ul{
			list-style: none;
		}
		.menu > li {
			position: relative;
			display: inline-block;
		}
		.menu >li >a {
			display: block;
			padding-left: 20px;
			padding-right: 20px;
			padding-top: 15px;
			padding-bottom: 15px;
			color: ghostwhite;
			font-family: 'monospace';
			text-decoration: none;
		}
		.menu li:hover{
			visibility: visible;
		}
		.submenu li a{
			display: block;
			padding: 15px;
			color: #fff;
			font-family: monospace;
			text-decoration: none;
		}
		.submenu{
			position: absolute;
			background: #333333;
			width: 130px;
			visibility: hidden;
			opacity: 0;
			transition: opacity 1.5x;
		}
		.menu li:hover .submenu{
			visibility: visible;
			opacity: 1;
		}
		
		

	</style>

	<header>
		<nav class="navegacion">
			<ul class="menu">
				<li><a href="Inicio.php"> inicio </a></li>
				<li><a href="Nosotros.php"> Nosotros </a></li>
				<li><a href="#"> Productos </a>
				    <ul class="submenu">
				    	<li><a href="Legos.php">Legos</a></li>
				    	<li><a href="MegaConstrux.php">Mega Construx</a></li>
				    </ul>
				</li>
				<li><a href="FORMULARIO2 GuerecaMarin.php">Contacto</a></li>
			</ul>	
		</nav>
	</header>

</body>
</html>