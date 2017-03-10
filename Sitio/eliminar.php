<html lang="es">
<head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="fonts.css">
    <title>Eliminar Datoss</title>
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
    if(isset($_POST['borra'])){
        include('phps/connect.php');
        $id_producto = $_POST['idpro'];
        mysql_query('delete from productos where id='.$id_producto.';');
        //$result = mysql_query("select * from productos where id=".$id_producto";");
        //if($result){
            //echo '<script>alert("ya jaló");</script>';
        //} else {
            //echo '<script>alert("Aun no jala");</script>';
        //}
    }
    ?>
    <div class="screenbox">
        <section class="main">
            <div class="insert">
                <h1>Ingrese el producto a eliminar</h1>
                <form action="eliminar.php" method="post">
                    <label for="">ID del Producto <br />
                    <input type="text" class="id" name="idpro"></label>
                    <br /> <br />
                    <input type="submit" value="Guardar" class="save" name="borra">
                </form>
            </div>
        </section>
    </div>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="menu.js"></script>
</body>
</html>