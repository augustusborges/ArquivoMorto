<?php


    //$nome = $_POST["id"];
    $nome = $_GET["id"];
    $targetPath = $_SERVER['DOCUMENT_ROOT']."/daab/intranet/testes/arquivos/";

    unlink($targetPath.$nome);

?>