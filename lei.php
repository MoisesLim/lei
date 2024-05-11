<html>

<head>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #000;
      color: #fff;
    }

    .container {
      width: 80%;
      margin: 0 auto;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
    }

    h1 {
      font-size: 5rem;
      text-transform: uppercase;
      letter-spacing: 0.2rem;
      animation: neon 2s infinite;
    }

    @keyframes neon {

      0%,
      100% {
        text-shadow: 0 0 20px #0f0, 0 0 40px #0f0, 0 0 60px #0f0, 0 0 80px #0f0, 0 0 100px #0f0;
      }

      50% {
        text-shadow: 0 0 20px #fff, 0 0 40px #fff, 0 0 60px #fff, 0 0 80px #fff, 0 0 100px #fff;
      }
    }

    button {
      padding: 15px 30px;
      border: none;
      border-radius: 10px;
      background-color: #fff;
      color: #000;
      font-size: 1.5rem;
      font-weight: bold;
      cursor: pointer;
      box-shadow: 0 0 10px #0f0, inset 0 0 10px #0f0;
      transition: all 0.3s;
    }

    button:hover {
      transform: scale(1.1);
      box-shadow: 0 0 20px #0f0, inset 0 0 20px #0f0;
    }

    button:active {
      transform: scale(0.9);
      box-shadow: 0 0 5px #0f0, inset 0 0 5px #0f0;
    }
  </style>
</head>

<body>
  <div class="container">
    <h1>LEI</h1>
    <button onclick="enviar(enter)">Entrar</button>
  </div>
</body>
</html>