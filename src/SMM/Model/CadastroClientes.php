<?php

namespace SMM\Model;


use SMM\Cliente\Type\ClientePF;
use SMM\Cliente\Type\ClientePJ;


class CadastroClientes
{
    public $tabClientes;

    function __construct(){
       
        $this->tabClientes = array();
    }

    public function addTabCliente($objCliente){
        $this->tabClientes[] = $objCliente;

    }

    public function getTabClientes(){
        return $this->tabClientes;
    }


    function ordenaTabClientes($ordem)
    {

        //sort($tabClientes);
        if($ordem == "D") {
            rsort($this->tabClientes);
        }else {
            sort($this->tabClientes);
        }
    }

    function pesquisaCliente($codigo)
    {

     //       $cliente = new Cliente();
    //    print_r($this->getTabClientes());

        foreach( $this->getTabClientes() as $key => $cliente )
        {

            if  ( $cliente->getCodigo() == $codigo ) {

                return $cliente;
                echo "aaa" . $key;
                //echo($product->getNome());
            }
        }
    }

    function carregaDadosCliente()
    {

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

  //      $CadastroClientes1 = new CadastroClientes();
        $this->addTabCliente($cliente1);
        $this->addTabCliente($cliente2);
        $this->addTabCliente($cliente3);
        $this->addTabCliente($cliente4);

    }

    function getCliente($linha)
    {
        return '{"id" : '.$linha.' ,
                "tipo" : "'.$this->tabClientes[$linha]->getTipo().'",
                "codigo" : "'.$this->tabClientes[$linha]->getCodigo().'",
                "nome" : "'.$this->tabClientes[$linha]->getNome().'"
                "cpdCnpj" : "'.$this->tabClientes[$linha]->getCpfCnpj().'"
                "grauImportancia" : "'.$this->tabClientes[$linha]->grauImportancia().'"
                },';
    }

    function getTipo($linha)

    {
        return $this->tabClientes[$linha]->getTipo();
      
    }

    function getCodigo($linha)

    {
        return $this->tabClientes[$linha]->getCodigo();
    }

    function getNome($linha)
    {
        return $this->tabClientes[$linha]->getNome();
    }
    function getCpfCnpj($linha)
    {
        return $this->tabClientes[$linha]->getCpfCnpj();
    }

    function getGrauImportancia($linha)
    {
        return $this->tabClientes[$linha]->getGrauImportancia();
    }


}