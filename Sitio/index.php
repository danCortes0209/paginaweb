<html lang="es">
<head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="fonts.css">
    <title>Insertar Datos</title>
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
    <?php
    if(isset($_POST['guardar'])){
        include('phps/connect.php');
        $producto = $_POST['produ'];
        $descripcion = $_POST['descr'];
        $existencias = $_POST['exist'];
        $pcompra = $_POST['pcomp'];
        $pventa = $_POST['pvent'];
        mysql_query('INSERT INTO productos(producto,descripcion,existencias,p_compra,p_venta) VALUES ('.$producto.','. $descripcion.',' .$existencias.','. $pcompra.','.$pventa.');'); 
    } else {
        echo '<script>alert("Valio queso men");</script>';
    }
    ?> 
    <div class="screenbox">
        <section class="main">
            <div class="insert">
                <h1>Guardar Productos</h1>
                <form action="index.php" method="post">
                    <label for="">Producto<br />
                    <input type="text" class="prod" name="produ"></label>
                    <br />
                    <label for="">Descripcion<br />
                    <input type="text" class="desc" name="descr"></label>
                    <br />
                    <label for="">Existencias<br />
                    <input type="text" class="exis" name="exist"></label>
                    <br />
                    <label for="">Precio de Compra<br />
                    <input type="text" class="pcom" name="pcomp"></label>
                    <br />
                    <label for="">Precio de venta<br />
                    <input type="text" class="pven" name="pvent"></label>
                    <br /> <br />
                    <input type="submit" value="Guardar" class="save" name="guardar">
                </form>
            </div>
            </section>
        </div>
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="menu.js"></script>
</body>
</html>
