<div id='page-wrap'>
<header class='main' id='h1'>
  <span class="right" ><a href="../php/SignUp.php" id="signup">Registro</a></span>
  <span class="right" ><a href="../php/LogIn.php" id="login">Login</a></span>
  <span class="right"><a href="../php/LogOut.php" id="logout" style="display:none;">Logout</a></span>
</header>
<nav class='main' id='n1' role='navigation'>
  <div style="text-align: center;" id="logoutMail" style="display:none"><span><?php if (isset($_GET['correo'])) echo $_GET['correo']." "; ?></span></div>
  <span ><a href='Layout.php' id="layout">Inicio</a></span>
  <span ><a href='../php/QuestionForm.php' id="addQ" style="display:none;"> Insertar Pregunta</a></span>
  <span ><a href='../php/ShowQuestions.php' id="showQ" style="display:none;"> Ver Preguntas</a></span>
  <span ><a href='Credits.php' id="credits">Créditos</a></span>
</nav>
<?php 
if(isset($_GET['correo'])){
	$correo = $_GET['correo'];
	echo "<script src='../js/jquery-3.4.1.min.js'></script>";
	echo "<script> $('#logout').css('display', 'inline');
	$('#signup').css('display','none');
	$('#login').css('display','none');
	$('#showQ').css('display','inline');
	$('#addQ').css('display','inline');
	$('#logoutMail').css('display','inline');
	$('#welcome').text('¡Bienvenido, $correo');
	</script>";
	echo "<script>
	$('#layout').attr('href','Layout.php?correo=$correo	');
	$('#addQ').attr('href','../php/QuestionForm.php?correo=$correo');
	$('#showQ').attr('href','../php/ShowQuestions.php?correo=$correo');
	$('#credits').attr('href','Credits.php?correo=$correo');
	$('#logout').attr('href','../php/LogOut.php?correo=$correo');
	</script>";
}

?>

