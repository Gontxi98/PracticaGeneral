<!DOCTYPE html>
<html>
<head>
  <?php include '../html/Head.html'?>
</head>
<body>
  <?php include '../php/Menus.php' ?>
  <section class="main" id="s1">
    <?php 
    	echo "Hasta pronto, ".$_GET['correo'];	
    	echo "<script>window.location.href='../php/Layout.php?';</script>";
    ?>
  </section>
  <?php include '../html/Footer.html' ?>
</body>
</html>

