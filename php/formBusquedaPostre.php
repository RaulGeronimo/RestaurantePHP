<!DOCTYPE html>
<html lang="es">

<head>
    <title>Buscar Postre</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Estilos -->
    <link rel="shortcut icon" href="../images/restaurant.png" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/main.css"/>
    <link rel="stylesheet" href="../assets/css/style.css"/>
    <link rel="stylesheet" href="../assets/css/contacto.css"/>
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
    <form action="buscarPostre.php" method="POST">
        <div class="buscar">
            <input type="text" name="codigo" placeholder="Ingrese el codigo" required>
            <div class="btn">
                <i class="fas fa-search"></i>
            </div>
        </div>
    </form>
    <!--Menu-->
    <section id="one" class="wrapper special">
        <div class="inner">
            <header class="major">
                <h2>Postres</h2>
                <p>En este apartado puedes buscar cada uno de nuestros Postres</p>
                <?php
                  echo "<table align =center border=1 bgcolor=#FFDE9B>";
                  echo"<tr>";
                  echo "<td> No. Platillo </td>";
                  echo "<td> Nombre Postre </td>";
                  echo "<td> Ingredientes </td>";
                  echo "<td> Precio </td>";
                  echo "<td> Imagen </td>";
                  echo"</tr>";
                    ?>
            </header>
        </div>
    </section>
    <footer>
        <a href="opcionesPostres.html" class="button">Regresar</a>
        <a href="insertarCliente.php" class="button">Ordenar</a>
    </footer>
    <!-- Scripts -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/skel.min.js"></script>
    <script src="../assets/js/util.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="https://kit.fontawesome.com/712575d4a5.js"></script>
</body>

</html>