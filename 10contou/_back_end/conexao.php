<?php
    /**
     * AUTOR: ADRIANO DA SILVA JORGE
     * ATUALIZAÇÃO: 03/07/2020
     * ARQUIVO QUE FAZ A CONEXÃO COM O BANCO DE DADOS
     */

     // constantes que guardam os parametros da conexao
     define('ENDERECO_SERVIDOR', '127.0.0.1');
     define('USUARIO_SERVIDOR', 'bd_user');
     define('SENHA_USUARIO', 'password');
     define('NOME_BANCO', 'BD_DESCONTOU');

     // variavel que faz a conexao
     $conexao = mysqli_connect(ENDERECO_SERVIDOR, USUARIO_SERVIDOR, SENHA_USUARIO, NOME_BANCO);
?>