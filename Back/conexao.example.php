<?php
$host    = "localhost";
$usuario = "SEU_USUARIO";
$senha   = "SUA_SENHA";
$banco   = "catalogo_futebol";

$conn = new mysqli($host, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die(json_encode(["erro" => "Falha na conexão: " . $conn->connect_error]));
}

$conn->set_charset("utf8");
?>
