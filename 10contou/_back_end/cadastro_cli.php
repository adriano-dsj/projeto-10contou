<?php
    /**
     * AUTOR: ADRIANO DA SILVA JORGE
     * ATUALIZAÇÃO: 03/07/2020
     * ARQUIVO QUE REALIZA O CADASTRO DOS CLIENTES
     */

    include('conexao.php');

    // variaveis que capturam os valores inputados pelo usuario
    $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
    $celular = mysqli_real_escape_string($conexao, $_POST['cel']);
    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $uniFed = mysqli_real_escape_string($conexao, $_POST['uf']);
    $municip = mysqli_real_escape_string($conexao, $_POST['mun']);
    $bairro = mysqli_real_escape_string($conexao, $_POST['bairro']);
    $endereco = mysqli_real_escape_string($conexao, $_POST['end']);
    $num = mysqli_real_escape_string($conexao, $_POST['num']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);
    $confSenha = mysqli_real_escape_string($conexao, $_POST['confSenha']);

    // verificacao se ja existe um registro com o email inputado
    $consulta = "select * from tb_clientes where emailCliente = '$email'";
    $resultadoConsulta = mysqli_query($conexao, $consulta);

    if (
    $nome == "" ||
    $celular == "" ||
    $email == "" ||
    $uniFed == "" ||
    $municip == "" ||
    $bairro == "" ||
    $endereco == "" ||
    $num == "" ||
    $senha == "" ||
    $confSenha == ""){
    
    session_start();
    $_SESSION['camposVazios'] = 1;
    header('Location: ../cadastro_cliente.php');
    exit();
    }
    else if(mysqli_fetch_assoc($resultadoConsulta)){
        session_start();
        $_SESSION['emailInvalido'] = 1;
        header('Location: ../cadastro_cliente.php');
        exit();
    }
    // verificacao se as senhas coicidem
    else if($senha != $confSenha){
        session_start();
        $_SESSION['senhaIncoincidente'] = 1;
        header('Location: ../cadastro_cliente.php');
        exit();
    }
    
    else{
        // o codigo do cliente recebe o valor atual da data com as horas
        // e minutos e segundos para não ocorrer duplicacao de tuplas
        $codCliente = date('dmYHis');
        $codEnderecoCliente = date('dmYiHs');

        // linhas de comando sql com os inserts dos valores dos clientes
        $insertTBCLIENTE = "insert into tb_clientes values
        ('$codCliente', '$nome', '$email', '$celular', md5('$senha'));";

        $insertTBENDERECOCLIENTE = "insert into tb_endereco_clientes values
        ('$codEnderecoCliente',
        '$codCliente',
        '$uniFed',
        '$municip',
        '$bairro',
        '$endereco',
        '$num');";
        
        // execucao dos inserts
        mysqli_query($conexao, $insertTBCLIENTE);
        mysqli_query($conexao, $insertTBENDERECOCLIENTE);

        // redirecionamento para a home com sessao logada
        session_start();
        $_SESSION['clienteLogado'] = 1;
        header('Location: ../index.php');
        exit();
    }

?>