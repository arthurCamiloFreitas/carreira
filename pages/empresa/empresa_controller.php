<?
require_once "../dominio/empresa.php";
class EmpresaController {
    function incluir(Empresa $empresa){

    }
    function listar(){
        $empresas = [];
        $empresa = new Empresa;
        $empresa->setId(1);
        $empresa->setNome("ETEC PEDRO BADRAN");
        $empresa->setTelefone("16318-2122");
        $empresa->setGeolocalizacao("-20.5886455, -47.8621156");
        $empresa->setCidadeIbge(3549409);
        array_push($empresas,$empresa);
        $empresa = new Empresa();
        $empresa->setId(3);
        $empresa->setNome("USINA ALTA MOGIANA");
        $empresa->setTelefone("163810-1000");
        $empresa->setGeolocalizacao("-20.483859,-47.8761024");
        $empresa->setCidadeIbge(3549409);
        array_push($empresas,$empresa);
        return $empresas;
    }
    function mostrar($id){

    }
    function atualizar(Empresa $empresa){

    }

    function deletar($id){

    }
}