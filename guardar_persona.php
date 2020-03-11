<?php
//datos de conexion
  $host = "localhost";
  $user = "root";
  $pass="";
  $base = "personas";
  //crear la conexion
  $con=new mysqli($host,$user,$pass,$base);
  //prueba de conexion 
  if($con->connect_error){//si la conexion da error
    echo "base de datos no disponible";
  }else{
      echo "conectados a la base de datos <br>";
  }
  
  $nombre = $_POST["nombre"];
  $email = $_POST["email"];

  echo "la informacion enviada es: Nombre: $nombre $email";
  $query = "insert into personas(nombre,email) values('$nombre', '$email')";
  if($con->query($query)){
      echo "persona guardada corectamente";
  }else{
      echo "no se ha podiso guardar la persona.".$con->error;
  }
  
  $con->close();
  header('location: crear.php');
    
?>