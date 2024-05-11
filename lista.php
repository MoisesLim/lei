<!DOCTYPE html>
<html>

<head>
  <title>Lista de reservas</title>
  <!-- Inclui o arquivo CSS -->
  <link rel="stylesheet" href="favicon.css">

  <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">

  <!-- Inclui uma tag link para especificar o favicon -->
  <link rel="icon" type="image/png" href="icon.png">

  <script>
    function confirmarExclusao(id) {
      if (confirm("Tem certeza que deseja excluir este registro?")) {
        window.location.href = "deletar.php?id=" + id;
        alert("Deletado com Sucesso!!");
      }
    }
  </script>
  <style>
    .ico {
      width: 50px;
      height: 50px;
    }

    body {
      background: url(favicon.png) no-repeat;
      background-size: cover;
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      align-items: center;
      justify-content: center;
      display: block;
      margin: 0;
      padding: 0;
    }

    h1 {
      color: #fff;
      text-align: center;
    }


    table {
      width: 70%;
      margin: 10px auto;
      margin-top: -2rem;
      background-color: #fff;
      padding: 10px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    #a {
      text-decoration: none;
      color: #d00b0b;
    }

    #a:hover {
      color: #227bbf;
    }

    .fa-user-plus {
      font-size: 2.5rem;
      color: #fff;
      margin: 2rem;
    }

    h1 {
      font-size: 50px;
      
    }

    h3 {
      margin: 0 29% 40% 40%;
      margin-top: -2rem;
      color: #fff;
      font-size: 3rem;
      backdrop-filter: blur(20px) ;
    }

    @media (min-width: 767px) {

      /* Estilos para dispositivos móveis */
      table {
        width: 90%;
        margin: 10% auto;
        background-color: #fff;
        padding: 19px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      }

    }
  </style>
</head>

<body>
  <h1>Lista de Reservas</h1>
  <hr>
  <a href="index.php"><i class="fas fa-user-plus"></i></a>
  <?php
  include 'conexao.php';

  $sql = "SELECT * FROM reservas";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    echo "<table><tr><th><h2>Nome </h2></th><th><h2> Periodo de devolução </h2></th><th><h2> O que reservou </h2></th><th><h2> Deletar </h2></th></tr>";
    while ($row = $result->fetch_assoc()) {
      echo "<tr><th>" . $row["nome"] . "</th><th>" . $row["data_devolucao"] . "</th><th>" . $row["reserva"] . "</th><th><a href='#' id='a' onclick='confirmarExclusao(" . $row["id"] . ")'><i class='fas fa-trash-alt'></i>
      </a></th></tr>";
    }
    echo "</table>";
  } else {
    echo "<h3>Não há reservas.</h3>";
  }
  $conn->close();
  ?>
</body>

</html>