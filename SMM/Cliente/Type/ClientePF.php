<?php

namespace SMM\Cliente\Type;

use SMM\Cliente\Cliente;
use SMM\Cliente\ClienteInterface;

/**
 * Created by PhpStorm.
 * User: sergio
 * Date: 10/06/2016
 * Time: 17:49
 *
 */

//require_once "Cliente.php";
//require_once "ClienteInterface.php";


class ClientePF extends Cliente implements ClienteInterface
{

    public function setGrauImportancia($grauImportancia){
        $this->grauImportancia = $grauImportancia;
    }
    public function getGrauImportancia(){
        return $this->grauImportancia;
    }

  
}

