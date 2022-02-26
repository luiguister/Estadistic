<?php
    session_start();    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Estad&iacute;stica</title>
        <link rel="stylesheet" href="css/estilo.css"/>
    </head>
    <body>
        <?php
            if(isset($_GET['op'])){
                if($_GET['op']=='bs'){
                    session_destroy();
                    header('location:index.php');
                }
            }            
            require_once './controladores/CEstadistica.php';
            $cEstadistica   =new CEstadistica();
            if(!isset($_GET['funcion'])){                
                $numeros    =$cEstadistica->registrar_numero();
                require './vistas/vingreso2.php'; 
            }else{//Si se envio la funcion
                $cEstadistica->procesar();
            }
        ?>
    </body>
</html>