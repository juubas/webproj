<?php

function listarp() {
    $sql = "select * from produto";
    $resultado = mysqli_query($conexao = conn(), $sql);
    
    echo mysqli_error($conexao);
    
    $produtos = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $produtos[] = $linha;
    }
    return $produtos;
}


