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
				<li><a href="Blitzkrieg.php"> La Blitzkrieg </a></li>
				<li><a href="#"> Productos </a>
				    <ul class="submenu">
				    	<li><a href="VehiculosAlemanes.php">Vehiculos Alemanes</a></li>
				    	<li><a href="ArmasAlemanas.php">Arma Alemanas</a></li>
				    	<li><a href="ArmasExperimentales.php">Armas Experimentales</a></li>
				    	<li><a href="Lideres.php">Lideres Importantes</a></li>
				    </ul>
				</li>
				<li><a href="FORMULARIO2 GuerecaMarin.php">Contacto</a></li>
			</ul>	
		</nav>
	</header>



	<div class="item">
		<img src="imagenes/Ho229.jpg" alt="Descripcion"> 
		<div class="Descripcion">Ho 229</div>
    </div>
    <div class="item">
		<div class="Descripcion">El Horten Ho 229 fue un avion caza-bombardero experimental, este fue pionero en la elaboracion de aviones con motor a Chorro y uno de los primeros en utilizar la configuracion de ala volante o ala delta.</div>
    </div>

    <div class="item">  
        <img src="imagenes/He162.jpg" alt="Descripción imagen 1">  
        <div class="description">He 162</div>  
    </div>
     <div class="item">  
        <div class="description">El Heinkel He 162 fue uno de los primeros cazas a reaccion de la historia, este fue diseñado para competir con el Meserchsmit Me 262 como una alternativa mas barata de este.</div>  
    </div>  

    <div class="item">  
        <img src="imagenes/Maus.jpg" alt="Descripción imagen 2">  
        <div class="description">Maus</div>  
    </div>
     <div class="item">  
        <div class="description">El Maus fue un tanque super pesado experimental Aleman que pretendia poner la balanza a favor de alemania a finales de la guerra, pero solo se logro producir un prototipo y este nunca llego a las lineas de produccion. Este tenia un blindaje frontal de 150mm y un blindaje lateral de 80mm en el chasis y en la torreta un blindaje frontal de 200mm y un blindaje lateral de 80mm, asi como un cañon de 128mm. Este gigante de acero pesaba unas 188 toneladas, lo que lo convierte en el tanque mas pesado de la historia. </div>  
    </div>   

    <div class="item">  
        <img src="imagenes/GustafCañon.jpg" alt="Descripción imagen 3">  
        <div class="description">Cañon Schwerer Gustav</div>  
    </div>  
     <div class="item">   
        <div class="description">El cañon Gustav fue la pieza de artilleria mas grande jamas construida, esta tenia que ser transportada mediante railes de ferrocarril debido a sus enormes dimensiones de 47 metros de largo y 8 metros de altura y un peso de 1,350 toneladas, asi como un cañon de 800mm. </div>  
    </div>  

    <div class="item">  
        <img src="imagenes/v1.jpg" alt="Descripción imagen 3">  
        <div class="description">V1</div>  
    </div><div class="item">.   
        <div class="description">El V1 fue un arma experimental alemana usada durante la segunda guerra mundial, fue utilizada principakmente para bombardear al reino unido desde francia. Este es considerado como el primer misil de crusero de la historia.  </div>  
    </div> 

	<img src="lego1.jpg">
	<img src="lego2.jpg">
	<img src="lego3.jpg">
	<img src="lego4.jpg">

</body>
</html>