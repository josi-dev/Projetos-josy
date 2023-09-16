<?php


header("Content-type: text/html; charset=utf-8");

$host = "192.168.100.56";
$usuario = "root";
$pass = "root";
$database = "cadastro";


$conn = mysqli_connect($host,$usuario,$pass,$database);

/*
if ($conn) {
    echo("conectado com sucesso com o banco de dados <br>");
} else {
    echo("falha ao conectar com banco de dados <br>");
};
*/

$nome = $_POST['nome'];
$senha = $_POST['senha'];
/*
echo("meu nome e ".$nome."<br> minha senha e".$senha);
*/



$sql = "INSERT INTO login (nome,senha) VALUES ('$nome','$senha')";


$resultado = mysqli_query($conn,$sql);


if ($resultado) {
    echo("<h1 style='text-align:center;color:#3115ff;'>Sucesso</h1>");
} else {
    echo("<h1 style='text-align:center;color:red;'>Erro</h1>");
};
