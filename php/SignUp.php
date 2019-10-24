<!DOCTYPE html>
<html>
<head>
  <?php include '../html/Head.html'?>
</head>
<body>
 <?php include '../php/Menus.php' ?>

  <section class="main" id="s1">
  	<h2>Introduce tus datos para el registro</h2><br>
  	<hr>
	<form action="SignUp.php" id="fsignup" name="fsignup" method="post">
      <br>
      	Tipo usuario <input type="radio"name="tipo" value="alumno" checked> Alumno 
      	<input type="radio" name="tipo" value="profesor"> Profesor<br><br>
    	Nombre y Apellido(s) <input type="text" id="nom_ap" name="nom_ap" size="50" required pattern="(([a-zA-z]+\s?\b){2,}">*<br><br>
    	Correo <input type="email" id="correo" name="correo" size="30" required pattern="([a-z]+[0-9]{3}@+(ikasle\.ehu\.eus|ikasle\.ehu\.es)))?+([a-z]+(\.?)+[a-z]@+(ehu\.es|ehu\.eus))?">*<br><br>
    	Contraseña <input type="password" id="password" name="password" size="30" required>*<br><br>
    	Repetir contraseña <input type="password" id="passRe" name="passRe" size="30" required>*<br><br>
      </select><br><br> 
      <input type="submit" name="registrar" value="Registrarse">
	</form>
	<br><hr>
	<?php 
		if(isset($_POST["registrar"])){
      	$correo = isset($_POST["correo"]) ? $_POST["correo"] : '';
  		$nom_ap = isset($_POST["nom_ap"]) ? $_POST["nom_ap"] : '';
  		$tipo = isset($_POST["tipo"]) ? $_POST["tipo"] : '';
  		$password = isset($_POST["password"]) ? $_POST["password"] : '';
  		$passwordRe= isset($_POST["passRe"]) ? $_POST["passRe"] : '';

  		if($tipo == "alumno"){
  			if(!preg_match("/([a-z]+[0-9]{3}@+(ikasle\.ehu\.eus|ikasle\.ehu\.es))/", $correo)){
  				echo "El formato del email no corresponde al del tipo de usuario seleccionado";
  				die("");
  			}
  		} else{
  			if(!preg_match("/[a-z]+(\.?)+[a-z]@+(ehu\.es|ehu\.eus)/", $correo)){
  				echo "El formato del email no corresponde al del tipo de usuario seleccionado";
  				die("");
  			}
  		}
  		if($password!=""){
  			if(strlen($password)<6){
  				echo "La contraseña debe tener al menos 6 caracteres";
  				die("");
  			}
		}

  			if(strcmp($password,$passwordRe)!=0){
  				echo "Las contraseñas no coinciden";
  				die("");
  			}

		include "DbConfig.php";

      	$mysql = new mysqli($server, $user, $pass, $basededatos);

        if ($mysql->connect_error) {
               die("Error de conexión: " . $mysql->connect_error);
        }
      		$sql = "INSERT INTO usuarios VALUES('$correo','$nom_ap','$password','$tipo')";
      		 if (mysqli_query($mysql, $sql)) {
      		 	echo "¡Te has registrado con éxito <b>".$nom_ap."</b>!<br>";
      		 	echo "Inicia sesión <a href='../php/LogIn.php'>aquí</a><br>";
            } else {
            	echo "Este usuario ya existe";
            }
  		}		
  	?>
  </section>
  <?php include '../html/Footer.html' ?>
</body>
</html>