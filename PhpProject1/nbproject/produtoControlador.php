<?php

function visualizar() {
    
    $produto = array();
    $produto["nome"] = "Jaqueta veludo";
    $produto["desc"] = "Material: Feitas em Poliéster e algodão. Manga: 46cm - peito 110cm - comprimento 63cm.";
    $produto["preço"] = "R$ 130,00";

    exibir("paginas/visualizar", $produto) ;
}

function adicionar(){
    if (ehPost()){
        $nomeproduto = $_POST["nomeproduto"];
        $preco = $_POST["precoproduto"];
        
        echo $nomeproduto . "\n";
        echo $preco;

 
    }else{
        exibir("paginas/formulario");
    }
          
}

require_once "modelo/produtoModelo.php";

function listarprodutos(){
    $dados = array();
    $dados["produtos"] = listarp();
    exibir("produto/listarproduto", $dados);
    
}