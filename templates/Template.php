<?php
class Template {
    /**Carregar o cabeçalho das páginas */
    function header(){
        require __DIR__ . "/templates/header.php";
    }

    /**Carrega o rodapé de todas as páginas */
    function footer(){
        require __DIR__ . "/templates/footer.php";
    }
}