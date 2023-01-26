<?php function Conectarse() {
    $cons_usuario="root";
    $cons_contra="";
    $cons_base_datos="restaurantephp";
    $cons_equipo="localhost";

    $link=mysqli_connect($cons_equipo, $cons_usuario, $cons_contra, $cons_base_datos);
    if( !$link) {
        echo "<h3>No se ha podido conectar PHP - MySQL, verifique sus datos.</h3><hr><br>";
    }
    return $link;
}

?>