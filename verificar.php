<!-- verificar usuario y contraseña -->
<?php
session_start();
  echo "<h3>cpnectado</h3>";
    // verificar usuario o email y contraseña
    $nombre = $_POST['nombre'];
    $clave = $_POST['clave'];

    include("conexion.php");
    $verificar = "SELECT * FROM registro WHERE nombre = '$nombre' AND clave = '$clave'"; 
    $ejecutar = $conexion->query($verificar);
    $fila = mysqli_fetch_array($ejecutar);
/*     echo $fila['nombre'];
    echo $fila['clave'];
    echo $nombre;
    echo $clave; */
    if ($fila['nombre'] == $nombre && $fila['clave'] == $clave) {
      $_SESSION['nombre'] = $fila['nombre'];
      echo "<script>alert('Bienvenido $nombre')</script>";
      echo "<script>window.open('inico.html', '_self')</script>";
    }else{
      echo "<script>alert('Nombre o contraseña incorrecta')</script>";
      echo "<script>window.open('login.php', '_self')</script>";
    }
?>
