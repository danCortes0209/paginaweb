<?php
    //$connect = mysql_connect('localhost','dancor36_1','Vaneamor') or die('Imposible conectarse');
    
    $connect = mysql_connect('localhost','root','') or die('Imposible conectarse');
    mysql_select_db('dancor36_1',$connect);
    if($connect){
        echo '<script>alert("Estamos conectados");</script>';
    } else {
        echo '<script>alert("Valio queso men");</script>';
    }

?>