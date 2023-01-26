<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu de Entrada</title>
    <!-- Estilos -->
    <link rel="shortcut icon" href="../images/restaurant.png" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/style.css"/>
    <link rel="stylesheet" href="../assets/css/contacto.css">
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
    <!-- Menu -->
    <section class="wrapper special" id="one">
        <div class="inner">
            <header class="major">
                <h2>Entradas</h2>
                <p>En este apartado puedes ver los datos por cada uno de nuestros platillo que servimos de Entrada</p>
                <?php
                include("Conexion.php");
                $link=Conectarse();

                $var_consulta= "SELECT * FROM entradas";
                echo  '<img src= "../Menu/images/banner1.jpg" height="350" />';
                $var_query = $link->query($var_consulta);

                echo "<table align =center border=1 bgcolor=#FFDE9B>";
                  echo"<tr>";
                  echo "<td> No. Platillo </td>";
                  echo "<td> Nombre Entrada </td>";
                  echo "<td> Ingredientes </td>";
                  echo "<td> Precio </td>";
                  echo "<td> Imagen </td>";
                  echo"</tr>";
                  while ($var_fila=$var_query->fetch_array())
                  {
                  $id=$var_fila[0];
                  $nombre=$var_fila[1];
                  $ingre=$var_fila[2];
                  $precio=$var_fila[3];
                  $img=$var_fila[4];

                  echo "<td>",$id,"</td>";
                  echo "<td>",$nombre,"</td>";
                  echo "<td>",$ingre,"</td>";
                  echo "<td>",$precio,"</td>";

                  $a="../Menu/images/fulls/".$img.".jpg";
                   echo"<td>",'<img src="'.$a.'"width="179" height="100" />';

                  echo "<tr><br>";
                  }
                  echo "</table>";
                  echo "<a href='consultaBebida.php' class='button'>Bebidas</a>";
                  echo "<a href='consultaPostres.php' class='button'>Postres</a>";
                  
                  $link->close();
                    ?>
            </header>
        </div>
    </section>
    <footer>
        <a href="opcionesEntrada.html" class="button">Regresar</a>
        <a href="insertarCliente.php" class="button">Ordenar</a>
    </footer>

    <!-- Scripts -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/jquery.scrolly.min.js"></script>
    <script src="../assets/js/jquery.scrollex.min.js"></script>
    <script src="../assets/js/skel.min.js"></script>
    <script src="../assets/js/util.js"></script>
    <script src="../assets/js/main.js"></script>
</body>

</html>