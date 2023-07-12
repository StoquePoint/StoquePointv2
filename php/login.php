<?php
    //INICIA A SESSÃO
    session_start();

    //VALIDA AS ENTRADAS NO CÓDIGO, POR SEGURANÇA
    if (empty($_POST) or (empty($_POST["usuario"]) or (empty($_POST["senha"] ) ) ) ) {
       
        print "<script>location.href='../index.php';</script>";
    }

    // ARQUIVO PARA PEGAR A CONEXÃO
    include("conexao.php");

//  ##COMPARAÇÃO DE USUÁRIOS COM O BD PARA LOGAR NO SISTEMA
    //VARIÁVEIS PARA COMPARAR
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

//  #CONSULTA E COMPARAÇÃO NO BD
    $sql = "SELECT * FROM colaborador 
            WHERE usuario = '{$usuario}' 
            AND senha = '{$senha}'
            " ;
// ESSA VARIÁVEL EXECUTA A CONEXÃO QUE VAMOS CRIAR AINDA
// JUNTAMENTE COM A QUERY(código de consulta no BD) QUE VAMOS EXECUTAR
// FOI COLOCADO A MENSAGEM DE ERRO TAMBÉM, CASO DÊ ALGUM PROBLEMA NO LOGIN [die]
    $result = $conexao -> query($sql) or die($conexao->error);

    //ELE TRANSFORMA A REDE EM OBJETOS PARA CHAMAR INDIVIDUALMENTE CASO PRECISE CHAMAR INDIVIDUALMENTE
    $row = $result->fetch_object();

    //MOSTRA A QUANTIDADE DE RESULTADOS QUE FORAM ENCONTRADOS
    $qtd = $result->num_rows;

    // VALIDA O LOGIN NO SISTEMA
    if ($qtd > 0) { //CASO O LOGIN PASSE: ####
        
        $_SESSION["usuario"] = $usuario;
        $_SESSION["nome"] = $row->nome; //pega o nome do usuário que vem do bd
        print "<script>location.href='../html/menu.html'</script>"; //arquivo de recepção com o usuário logado
    }else{
        //CASO O LOGIN NÃO PASSE: ####
        print "<script>alert('Usuário ou senha Incorretos')</script>";
        print "<script>location.href='../index.php'</script>";
    }

?>