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
  
    	$sql = "INSERT INTO preguntas VALUES (NULL,'$email','$pregunta','$correcta','$incorrecta1','$incorrecta2','$incorrecta3','$complejidad')";

            if (mysqli_query($mysql, $sql)) {
				 echo "<script>
                	alert('Pregunta añadida exitosamente');
                	window.location.href='../php/ShowQuestions.php';
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
