<?php include("Conexion.php");
$link=Conectarse();

if (isset($_POST['register'])) {
    if (strlen($_POST['Nombre']) >=1 && strlen($_POST['Sucursal']) >=1) {
        $name=trim($_POST['Nombre']);
        $apellido=trim($_POST['Apellidos']);
        $tel=trim($_POST['Telefono']);
        $sucursal=trim($_POST['Sucursal']);

        $consulta="INSERT INTO clientes(nombre, apellidos, telefono, sucursal) VALUES ('$name','$apellido','$tel','$sucursal')";
        $resultado=mysqli_query($link, $consulta);
        echo "<br>";

        if ($resultado) {
            ?><h3 class="ok">¡El cliente se ha registrado correctamente !</h3><?php
        }

        else {
            ?><h3 class="bad">¡Ups ha ocurrido un error !</h3><?php
        }
    }

    else {
        ?><h3 class="bad">¡Por favor complete los campos !</h3><?php
    }
}

?>