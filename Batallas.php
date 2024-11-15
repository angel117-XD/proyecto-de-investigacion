<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<style type="text/css">
		body{
			background-color: peru;
			text-align: center;
			font-size: 20px;
			color: black;
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
		}.wowslider-container1{
			margin-top: 50px;
		}.ws_images{
			margin-top: 200px;
		}
	</style>


	<header>
		<nav class="navegacion">
			<ul class="menu">
				<li><a href="Inicio.php"> inicio </a></li>
				<li><a href="Blitzkrieg.php"> La Blitzkrieg </a></li>
				<li><a href="#"> Productos </a>
				    <ul class="submenu">
				    	<li><a href="VehiculosAlemanes.php">Vehiculos Alemanes</a></li>
				    	<li><a href="ArmasAlemanas.php">Armas Alemanas</a></li>
				    	<li><a href="ArmasExperimenales.php">Armas experimentales</a></li>
				    	<li><a href="Batallas.php">Batallas importantes</a></li>
				    	<li><a href="Lideres.php">Lideres importantes</a></li>
				    </ul>
				</li>
				<li><a href="FORMULARIO2 GuerecaMarin.php">Contacto</a></li>
			</ul>	
		</nav>
	</header>



	<div class="item">  
        <img src="lego4.jpg" alt="Descripción imagen 3">  
        <div class="description">Set Lego harry potter Castillo de Hogwards</div>  
    </div> 

</body>
</html>