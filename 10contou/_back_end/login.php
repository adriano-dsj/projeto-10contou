<?php
    
    include('conexao.php');

    // variaveis que capturam os valores inputados pelo usuario
    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);

    // consulta nas tabelas dos clientes e fornecedores
    $consultaCliente = mysqli_query($conexao, "select * from tb_clientes where emailCliente = '$email' and senha = md5('$senha')");
    $consultaFornecedor = mysqli_query($conexao, "select * from tb_fornecedores where email = '$email' and senha = md5('$senha')");

    // verificacao se a consulta retornou alguma coisa
    $retornoCliente = mysqli_fetch_assoc($consultaCliente);
    $retornoFornecedor = mysqli_fetch_assoc($consultaFornecedor);

    if($retornoCliente){
        echo("Cliente logado!!");
    } else if($retornoFornecedor){
        echo("Fornecedor logado!!");
    } else{
        echo("Nada logado!!");
    }

?>