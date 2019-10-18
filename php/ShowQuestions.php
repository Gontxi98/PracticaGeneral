<!DOCTYPE html>
<html>
<head>
  <?php include '../html/Head.html'?>
</head>
<body>
  <?php include '../php/Menus.php' ?>
  <section class="main" id="s1">
    <div>
    <div align="center">
    <h1>Tabla de preguntas de la BD</h1>	
    </div>
    <hr><br>
    </table>
    <table align="center" border="1px">
    	<tr>
    		<th>ID pregunta</th>
    		<th>Autor</th>
    		<th>Pregunta</th>
    		<th>Respuesta correcta</th>
    		<th>Respuesta incorrecta 1</th>
    		<th>Respuesta incorrecta 2</th>
    		<th>Respuesta incorrecta 3</th>
    		<th>&nbsp;Complejidad&nbsp;</th>
    	</tr>
    <?php
      include "DbConfig.php";
      $mysql = new mysqli($server, $user, $pass, $basededatos);

       if ($mysql->connect_error) {
               die("Error de conexión: " . $mysql->connect_error);
      }

      $sql = "SELECT * FROM preguntas";

      $resultado = mysqli_query($mysql,$sql);

      while($row = mysqli_fetch_array($resultado)){
      	echo '<tr><td>' . $row['ID'] . '</td><td>' . $row['Autor'] . '</td><td>' . $row['Pregunta'] . '</td><td>' . $row['Respuesta correcta'] . '</td><td>' . $row['Respuesta incorrecta1'] . '</td><td>' . $row['Respuesta incorrecta2'] . '</td><td>' . $row["Respuesta incorrecta3"] . '</td><td>' . $row["Complejidad"] . '</td></tr>';
      }
    ?>
	</table>
    </div>
  </section>
  <?php include '../html/Footer.html' ?>
</body>
</html>
