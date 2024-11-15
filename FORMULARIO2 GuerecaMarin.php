<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	 <style>  
        body {  
            font-family: Arial, sans-serif;  
            background-color: peru;  
            margin: 0;  
            padding: 20px;
              
        }  
        .form-container {  
            background-color: #fff;  
            border-radius: 5px;  
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);  
            padding: 20px;  
            max-width: 400px;  
            margin: auto;  
        }  
        label {  
            display: block;  
            margin: 10px 0 5px;  
        }  
        input[type="text"],  
        select {  
            width: 100%;  
            padding: 10px;  
            margin-bottom: 10px;  
            border: 1px solid #ccc;  
            border-radius: 4px;  
        }  
        input[type="radio"],  
        input[type="checkbox"] {  
            margin-right: 5px;  
        }  
        input[type="submit"] {  
            background-color: #28a745;  
            color: white;  
            border: none;  
            padding: 10px;  
            border-radius: 4px;  
            cursor: pointer;  
            width: 100%;  
        }  
        input[type="submit"]:hover {  
            background-color: #218838;  
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
                        <li><a href="ArmasExperimentales.php">Armas Experimentales</a></li>
                        <li><a href="Lideres.php">Lideres Importantes</a></li>
                    </ul>
                </li>
                <li><a href="FORMULARIO2 GuerecaMarin.php">Contacto</a></li>
            </ul>   
        </nav>
    </header>





	<div class="form-container">
		<form>
			<label>Nombre</label><br>
			<input type="text" name="txtnombre" placeholder="Nombre Completo"><br><br>

			<label>Estado Civil</label><br>
			<select name="cboEstadocivil" title="Estado Civil">
				<option value="Casado" selected="select">Casado</option>
				<option value="Soltero" selected="select">Soltero</option>  
                <option value="Divorciado" selected="select">Divorciado</option>  
            </select><br><br>  
            <label>  
            <input type="radio" name="rsexo" value="Hombre">Hombre  
            </label>  
            <label>  
            <input type="radio" name="rsexo" value="Mujer">Mujer  
            </label>  
            <label>  
            <input type="radio" name="rsexo" value="39 tipos de Gey">39 tipos de Gey  
            </label>
            <input type="checkbox" name="chkpublicidad">Deseo recibir publicidad<br>  
            <input type="submit" name="enviar" value="enviar">  
        </form>  
    </div>  
</body>
</html>