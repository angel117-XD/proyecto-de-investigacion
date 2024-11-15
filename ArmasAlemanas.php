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
			font-size: 40px;
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
				<li><a href="Nosotros.php"> Nosotros </a></li>
				<li><a href="#"> Productos </a>
				    <ul class="submenu">
				    	<li><a href="VehiculosAlemanes.php">Vehiculos Alemanes</a></li>
				    	<li><a href="ArmasAlemanas.php">Armas Alemanas</a></li>
				    	<li><a href="ArmasExperimentales.php">Vehiculos Experimentales</a></li>
				    	<li><a href="Lideres.php">Lideres Importantes</a></li>
				    </ul>
				</li>
				<li><a href="FORMULARIO2 GuerecaMarin.php">Contacto</a></li>
			</ul>	
		</nav>
	</header>



	<div class="item">
		<img src="imagenes/mp40.jpg" alt="Descripcion"> 
		<div class="Descripcion">mp 40</div>
    </div>
    <div class="item"> 
		<div class="Descripcion">La maschinen pistole 40 o mp40 era un subfusil aleman en calibre 9x19mm con una cadencia de entre 550 tiros por minuto lo que combinado a su calibre la hacian facil de controlar, e ideal para combates a cortas distancias.   </div>
    </div>

    <div class="item">  
        <img src="imagenes/mg42.jpg" alt="Descripción imagen 1">  
        <div class="description">MG42</div>  
    </div>
    <div class="item">
		<div class="Descripcion">La maschinen gun 42 o MG42 era una ametralladora de proposito general en calibre 7.92x57mm Mauser, esta tenia una abrumadora cadencia de 1200 tiros por minuto o 20 balas por segundo, lo que sumado a su calibre la hacia capas de cercenar extremidades muy facil, lo que le gano el apodo de "La motosierra de Hitler".</div>
    </div>  

    <div class="item">  
        <img src="imagenes/kar98.jpg" alt="Descripción imagen 2">  
        <div class="description">Kar 98k</div>  
    </div>  
    <div class="item"> 
		<div class="Descripcion">El Kar98k, o Karabiner 98 kurz, es un rifle de cerrojo alemán utilizado como arma estándar del Wehrmacht durante la Segunda Guerra Mundial. Introducido en 1935, dispara el calibre 7.92×57 mm Mauser. Es conocido por su precisión y fiabilidad, con un alcance efectivo de 500 metros y un cargador de cinco disparos. </div>
    </div>

    <div class="item">  
        <img src="imagenes/stg44.jpg" alt="Descripción imagen 3">  
        <div class="description">STG 44</div>  
    </div>  
    <div class="item">
		<div class="Descripcion">El Sturm Gewehr 44 o STG 44 fue un fusil de asalto aleman y el primero de su tipo, dispara el calibre 7.92x57mm Mauser, tenia una cadencia de 600 tiros por minuto o 10 balas por segundo, esta arma es considerada como el primer fusil de asalto de la historia.  </div>
    </div>

	<img src="lego1.jpg">
	<img src="lego2.jpg">
	<img src="lego3.jpg">
	<img src="lego4.jpg">

</body>
</html>