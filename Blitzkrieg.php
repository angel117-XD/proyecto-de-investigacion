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
			text-align: left;
			font-size: 30px;
			color: black;
		}.item{
			text-align: left;
			font-size: 30px;
			display: flex; 
            align-items: center; 
            margin-bottom: 50px;
		}.item img{
			margin-right: 20px;
			margin-left: 20px;
			max-width: 300px;
			transition: transform 0.3s ease, box-shadow 0.3s ease;
		}.item img:hover {  
            transform: scale(1.1); /* Aumentar tamaño al 110% */  
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3); /* Sombra */  
        }.item2{
			text-align: left;
			font-size: 30px;
			display: flex; 
            align-items: center; 
            margin-bottom: 50px;
		}.item2 img{
			margin-right: 20px;
			margin-left: 20px;
			max-width: 300px;
			transition: transform 0.3s ease, box-shadow 0.3s ease;
		}.item2 img:hover {  
            transform: scale(1.1); /* Aumentar tamaño al 110% */  
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3); /* Sombra */  
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
				<li><a href="Blitzkrieg.php"> La Blitzkrieg </a></li>
				<li><a href="#"> Productos </a>
				    <ul class="submenu">
				    	<li><a href="VehiculosAlemanes.php">Vehiculos Alemanes</a></li>
				    	<li><a href="ArmasAlemanas.php">Armas Alemanas</a></li>
				    	<li><a href="ArmasExperimentales.php">Armas experimentales</a></li>
				    	<li><a href="Lideres.php">Lideres importantes</a></li>
				    </ul>
				</li>
				<li><a href="FORMULARIO2 GuerecaMarin.php">Contacto</a></li>
			</ul>	
		</nav>
	</header>


	 <div class="item">  
        <img src="imagenes/Blitzkrieg.jpg" alt="Descripción imagen 3">  
        <div class="description"> La Blitzkrieg o Guerra relampago fue una tactica de guerra desarrollada y perfeccionada por los alemanes durante la segunda guerra mundial la cual concistia en el uso constante de artilleria y bombarderos sobre una sola posicion enemiga para despues hacer un ataque rapido y preciso mediante infanteria y vehiculos blindados para romper asi las lineas defensivas del enemigo y haci penetrar en su territorio de forma rapida</div>  
     </div> 

      <div class="item2">  
        <img src="imagenes/Blitzkrieg2.jpg" alt="Descripción imagen 3">  
        <div class="description">Esta Blietzkrieg fue especialmente util para entrar en francia por el bosque de las ardenas, ya que los franceses decidieron interrumpir ahi la linea de fortificaciones conocida como "la linea maginot" por que creyeron que ninguna fuerza terrestre podria avanzar por ahi. </div>  
     </div> 



</body>
</html>