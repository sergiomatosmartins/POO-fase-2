<?php

namespace SMM\Cliente\Type;

use SMM\Cliente\ClienteAbstract;

/**
 * Created by PhpStorm.
 * User: sergio
 * Date: 10/06/2016
 * Time: 17:50
 */



class ClientePJ extends ClienteAbstract
{
    public function __construct($codigo, $nome, $cpfCnpj, $email, $endereco, $bairro, $cidade, $uf, $cep)
    {
        parent::__construct($codigo, $nome, $cpfCnpj, $email, $endereco, $bairro, $cidade, $uf, $cep);

        $this->tipo = 2;
    }
   
    public function setGrauImportancia($grauImportancia){
        $this->grauImportancia = $grauImportancia;
    }

    public function getGrauImportancia(){
        return $this->grauImportancia;
    }

   
}
