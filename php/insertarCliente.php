<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Cliente</title>
    <!-- Estilos -->
    <link rel="shortcut icon" href="../images/restaurant.png" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/estilo.css">
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

    <!-- Form -->
    <div id="wrapper">
        <form method="post">
            <h1>Registrar Cliente</h1>
            <input type="text" name="Nombre" placeholder="Nombre" required>
            <input type="text" name="Apellidos" placeholder="Apellidos" required>
            <input type="tel" name="Telefono" pattern="[0-9]{3}[0-9]{3}[0-9]{4}"
                title="Un número de teléfono válido consiste en un área de código de 3 dígitos entre paréntesis, un espacio, los tres primeros dígitos del número, un espacio o hypen (-), y cuatro dígitos más."
                placeholder="Numero de Telefono" required />
            <select name="Sucursal" required>
                <option disabled selected value="">Seleccione una Sucursal</option>
                <option>La deuxième section de la tour de lÚnion</option>
                <option>Roosevelt 1 Av. Caracoles</option>
                <option>Av. Campos Eliseos franchesco</option>
                <option>Monaco troisième 178</option>
                <option>Burdeso 15 Colosio Sarco</option>
                <option>Parc des Princes 1</option>
                <option>Av. Boulevard Roman 3</option>
                <option>Monte Carlo Rogers II</option>
                <option>Jour 1672 Lyon</option>
            </select>
            <input type="submit" name="register">
        </form>
        <footer>
            <a href="../index.html" class="button">Regresar</a>
            <a href="./formBuscarPlatillo.php" class="button">Ordenar</a>
        </footer>
    </div>
    <?php 
         include("registrarCliente.php");
         ?>
    <!-- Scripts -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/jquery.scrolly.min.js"></script>
    <script src="../assets/js/jquery.scrollex.min.js"></script>
    <script src="../assets/js/skel.min.js"></script>
    <script src="../assets/js/util.js"></script>
    <script src="../assets/js/main.js"></script>
</body>

</html>