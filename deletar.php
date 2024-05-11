<?php
include 'conexao.php';

$id = $_GET['id'];

$sql = "DELETE FROM reservas WHERE id=$id";

if ($conn->query($sql) === TRUE) {

  header('Location: lista.php');
} else {
  echo "Erro ao deletar reserva: " . $conn->error;
}

$conn->close();
?>

