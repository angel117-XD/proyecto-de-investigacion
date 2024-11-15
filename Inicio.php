<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<!-- Start WOWSlider.com HEAD section -->
    <link rel="stylesheet" type="text/css" href="engine1/style.css" />
    <script type="text/javascript" src="engine1/jquery.js"></script>
    <!-- End WOWSlider.com HEAD section -->

	
</head>
<body>
	<style type="text/css">
		body{
			background-color: peru;
			text-align: center;
			font-size: 20px;
			color: darkblue;
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
			margin-top: 500px;
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

	

	<!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container1">
<div class="ws_images"><ul>
		<li><img src="data1/images/hitlerenparis.jpg" alt="hitlerEnParis" title="hitlerEnParis" id="wows1_0"/></li>
		<li><img src="data1/images/hitlerdiscurso.jpg" alt="HitlerDiscurso" title="HitlerDiscurso" id="wows1_1"/></li>
		<li><img src="data1/images/gustafcaon.jpg" alt="GustafCañon" title="GustafCañon" id="wows1_2"/></li>
		<li><img src="data1/images/maus.jpg" alt="Maus" title="Maus" id="wows1_3"/></li>
		<li><img src="data1/images/panther.jpg" alt="Panther" title="Panther" id="wows1_4"/></li>
		<li><img src="data1/images/kingtiger.jpg" alt="KingTiger" title="KingTiger" id="wows1_5"/></li>
		<li><img src="data1/images/tiger1.jpg" alt="Tiger1" title="Tiger1" id="wows1_6"/></li>
		<li><img src="data1/images/tiger_h_2.jpg" alt="Tiger H -2" title="Tiger H -2" id="wows1_7"/></li>
		<li><img src="data1/images/stug3.jpg" alt="Stug3" title="Stug3" id="wows1_8"/></li>
		<li><img src="data1/images/pz38t.jpg" alt="Pz38t" title="Pz38t" id="wows1_9"/></li>
		<li><img src="data1/images/sd.kfz234.jpg" alt="Sd.Kfz234" title="Sd.Kfz234" id="wows1_10"/></li>
		<li><img src="data1/images/pz3.jpg" alt="Pz3" title="Pz3" id="wows1_11"/></li>
		<li><img src="data1/images/pz4.jpg" alt="PZ4" title="PZ4" id="wows1_12"/></li>
		<li><img src="data1/images/pz4c.jpg" alt="Pz4c" title="Pz4c" id="wows1_13"/></li>
		<li><img src="data1/images/fw109.jpg" alt="Fw109" title="Fw109" id="wows1_14"/></li>
		<li><img src="data1/images/fw190.jpg" alt="Fw190" title="Fw190" id="wows1_15"/></li>
		<li><img src="data1/images/ju87.jpg" alt="Ju87" title="Ju87" id="wows1_16"/></li>
		<li><img src="data1/images/he111.jpg" alt="He111" title="He111" id="wows1_17"/></li>
		<li><img src="data1/images/me262.jpg" alt="Me262" title="Me262" id="wows1_18"/></li>
		<li><img src="data1/images/do17.jpg" alt="Do17" title="Do17" id="wows1_19"/></li>
		<li><a href="http://wowslider.net"><img src="data1/images/he162.jpg" alt="html5 slider" title="He162" id="wows1_20"/></a></li>
		<li><img src="data1/images/ho229.jpg" alt="Ho229" title="Ho229" id="wows1_21"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="hitlerEnParis"><span><img src="data1/tooltips/hitlerenparis.jpg" alt="hitlerEnParis"/>1</span></a>
		<a href="#" title="HitlerDiscurso"><span><img src="data1/tooltips/hitlerdiscurso.jpg" alt="HitlerDiscurso"/>2</span></a>
		<a href="#" title="GustafCañon"><span><img src="data1/tooltips/gustafcaon.jpg" alt="GustafCañon"/>3</span></a>
		<a href="#" title="Maus"><span><img src="data1/tooltips/maus.jpg" alt="Maus"/>4</span></a>
		<a href="#" title="Panther"><span><img src="data1/tooltips/panther.jpg" alt="Panther"/>5</span></a>
		<a href="#" title="KingTiger"><span><img src="data1/tooltips/kingtiger.jpg" alt="KingTiger"/>6</span></a>
		<a href="#" title="Tiger1"><span><img src="data1/tooltips/tiger1.jpg" alt="Tiger1"/>7</span></a>
		<a href="#" title="Tiger H -2"><span><img src="data1/tooltips/tiger_h_2.jpg" alt="Tiger H -2"/>8</span></a>
		<a href="#" title="Stug3"><span><img src="data1/tooltips/stug3.jpg" alt="Stug3"/>9</span></a>
		<a href="#" title="Pz38t"><span><img src="data1/tooltips/pz38t.jpg" alt="Pz38t"/>10</span></a>
		<a href="#" title="Sd.Kfz234"><span><img src="data1/tooltips/sd.kfz234.jpg" alt="Sd.Kfz234"/>11</span></a>
		<a href="#" title="Pz3"><span><img src="data1/tooltips/pz3.jpg" alt="Pz3"/>12</span></a>
		<a href="#" title="PZ4"><span><img src="data1/tooltips/pz4.jpg" alt="PZ4"/>13</span></a>
		<a href="#" title="Pz4c"><span><img src="data1/tooltips/pz4c.jpg" alt="Pz4c"/>14</span></a>
		<a href="#" title="Fw109"><span><img src="data1/tooltips/fw109.jpg" alt="Fw109"/>15</span></a>
		<a href="#" title="Fw190"><span><img src="data1/tooltips/fw190.jpg" alt="Fw190"/>16</span></a>
		<a href="#" title="Ju87"><span><img src="data1/tooltips/ju87.jpg" alt="Ju87"/>17</span></a>
		<a href="#" title="He111"><span><img src="data1/tooltips/he111.jpg" alt="He111"/>18</span></a>
		<a href="#" title="Me262"><span><img src="data1/tooltips/me262.jpg" alt="Me262"/>19</span></a>
		<a href="#" title="Do17"><span><img src="data1/tooltips/do17.jpg" alt="Do17"/>20</span></a>
		<a href="#" title="He162"><span><img src="data1/tooltips/he162.jpg" alt="He162"/>21</span></a>
		<a href="#" title="Ho229"><span><img src="data1/tooltips/ho229.jpg" alt="Ho229"/>22</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">javascript carousel</a> by WOWSlider.com v9.0</div>
<div class="ws_shadow"></div>
</div>	
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
<!-- End WOWSlider.com BODY section -->

	

</body>
</html>