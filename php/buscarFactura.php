<!DOCTYPE html>
<html>

<head>
    <title>Pedidos</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Estilos -->
    <link rel="shortcut icon" href="../images/restaurant.png" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/main.css"/>
    <link rel="stylesheet" href="../assets/css/venta.css"/>
    <link rel="stylesheet" href="../assets/css/buscar.css"/>
    <link rel="stylesheet" href="../assets/css/style.css"/>
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
    <!--Menu-->
    <section id="one" class="wrapper special">
        <div class="inner">
            <header class="major">
                <h2>Facturar</h2>
                <p>En este apartado se Finaliza la compra</p>
            </header>
        </div>
        <?php
         echo "<form name ='ModificaL' method='POST' action='imprimirFactura.php'>";
         ?>
        <label><select name="id" id="id">
                <option disabled selected>Cliente</option>
                <?php
            include("Conexion.php");
            $link=Conectarse();
            $consulta = "SELECT * FROM clientes";
            $ejecutar = mysqli_query($link, $consulta);
            ?>
                <?php foreach($ejecutar as $opciones):  ?>
                <option value="<?php echo $opciones['id']?>"><?php echo $opciones['nombre']?></option>
                <?php
            endforeach; 
            $link->close();
            ?>
                <label>
            </select>
            <?php
         echo "<input type='submit' name='register' value='Realizar Factura'>";
         ?>
            </form>
    </section>
    <a href="formBuscarPlatillo.php" class="button">Regresar</a>
    <!-- Scripts -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/skel.min.js"></script>
    <script src="../assets/js/util.js"></script>
    <script src="../assets/js/main.js"></script>
</body>

</html>