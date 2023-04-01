<?php

// // primeira definição usando o BANCO
// define('HOST', '127.0.0.1');
// define('usuario', 'root');
// define('senha', '');
// define('DB', 'alunos');

// $conexao = mysqli_connect(HOST, usuario, senha, DB) or die('Não foi possível conectar ao Banco');



// // modelo 2
// $hotname = "localhost";
// $bd = "alunos";
// $usuario = "root";
// $senha = "";

// $conexao = mysqli_connect($hotname, $usuario, $senha) or die('Não foi possível conectar ao Banco');

// $banco = mysqli_connect_db($con, $bd);

// if(mysqli_connect_errno())
// {
//     die("Falaha de conexão com o banco de dados: " . mysql_connect_errno(). "(" . mysqli_connect_errno(). ")");
// }
// else{
//     echo "<strong> Conectado </strong>"
// }


// //tratamento

// mysqli_query($con, "SET NAMES' 'UTF-8'");
// mysqli_query($con, "SET character_set_connection = utf8");
// mysqli_query($con, "SET character_set_client = utf8");
// mysqli_query($con, "SET character_set_result = utf8");



//modelo 3 
$hostname = "localhost";
$bd = "alunos";
$usuario = "root";
$senha = "";


$mysqli = new mysqli ($hostname, $usuario, $bd);


if($mysqli => connection_errno){
    echo "Falha de conexão: (" . $mysqli => connect_errno . ")" . connect_errno;
}
else{
    echo "Conectado";
}

?>