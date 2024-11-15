<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<style type="text/css">
		body{
			background-color: peru;
			text-align: center;
			font-size: 20px;
			color: black;
		}.item{
			text-align: left;
			font-size: 30px;
			display: flex; 
            align-items: center; 
            margin-bottom: 20px;
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
				    	<li><a href="Lideres.php">Lideres Importantes</a></li>
				    </ul>
				</li>
				<li><a href="FORMULARIO2 GuerecaMarin.php">Contacto</a></li>
			</ul>	
		</nav>
	</header>



	<div class="item">  
        <img src="imagenes/HitlerDiscurso.jpg" alt="Descripción imagen 3">  
        <div class="description">Adolf Hitler</div>  
    </div> 
    <div class="item">   
        <div class="description">Fue un político alemán que lideró el Partido Nacional Socialista (Nazi). Nació en Austria y se trasladó a Alemania, donde se convirtió en Fuhrer en 1933. Su gobierno promovió el nacionalismo extremo y políticas antisemitas. Bajo su liderazgo, Alemania invadió Polonia en 1939, desencadenando la Segunda Guerra Mundial. Hitler se suicidó en su bunquer el 30 de abril de 1945, cuando Berlin estaba rodeada por los ejercitos aliados.</div>  
    </div>

    <div class="item">  
        <img src="imagenes/Rommel.jpg" alt="Descripción imagen 3">  
        <div class="description">Erwin Rommel</div>  
    </div>
    <div class="item">   
        <div class="description">Erwin Rommel tambien coocido como "El zorro del desierto" fue un general aleman encargado de la 7° division panzer al inicio de la guerra y luego del frente en africa, se enfrento a las tropas britanicas y americanas con sus "Afrika Korps" junto a las tropas italianas en batallas como la primera batalla del Alamein, la segunda batalla del alamein, la operacion crusader, la batalla de gazala, entre otras. este fue obligado a suicidarse l habersospechas de que estaba planeando un golpe de estado contra Hitler</div>  
    </div>

    <div class="item">  
        <img src="imagenes/Guderian.jpg" alt="Descripción imagen 3">  
        <div class="description">Heinz Guderian </div>  
    </div>
     <div class="item">   
        <div class="description">Fue un general alemán y pionero de la guerra blindada. Sirvió en la Primera Guerra Mundial y destacó en la Segunda como comandante de la 10.ª División Panzer en Polonia y del 2.º Cuerpo de Tanques en Francia. Lideró el 2.º Grupo de Tanques durante la Operación Barbarroja, aunque sufrió derrotas en la batalla de Kursk en 1943. Tuvo conflictos con el alto mando y fue capturado al final de la guerra, dejando un legado como influyente teórico militar.</div>  
    </div>

    <div class="item">  
        <img src="imagenes/Manstein.jpg" alt="Descripción imagen 3">  
        <div class="description">Erich Von Manstein (1887-1973)</div>  
    </div>
     <div class="item">    
        <div class="description">Fue un destacado general alemán en la Segunda Guerra Mundial. Comandó la 11.ª División de Infantería en Polonia (1939) y tuvo un papel crucial en la Batalla de Francia (1940) con la 3.ª División de Panzer. Fue responsable del Grupo de Ejércitos Sur en la Operación Barbarroja (1941) y participó en la Batalla de Stalingrado (1942-1943). En 1944, lideró el Grupo de Ejércitos del Oeste en la defensa de Alemania. Capturado al final de la guerra, Manstein se convirtió en un influyente teórico militar.    </div>  
    </div>

</body>
</html>