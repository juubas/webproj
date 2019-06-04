<?php

require_once "modelo/produtoModelo.php";

function listarprodutos(){
    $dados = array();
    $dados["produtos"] = listarp();
    exibir("produto/listar", $dados);
    
}

