<!DOCTYPE html>
<html>
<head>
  <?php include '../html/Head.html'?>
</head>
<body>
  <?php include '../php/Menus.php' ?>
  <section class="main" id="s1">
    <div>
      <?php
      include "DbConfig.php";
      $mysql = new mysqli($server, $user, $pass, $basededatos);

      if ($mysql->connect_error) {
               die("Error de conexión: " . $mysql->connect_error);
      }
  
      	$email=$_POST["correo"];
  		$pregunta=$_POST["pregunta"];
  		$correcta=$_POST["correcta"];
  		$incorrecta1=$_POST["incorrecta1"];
  		$incorrecta2=$_POST["incorrecta2"];
  		$incorrecta3=$_POST["incorrecta3"];
  		$complejidad=$_POST["complejidad"];

  		//Código validación
  		//exp regular
  		if(!preg_match("/([a-z]+[0-9]{3}@+(ikasle\.ehu\.eus|ikasle\.ehu\.es))/", $email)&&!preg_match("/[a-z]+(\.?)+[a-z]@+(ehu\.es|ehu\.eus)/", $email)){
  			echo "El email introducido es incorrecto";
  			die("");

  		}
  		//pregunta <10
  		if(strlen($pregunta)<10){
  			echo "La pregunta debe tener al menos 10 caracteres";
  			die("");
  		}

    	$sql = "INSERT INTO preguntas VALUES (NULL,'$email','$pregunta','$correcta','$incorrecta1','$incorrecta2','$incorrecta3','$complejidad')";

            if (mysqli_query($mysql, $sql)) {
            	$correo = $_POST['correo'];
				 echo "<script>
                	alert('Pregunta añadida exitosamente');		
                	window.location.href='../php/ShowQuestions.php?correo=$correo';
             		</script>";
            } else {
            	echo "Error al insertar la pregunta en la BD.";
            }
      ?>
    </div>
  </section>
  <?php include '../html/Footer.html' ?>
</body>
</html>
