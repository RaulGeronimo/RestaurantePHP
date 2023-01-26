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
    <script language="javascript" type="text/javascript">
        function actualizarValor(estaChequeado, valor) {

            // Variables.
            var suma_actual = 0;
            var campo_resultado = document.getElementById('txtValor');
            valor = parseInt(valor);

            // Obtener la suma que pueda tener el campo 'txtValor'.
            try {
                if (campo_resultado != null) {

                    if (isNaN(campo_resultado.value)) {
                        campo_resultado.value = 0;
                    }

                    suma_actual = parseInt(campo_resultado.value);
                }
            } catch (ex) {
                alert('No existe el campo de la suma.');
            }

            // Determinar que: si el check está seleccionado "checked"
            // entonces, agregue el valor a la variable "suma_actual";
            // de lo contrario, le resta el valor del check a "suma_actual".
            if (estaChequeado == true) {
                suma_actual = suma_actual + valor;
            } else {
                suma_actual = suma_actual - valor;
            }

            // Colocar el resultado de las operaciones anteriores de vuelta
            // al campo "txtValor".
            campo_resultado.value = suma_actual;
        }
    </script>

    <!--Menu-->
    <?php
       include("Conexion.php");
       $link=Conectarse();
       $codigo=$_REQUEST['codigo'];
       $platillo = $_REQUEST['Platillo'];
       $var_consulta= "SELECT * FROM $platillo WHERE codigo= $codigo";
       $var_query = $link->query($var_consulta);
       echo " <section id='one' class='wrapper special'>
       <div class='inner'>
       <header class='major'>
       <h2>$platillo</h2>
       <p>En este apartado puedes realizar todos tus pedidos</p>
       </header>
       </div>
       </section>";
       ?>
    <?php
       while ($var_fila=$var_query->fetch_array())
       {
        $porta=$var_fila[4];
       //echo $porta;
       $a="../Menu/images/fulls/".$porta.".jpg";
         echo'<img src="'.$a.'"width="279" height="200" />';
          $time=time();
          $fecha=date("Y/m/d H:i:s", $time);
       
       echo "<form name ='miform' method='POST' action='registrarPlato.php'>";
       ?>
    <select name="cliente">
        <option disabled selected>Cliente</option>
        <?php
       $link=Conectarse();
       $consulta = "SELECT * FROM clientes ORDER BY nombre";
       $ejecutar = mysqli_query($link, $consulta);
       ?>
        <?php foreach($ejecutar as $opciones):  ?>
        <option value="<?php echo $opciones['id']?>"><?php echo $opciones['nombre']?></option>
        <?php
       endforeach; 
       $link->close();
       ?>
    </select>
    <?php
       echo "<br>Código del producto
       <input type='text' name='codigo' id='codigo' value='$var_fila[0]' readonly><br>
       
       Producto
       <input type='text' name='producto' id='producto' value='$var_fila[1]' readonly><br>";
       ?>
    Ingredientes<br><br>
    <div>
        <label class='container'><input type="checkbox" value="15.00"
                onclick="actualizarValor(this.checked, this.value);" />Alioli - $15.00 <span
                class='checkmark'></span></label><br>
        <label class='container'><input type="checkbox" value="25.00"
                onclick="actualizarValor(this.checked, this.value);" />Chocolate Rallado - $25.00 <span
                class='checkmark'></span></label><br>
        <label class='container'><input type="checkbox" value="15.00"
                onclick="actualizarValor(this.checked, this.value);" />Fresas - $15.00 <span
                class='checkmark'></span></label><br>
        <label class='container'><input type="checkbox" value="15.00"
                onclick="actualizarValor(this.checked, this.value);" />Moras - $15.00 <span
                class='checkmark'></span></label><br>
        <label class='container'><input type="checkbox" value="31.00"
                onclick="actualizarValor(this.checked, this.value);" />Miel - $31.00 <span
                class='checkmark'></span></label><br>
        <label class='container'><input type="checkbox" value="20.00"
                onclick="actualizarValor(this.checked, this.value);" />Nuez - $20.00 <span
                class='checkmark'></span></label><br>
        <label class='container'><input type="checkbox" value="20.00"
                onclick="actualizarValor(this.checked, this.value);" />Queso Rallado - $20.00 <span
                class='checkmark'></span></label><br>
        <label class='container'><input type="checkbox" value="25.00"
                onclick="actualizarValor(this.checked, this.value);" />Salsa Bechamel - $25.00 <span
                class='checkmark'></span></label><br>
        <label class='container'><input type="checkbox" value="40.00"
                onclick="actualizarValor(this.checked, this.value);" />Salsa de Trufa - $40.00 <span
                class='checkmark'></span></label><br>
        <label class='container'><input type="checkbox" value="55.00"
                onclick="actualizarValor(this.checked, this.value);" />Trufas con Chocolate - $55.00 <span
                class='checkmark'></span></label><br>
    </div>

    <div>
        <i>Estas Sumando </i>
        <input type="text" name="txtValor" readonly id="txtValor" value="0" /><br>
    </div>
    <?php
       echo "Precio
       <input type='text' name='precio' id='precio' value='$var_fila[3]' readonly><br>
       
       Cantidad
       <input type='text' name='cantidad' id='cantidad'><br>
       
       Fecha
       <input type='text' name='fecha' id='Fecha' value='$fecha' readonly><br>
       <input type='submit' name='register' value='Vender'>
       </form>";
       }
       ?>
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