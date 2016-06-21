<?php

use SMM\Modulos\CadastroClientes;
//require_once "CadastroClientes.php";

$CadastroClientes = new CadastroClientes();
$CadastroClientes->carregaDadosCliente();


$ordem = @$_GET['ordem'];
$numCliente = @$_GET['numCliente'];

if ($ordem == "A"){

    $inverteOrdem = "D";
    $ordemImagem = "\"glyphicon glyphicon-sort-by-attributes-alt\"";

}else {

    $inverteOrdem = "A";
    $ordemImagem = "\"glyphicon glyphicon-sort-by-attributes\"";

}

//print_r($CadastroClientes->getTabClientes());


//die("parei");
$CadastroClientes->ordenaTabClientes($ordem);


// Exibe os dados

// Verificando número clientes array

$arrlength = count($CadastroClientes->getTabClientes());

echo $arrlength;


//<span class="glyphicon glyphicon-sort-by-attributes"></span></a></th>

?>

    <table class="table table-hover">
        <thead>
        <tr>
            
            <th></th>
            <th>Código<a href="?p=&ordem=<?php echo $inverteOrdem  ?>">
                    <span class= <?php echo $ordemImagem ?>></span></a></th>
            <th>Nome</th>
            <th>CPF</th>
        </tr>
        </thead>
        <tbody>

        <?php

        for($x = 0; $x < $arrlength; $x++) {
           // echo  '<br>'.$CadastroClientes->getCliente($x);
           // echo  "<br>".$CadastroClientes->getTipo($x);
      //      echo  '<br>'.$CadastroClientes->getCliente([$x]['tipo']);
            ?>

            <tr>

                <td><a  href="?p=D&ordem=<?php echo $ordem  ?>&numCliente=<?php echo $CadastroClientes->getCodigo($x)?>">
                        <span class="glyphicon glyphicon-file"></span></a></td>


                <td><?php echo $CadastroClientes->getCodigo($x)?></td>
                <td><?php echo $CadastroClientes->getNome($x)?></td>
                <td><?php echo $CadastroClientes->getCpfCnpj($x)?></td>
                <td><?php echo $CadastroClientes->getTipo($x)?></td>
                <td>

                <?php
                    for ($i = 1; $i <= $CadastroClientes->getGrauImportancia($x); $i++) {
                        ?>
                        <span class="glyphicon glyphicon-star text-warning"></span>
                        <?php
                    }
                ?>
                </td>


            </tr>

            <?php

        }
        ?>
        </tbody>
    </table>





