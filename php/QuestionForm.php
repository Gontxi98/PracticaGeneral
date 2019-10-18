<!DOCTYPE html>
<html>
<head>
  <script src="../js/jquery-3.4.1.min.js"></script>
  <script src="../js/ValidateFieldsQuestion.js"></script>
  <?php include '../html/Head.html'?>
</head>
<body>
 <?php include '../php/Menus.php' ?>

  <section class="main" id="s1">
  	<h2>Diseña tu propia pregunta</h2><br>
  	<hr>
	<form id="fquestion" name="fquestion" method="post" action="AddQuestion.php">
      <br>
    	Correo electrónico <input type="text" id="correo" name="correo" size="30">*<br><br>
    	Enunciado de la pregunta <input type="text" id="pregunta" name="pregunta" size="30">*<br><br>
    	Respuesta CORRECTA <input type="text" id="correcta" name="correcta" size="30">*<br><br>
    	Respuesta incorrecta 1 <input type="text" id="incorrecta1" name="incorrecta1" size="30">*<br><br>
    	Respuesta incorrecta 2 <input type="text" id="incorrecta2" name="incorrecta2" size="30">*<br><br>
    	Respuesta incorrecta 3 <input type="text" id="incorrecta3" name="incorrecta3" size="30">*<br><br>
    	Complejidad de la pregunta*<br>
    	<select name= "complejidad" id= "complejidad">
          <option value="1">Baja</option>
          <option value="2">Media</option>
          <option value="3">Alta</option>
      </select><br><br> 
      <input type="submit" value="Enviar">
	</form>
	<br><hr>
  </section>
  <?php include '../html/Footer.html' ?>
</body>
</html>