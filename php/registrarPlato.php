<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos</title>
    <!-- Estilos -->
    <link rel="shortcut icon" href="../images/restaurant.png" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/main.css"/>
    <link rel="stylesheet" href="../assets/css/venta.css"/>
    <link rel="stylesheet" href="../assets/css/buscar.css"/>
</head>

<body class="subpage">
    <!-- Header -->
    <header id="header" class="alt">
        <div class="logo"><a href="../index.html">Lemua <span>ICO O5</span></a></div>
        <a href="#menu"><span>Menu</span></a>
    </header>
    <!--Menu de Navegacion-->
    <nav id="menu">
        <ul class="links">
            <li><a href="../index.html">Inicio</a></li>
            <li><a href="../Menu.html">Carta</a></li>
            <li><a href="./insertarCliente.php">Reservar</a></li>
            <li><a href="../Galeria.html">Galeria</a></li>
            <li><a href="../Conocenos.html">Conocenos</a></li>
            <li><a href="../Contacto.html">Contactenos</a></li>
        </ul>
    </nav>

    <?php
         include("Conexion.php");
         $link=Conectarse();
         if (isset($_POST['register'])) {
          if (strlen($_POST['cliente']) >= 1 && strlen($_POST['cantidad']) >= 1) {
         
          $cliente=$_REQUEST['cliente'];
          $platillo=$_REQUEST['producto'];
          $precio=$_REQUEST['precio'];
         
          $cantidad=$_REQUEST['cantidad'];

          $ingredientes=$_REQUEST['txtValor'];

          //Total
         $total=$cantidad*($ingredientes+$precio);
          $fecha=$_REQUEST['fecha'];
         
          $consulta = "INSERT INTO cuenta(idCliente, nombrePlatillo, precio, cantidad, ingredientes, total, fechaReg) VALUES ('$cliente', '$platillo', '$precio', '$cantidad', '$ingredientes', '$total', '$fecha')";
          $resultado = mysqli_query($link,$consulta);
          if ($resultado) {
            ?>
    <h3 class="ok">¡El pedido se ha registrado correctamente!</h3>
    <?php
         } else {
         ?>
    <h3 class="bad">¡Ups ha ocurrido un error!</h3>
    <?php
         }
         }   else {
         ?>
    <h3 class="bad">¡Por favor complete los campos!</h3>
    <?php
         }
         }
         ?>

    <footer>
        <a href="formBuscarPlatillo.php" class="button">Seguir Ordenando</a>
        <a href="buscarFactura.php" class="button">Realizar Factura</a>
    </footer>
    <!-- Scripts -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/skel.min.js"></script>
    <script src="../assets/js/util.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="https://kit.fontawesome.com/712575d4a5.js" crossorigin="anonymous"></script>
</body>

</html>