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
			color: black;
			font-size: 20px;
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
				<li><a href="BlitzKrieg.php"> La Blitzkrieg </a></li>
				<li><a href="#"> Productos </a>
				    <ul class="submenu">
				    	<li><a href="VehiculosAlemanes.php">Vehiculos Alemanes</a></li>
				    	<li><a href="ArmasAlemanas.php">Armas Alemanas</a></li>
				    	<li><a href="ArmasExperimentales.php">Armas Experimentales</a></li>
				    	<li><a href="Lideres.php">Lideres Importantes</a></li>
				    </ul>
				</li>
				<li><a href="FORMULARIO2 GuerecaMarin.php">Contacto</a></li>
			</ul>	
		</nav>
	</header>



	<div class="item">
		<img src="imagenes/Stug3.jpg" alt="Descripcion"> 
		<div class="Descripcion">El Stug III fue un caza carros Aleman de la segunda guerra mundial, este fue el blindado aleman mas efectivo de la guerra, este tenia una potencia de fuego mas que suficiente para atravesar a la mayoria de blindados sovieticos al inicio de la operacion "Barba Roja". este en sus primeras versiones tenia un blindaje frontal de 40mm inclinado y un blindaje lateral de 30mm inclinado, asi como un cañon de 75mm corto. </div>
    </div>

    <div class="item">  
        <img src="imagenes/TigerH.jpg" alt="Descripción TigerH">  
        <div class="descripcion">El Tiger 1 fue un tanque pesado Aleman de la Segunda Guerra Mundial famoso por su diseño imponente y por tener una potencia de fuego devastadora. Este contaba con un blindaje frontal de hasta 100mm en angulo y un blindaje lateral 80mm, lo cual lo volvia casi impenetrable para la mayoria de armas y cañones antitanque de la epoca y un potente cañon de 88mm  que podia atravesar con facilidad a la mayoria de los blindados aliados. </div>  
    </div>  

    <div class="item">  
        <img src="imagenes/Pz3.jpg" alt="Descripción imagen 2">  
        <div class="description">El Panzer III fue un tanque ligero Aleman de la Segunda Guerra Mundial, este se destaco al inicio de la guerra, pero con el tiempo fue superado por blindados aliados mas avanzados. este contaba con un blindaje frontal de 30mm y un blindaje lateeral de 20mm en sus primeras versionas, asi como un cañon de 37mm. </div>  
    </div>  

    <div class="item">  
        <img src="imagenes/Pz4.jpg" alt="Descripción imagen 3">  
        <div class="description">El panzer IV fue el tanque aleman mas producido en todo el confictosiendo producidas unas 8,800 unidades de este entre 1937 y 1945, este tenia un blindaje frontal de 30mm a 80mm en algunas partes y un blindaje lateral de 20mm a 30mm, asi como un cañon de 75mm </div>  
    </div>  

	<img src="lego1.jpg">
	<img src="lego2.jpg">
	<img src="lego3.jpg">
	<img src="lego4.jpg">

</body>
</html>