<?php
    /**
     * AUTOR: ADRIANO DA SILVA JORGE
     * ATUALIZAÇÃO: 03/07/2020
     * ARQUIVO QUE FAZ O CADASTRO DO FORNECEDOR
     */

    include('conexao.php');
    session_start();

    // variaveis que capturam os valores inputados pelo usuario
    $razao = mysqli_real_escape_string($conexao, $_POST['razao']);
    $cnpj = mysqli_real_escape_string($conexao, $_POST['cnpj']);
    $inEst = mysqli_real_escape_string($conexao, $_POST['ie']);
    $segmento = mysqli_real_escape_string($conexao, $_POST['segmento']);
    $uniFed = mysqli_real_escape_string($conexao, $_POST['uf']);
    $municip = mysqli_real_escape_string($conexao, $_POST['mun']);
    $bairro = mysqli_real_escape_string($conexao, $_POST['bairro']);
    $endereco = mysqli_real_escape_string($conexao, $_POST['end']);
    $num = mysqli_real_escape_string($conexao, $_POST['num']);
    $telefone = mysqli_real_escape_string($conexao, $_POST['tel']);
    $wpp = mysqli_real_escape_string($conexao, $_POST['wpp']);
    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $site = mysqli_real_escape_string($conexao, $_POST['site']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);
    $confSenha = mysqli_real_escape_string($conexao, $_POST['confSenha']);
    
    // variaveis que buscam algum registro com o email inputado
    $consulta = "select * from tb_fornecedores where email = '$email'";
    $retornoConsulta = mysqli_query($conexao, $consulta);
    
    // condicional que gera o desvio caso algum campo esteja vazio
    if(
    $razao == "" ||
    $cnpj == "" ||
    $inEst == "" ||
    $segmento == "" ||
    $uniFed == "" ||
    $razao == "" ||
    $municip == "" ||
    $bairro == "" ||
    $endereco == "" ||
    $num == "" ||
    $telefone == "" ||
    $wpp == "" ||
    $email == "" ||
    $site == "" ||
    $senha == "" ||
    $confSenha == ""){
        echo "1";
        $_SESSION['camposVazios'] = 1;
        header('Location: ../cadastro_fornecedor.php');
    }

    // condicional que faz o desvio caso exista algum registro com o email
    else if(mysqli_fetch_assoc($retornoConsulta)){
        echo "2";
        $_SESSION['emailInvalido'] = 1;
        header('Location: ../cadastro_fornecedor.php');
        exit();

    // verificação se a senha coincid
    } else if($senha != $confSenha){
        echo "3";
        $_SESSION['senhaInvalida'] = 1;
        header('Location: ../cadastro_fornecedor.php');
        exit();

    } else{

        echo "4";
        $codFornecedor = date('dmYHis');
        $codEnderecoFornecedor = date('dmYiHs');

        // insert na tabela de fornecedores
        $insertTBFORNECEDOR = "insert into tb_fornecedores values (
            '$codFornecedor',
            '$razao',
            '$cnpj',
            '$inEst',
            '$segmento',
            '$email',
            '$telefone',
            md5('$senha'),
            '$wpp',
            '$site');";
        mysqli_query($conexao, $insertTBFORNECEDOR);

        // insert na tabela dos enderecos dos fornecedores
        $insertTBENDERECOFORNECEDOR = "insert into tb_endereco_fornecedor values (
            '$codEnderecoFornecedor',
            '$codFornecedor',
            '$uniFed',
            '$municip',
            '$bairro',
            '$endereco',
            '$num');";
        mysqli_query($conexao, $insertTBENDERECOFORNECEDOR);

        // inicio da navegacao ja logada
        session_start();
        $_SESSION['fornecedorLogado'] = 1;
        header('Location: ../index.php');
    }

?>