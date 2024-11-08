
<?php
	  $nombre= $_POST["NOMBRE"];
	  $apellido = $_POST["APELLIDO"];
    $contraseña = $_POST["CONTRASEÑA"];
    $id = $_POST["id"];
    $correo = $_POST["CORREO"];
    $servername = "127.0.0.1";
    $database = "ritta";
    $username = "alumno";
    $password = "alumnoipm";
    
    $conexion = mysqli_connect($servername, $username, $password, $database); // se crea la conexion


    if (!$conexion) {
        die("Conexion fallida: " . mysqli_connect_error());
    }
    else{
        //insertamos el resultado del formulario
        $query = "insert into usuario values('$nombre', '$id', '$apellido', '$correo','$contraseña');";
        $resultado=mysqli_query($conexion, $query);
        header('Location: index.php');
    }

    mysqli_close($conexion);
?>