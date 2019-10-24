<!DOCTYPE html>
<html>
<head>
 <?php include '../html/Head.html'?>
</head>
<body>
 <?php include '../php/Menus.php'?>

  <section class="main" id="s1">
    <div>
  	<h2>Iniciar Sesión</h2><br>
  	<hr>
	 <form id="flogin" name="flogin" method="post">
      <br>
    	Correo electrónico<input type="email" id="correo" name="correo" size="30" required pattern="([a-z]+[0-9]{3}@+(ikasle\.ehu\.eus|ikasle\.ehu\.es))|[a-z]+(\.?)+[a-z]@+(ehu\.es|ehu\.eus)"><br><br>
    	Contraseña<input type = "password" id = "pass" name="pass" size="30" required><br><br>   
            <input type="submit" value="LogIn" name="submitbutton">   
	</form>
        <?php
        if(isset($_POST['submitbutton'])){
            include "DbConfig.php";
            $mysql = new mysqli($server, $user, $pass, $basededatos);
            if ($mysql->connect_error) {
                 die("Error de conexión: " . $mysql->connect_error);
            }
            $email=$_POST["correo"];
            $password=$_POST["pass"];
            $sql="SELECT * FROM usuarios WHERE usuarios.Email='$email'";
            $resultado = mysqli_query($mysql, $sql);
            $row = mysqli_fetch_array($resultado);
            $contraseña = $row['Password'];

            if($contraseña==$password){
                $host = $_SERVER['HTTP_HOST'];
                $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
                $extra = 'QuestionForm.php?correo='.$email;
                header("Location: http://$host$uri/$extra");
            }else{
                echo "Los datos de acceso son incorrectos";
     }

      }
          ?>
	<br><hr>
  </div>
  </section>
  <?php include '../html/Footer.html' ?>
</body>
</html>