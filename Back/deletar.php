<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
header("Access-Control-Allow-Methods: POST");

include "conexao.php";

$id = $_POST["id"] ?? 0;

if (empty($id)) {
    echo json_encode(["erro" => "ID não informado."]);
    exit;
}

$stmt = $conn->prepare("DELETE FROM jogadores WHERE id = ?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    echo json_encode(["sucesso" => "Jogador deletado com sucesso!"]);
} else {
    echo json_encode(["erro" => "Erro ao deletar: " . $stmt->error]);
}

$stmt->close();
$conn->close();
?>