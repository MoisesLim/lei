<?php
include 'conexao.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$reserva = $_POST['reserva'];
$tempo_devolucao = $_POST['tempo_devolucao'];

$sql = "INSERT INTO reservas (nome, email, reserva, data_devolucao) VALUES ('$nome', '$email', '$reserva', '$tempo_devolucao')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Reserva adicionada com sucesso!');</script>";
    sleep(1); // adiciona um atraso de 1 segundos
    header('Location: lista.php');
} else {
  echo "Erro ao adicionar reserva: " . $conn->error;
}

$conn->close();
?>
