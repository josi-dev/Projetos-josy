<?php


header("Content-type: text/html; charset=utf-8");

$host = "sql305.infinity.free.com";
$usuario = "if0_34995105";
$pass = "dgCU3z2dX8Q4t";
$database = "if0_34995105_tela_login";


$conn = mysqli_connect($host,$usuario,$pass,$database);


if ($conn) {
    echo("conectado com sucesso com o banco de dados <br>");
} else {
    echo("falha ao conectar com banco de dados <br>");
};


$nome = $_POST['nome'];
$senha = $_POST['senha'];

echo("meu nome e ".$nome."<br> minha senha e".$senha);




$sql = "INSERT INTO login (nome,senha) VALUES ('$nome','$senha')";


$resultado = mysqli_query($conn,$sql);

/*
if ($resultado) {
    echo("enviado");
} else {
    echo("mensagem interceptada");
};
*/