<!DOCTYPE html>
<html>

<head>
    <title>LEI</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Inclui o arquivo CSS -->
    <link rel="stylesheet" href="favicon.css">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <!-- Inclui uma tag link para especificar o favicon -->
    <link rel="icon" type="image/png" href="icon.png">
    <style>
        body {
            background: url(favicon.png) no-repeat;
            background-size: cover;
        
        }
        h1 {
      font-size: 50px;
    }

        form {
            margin: auto;
            margin-top: -2.5rem;
        }
        .fa-list {
      font-size: 2.5rem;
      color: #fff;
      margin: 1rem;
    }
    </style>
</head>

<body>
    <h1 style="color: #f2f2f2f2;">Reserva de algo</h1>
    <hr>
    <a href="lista.php"><i class="fas fa-list"></i></i></a>

    <form action="adicionar.php" method="post">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>
        <label for="reserva">O que você deseja reservar:</label><br>
        <input type="text" id="reserva" name="reserva" required><br>
        <label for="tempo_devolucao">Data de devolução:</label><br>
        <input type="time" id="tempo_devolucao" name="tempo_devolucao" required><br>
        <input type="submit" value="Reservar" onclick="enviarMensagem(event)">

    </form>
    <script>
        function enviarMensagem(event) {
            var nome = document.getElementById("nome").value;
            var email = document.getElementById("email").value;
            var reserva = document.getElementById("reserva").value;
            var tempo_devolucao = document.getElementById("tempo_devolucao").value;



            if (nome && email && reserva && tempo_devolucao != "") {


                var numero = "+55 (85)84256662";
                var mensagem = "Olá, Moises . Um novo Registro de Reserva foi feito no meu Nome: " + nome + " e reservei a/o " + reserva + " até as : " + tempo_devolucao;

                window.open("https://api.whatsapp.com/send?phone=" + numero + "&text=" + encodeURIComponent(mensagem))
            }
        }
    </script>
</body>

</html>