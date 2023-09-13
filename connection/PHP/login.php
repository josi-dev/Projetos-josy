<?php

include('connect.php');

$loginRecebido = $_POST["password"];


$sql = "SELECT * FROM login WHERE password = '$loginRecebido';



$query = mysqli_query($coon,$sql);

$res = [
    'tipo' => 'indefinido'
    ];
    
    
    if ($query) {
    $res["tipo"]= "sucesso";
} else {
    $res["tipo"]= "invalido";
};


json_encode($res);