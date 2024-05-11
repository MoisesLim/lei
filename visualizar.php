<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>visualizar reserva</title>
    <link rel="stylesheet" type="text/css" href="style_2.css">
   <!-- Inclui o arquivo CSS -->
<link rel="stylesheet" href="favicon.css">

<!-- Inclui uma tag link para especificar o favicon -->
<link rel="icon" type="image/png" href="favicon.png">

</head>
<body>
    
    <?php
include 'conexao.php';

$id = $_GET['id'];

$sql = "DELETE FROM reservas WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Reserva deletada com sucesso!');</script>";
} else {
  echo "Erro ao deletar reserva: " . $conn->error;
}

$conn->close();
?>

</body>
</html>