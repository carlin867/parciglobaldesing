<?php
$dbhost = 'localhost';
$dbusername = 'root';
$dbpassword = '';
$dbnome = 'carlos';

$conexao = new mysqli($dbhost,$dbusername,$dbpassword,$dbnome);

if($conexao -> connect_errno){
    echo 'ERRO';
}
else{
    echo 'Conexão efetuada com sucesso!';
}
?>