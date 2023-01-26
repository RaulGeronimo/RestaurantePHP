<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos</title>
    <!-- Estilos -->
    <link rel="shortcut icon" href="../images/restaurant.png" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/main.css" />
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link rel="stylesheet" href="../assets/css/contacto.css" />
    <link rel="stylesheet" href="../assets/css/buscar.css" />
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

    <!-- FORM -->
    <form action="insertarPedido.php" method="POST">
        <div class="buscar">
            <input type="text" name="codigo" placeholder="Ingrese el codigo" required>
            <div class="btn">
                <i class="fas fa-search"></i>
            </div>
        </div>
        <br><br><br>
        <div>
            <label>
                <select name="Platillo" required>
                    <option disabled selected value="">Tipo de Comida</option>
                    <option value="entradas">Entradas</option>
                    <option value="postres">Postres</option>
                    <option value="bebidas">Bebidas</option>
                </select>
                <label>
        </div>
    </form>

    <!--Menu-->
    <section id="one" class="wrapper special">
        <div class="inner">
            <header class="major">
                <h2>Pedidos</h2>
                <p>En este apartado puedes realizar todos tus pedidos</p>
            </header>
        </div>
    </section>

    <footer>
        <a href="insertarCliente.php" class="button">Regresar</a>
    </footer>
    <!-- Scripts -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/skel.min.js"></script>
    <script src="../assets/js/util.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="https://kit.fontawesome.com/712575d4a5.js" crossorigin="anonymous"></script>
</body>

</html>