<?php

/**
 * Created by PhpStorm.
 * User: sergio
 * Date: 13/06/2016
 * Time: 11:09
 */



$cliente1 = new ClientePF(1, 'Jose do Amaral', '123.456.789-10', 'joseamaral@gmail.com', 'Rua Joaquim, 21', 'Saco dos Limões', 'Florianópolis', 'SC',  '88020-240');
$cliente1->setTipo('P. Física');
$cliente1->setGrauImportancia(3);
$TabClientes[] = $cliente1;

$cliente2 = new ClientePJ(2, 'Construtora Npaoli me', '24.605.881/0001-32', 'Npaoli@gmail.com', 'Rua Pedro II, 231', 'Centro', 'Palhoça', 'SC',  '88040-333');
$cliente2->setTipo('P. Jurídica');
$cliente2->setGrauImportancia(1);
$cliente2->setEnderecoCobranca('Rua dos Palmeiras, 167', 'Itacorubi', 'Florianopolis', 'SC', '88030-000');
$TabClientes[] = $cliente2;

$cliente3 = new ClientePF(3, 'Jose do Amaral', '123.456.789-10', 'joseamaral@gmail.com', 'Rua Joaquim, 21', 'Saco dos Limões', 'Florianópolis', 'SC',  '88020-240');
$cliente3->setTipo('P. Física');
$cliente3->setGrauImportancia(3);
$TabClientes[] = $cliente3;

$cliente4 = new ClientePJ(4, 'Construtora Npaoli me', '24.605.881/0001-32', 'Npaoli@gmail.com', 'Rua Pedro II, 231', 'Centro', 'Palhoça', 'SC',  '88040-333');
$cliente4->setTipo('P. Jurídica');
$cliente4->setGrauImportancia(1);
$cliente4->setEnderecoCobranca('Rua dos Palmeiras, 167', 'Itacorubi', 'Florianopolis', 'SC', '88030-000');
$TabClientes[] = $cliente4;

$CadastroClientes = new CadastroClientes();
$CadastroClientes->addTabCliente($cliente1);
$CadastroClientes->addTabCliente($cliente2);
$CadastroClientes->addTabCliente($cliente3);
$CadastroClientes->addTabCliente($cliente4);




