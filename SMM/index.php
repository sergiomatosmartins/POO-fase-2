<?php
/**
 * Created by PhpStorm.
 * User: sergio
 * Date: 13/06/2016
 * Time: 15:09
 */

//define('CLASS_DIR', 'src/');
//set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
//spl_autoload_register();


    // Your custom class dir
    define('CLASS_DIR', 'src/');

    // Add your class dir to include path
    set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);

    // You can use this trick to make autoloader look for commonly used "My.class.php" type filenames
    //spl_autoload_extensions('.class.php');

    // Use default autoload implementation
    spl_autoload_register();



$p = @$_GET['p'];

if ($p == "D"){
    $p = "Modulos\clienteDetalhe";
    $titulo = "Cadastro Cliente";
}else{
    $p = "Modulos\clienteLista";
    $titulo = "Lista Cliente";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Curso Programação Orientada a Objeto</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

    <h3>  Curso de Programação Orientada a Objeto </h3>
    <div class="well"><?php echo $titulo ?> </div>
    <?php

    include $p.".php";

    ?>

    <div class="well well-sm col-md-12 text-center ">
       <img src="marca1.JPG">
   </div>

</div>
</body>
</html>




