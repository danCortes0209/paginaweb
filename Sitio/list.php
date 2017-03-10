<html lang="es">
<head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="fonts.css">
    <title>Lista De Productos</title>
</head>
<body>
    <header>
        <div class="menu_bar">
            <a href="#" class="bt_menu"><span class="icon-menu"></span>Menu</a>
        </div>
        <nav>
            <ul>
                <li><a href="index.php"><span class="icon-home"></span>Insertar</a></li>
                <li><a href="eliminar.php"><span class="icon-info"></span>Eliminar</a></li>
                <li><a href="modificar.php"><span class="icon-cog"></span>Modificar</a></li>
                <li><a href="list.php"><span class="icon-bubble"></span>Lista de Productos</a></li>
            </ul>
        </nav>
    </header>
    <div class="screenbox">
        <section class="main">
            <div class="tableDiv">
                <h1>Lista de productos</h1>
                <table class="dataTable">
                    <tr class="tableHeader">
                        <td class="idTr">ID</td>
                        <td>Producto</td>
                        <td>Descripci&oacute;n</td>
                        <td>Precio Compra</td>
                        <td>Precio Venta</td>
                    </tr>
                    <?php
                        include('phps/connect.php');
                        $result = mysql_query('SELECT * FROM productos');
                        while ($fila = mysql_fetch_array($result)){
                            echo '<tr>
                            <td>'.$fila['id'].'</td>
                            <td>'.$fila['producto'].'</td>
                            <td>'.$fila['descripcion'].'</td>
                            <td>'.$fila['existencias'].'</td>
                            <td>'.$fila['p_compra'].'</td>
                            <td>'.$fila['p_venta'].'</td>
                            </tr>';
                        }
                    ?>
                </table>
            </div>
        </section>
    </div>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="menu.js"></script>
</body>
</html>
