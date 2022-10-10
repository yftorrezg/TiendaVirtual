<!-- conexion -->
<?php
  $host = "localhost";
  $user = "root";
  $pass = "";
  $bd = "bd_tienda_clientes";

  $conexion = mysqli_connect($host, $user, $pass, $bd);

  if (!$conexion) {
    echo "Error al conectar con la base de datos";
  }else{
    echo "Conectado a la base de datos";
  }
?>