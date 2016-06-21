<?php
/**
 * Created by PhpStorm.
 * User: sergio
 * Date: 13/06/2016
 * Time: 18:01
 */
//require_once "CadastroClientes.php";

use SMM\Modulos\CadastroClientes;

$numCliente = @$_GET['numCliente'];

$ordem = @$_GET['ordem'];

//print_r($CadastroClientes->getTabClientes());

$CadatroClientes = new CadastroClientes();

$cliente = $CadastroClientes->pesquisaCliente($numCliente);

//$x = $CadastroClientes->pegaIndice($numCliente);


// Exibe os dados

?>

<table class="table table-hover">
    <thead>
    <tbody>

    <div class="row">
        <div class="col-xs-6 col-sm-4 col-md-2"><strong>Codigo</strong></div>
        <div class="col-xs-6 col-sm-4 col-md-3 "><strong><?php echo $cliente->getCodigo() ?></strong>

        <?php
            for ($i = 1; $i <= $cliente->getGrauImportancia(); $i++) {
            ?>
            <span class="glyphicon glyphicon-star text-warning"></span>
        <?php
        }
        ?>
        </div>

    </div>
    <div class="row">
        <div class="col-xs-6 col-sm-4 col-md-2"><strong>Nome</strong></div>
        <div class="col-xs-6 col-sm-4 col-md-3 "><?php  echo $cliente->getNome()?></div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-sm-4 col-md-2"><strong>CPF</strong></div>
        <div class="col-xs-6 col-sm-4 col-md-3 "><?php echo $cliente->getCPFCNPJ()?></div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-sm-4 col-md-2"><strong>Endereco</strong></div>
        <div class="col-xs-6 col-sm-4 col-md-3 "><?php echo $cliente->getEndereco()?></div>
    </div>

    <div class="row">
        <div class="col-xs-6 col-sm-4 col-md-2"><strong>    </strong></div>
        <div class="col-xs-6 col-sm-4 col-md-3 "><?php echo $cliente->getBairro()?></div>

    </div>

    <div class="row">
        <div class="col-xs-6 col-sm-4 col-md-2"><strong>   </strong></div>
        <div class="col-xs-6 col-sm-4 col-md-3 "><?php echo $cliente->getCep().' - '.$cliente->getCidade().' - '.$cliente->getUF()?></div>
    </div>



    <?php
        //  verificando endereco correspondencia
            if ($cliente->getEnderecoCobranca()) {

        ?>
            <div class="row">
                <div class="col-xs-6 col-sm-4 col-md-2"><strong>Endereco Cobrança</strong></div>
                <div class="col-xs-6 col-sm-4 col-md-3 "><?php echo $cliente->getEnderecoCobranca()?></div>
            </div>

            <div class="row">
                <div class="col-xs-6 col-sm-4 col-md-2"><strong>    </strong></div>
                <div class="col-xs-6 col-sm-4 col-md-3 "><?php echo $cliente->getBairroCobranca()?></div>

            </div>

            <div class="row">
                <div class="col-xs-6 col-sm-4 col-md-2"><strong>    </strong></div>
                <div class="col-xs-6 col-sm-4 col-md-3 "><?php echo $cliente->getCepCobranca().' - '.$cliente->getCidadeCobranca().' - '.$cliente->getUFCobranca()?></div>
            </div>

    <?php
    }
    ?>

    <div class="row">
        <div class="col-xs-6 col-sm-4 col-md-2"><strong>Email</strong></div>
        <div class="col-xs-6 col-sm-4 col-md-3 "><a href="mailto:#"><?php echo $cliente->getEmail()?></a> </div>
    </div>


    <div class="row">
        <div class="col-xs-6 col-sm-4 col-md-2"> <a href="?p=A&ordem=<?php echo $ordem?>" class="btn btn-primary btn-xs" role="button">Listar Clientes</a></div>

    </div>

    </tbody>
</table>


