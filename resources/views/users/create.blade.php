<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Aula Laravel</title>

  <!-- Fonte Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />

  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: 'Roboto', sans-serif;
      background: linear-gradient(135deg, #e9d8fd, #d6bcfa); /* lilás claro para violeta claro */
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      padding: 20px;
    }

    form {
      background: #ffffff;
      padding: 40px 35px;
      border-radius: 5px;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 380px;
    }

    h1 {
      text-align: center;
      background: linear-gradient(90deg, #9f7aea, #805ad5); /* degradê violeta */
      background-clip: text;
      -webkit-text-fill-color: transparent;
      font-weight: 700;
      font-size: 2.2rem;
      margin-bottom: 30px;
    }

    label {
      display: block;
      margin-bottom: 6px;
      font-weight: 600;
      color: #5a4a75; /* violeta escuro */
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 14px 16px;
      margin-bottom: 22px;
      border: 2px solid #e0cfff; /* borda lilás clara */
      border-radius: 5px;
      font-size: 1rem;
      transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    input[type="text"]:focus,
    input[type="email"]:focus,
    input[type="password"]:focus {
      border-color: #b794f4; /* lilás */
      box-shadow: 0 0 8px rgba(183, 148, 244, 0.5);
      outline: none;
    }

    button {
      width: 100%;
      background: #9f7aea; /* botão violeta */
      color: white;
      padding: 14px 0;
      border: none;
      border-radius: 4px;
      font-size: 1.2rem;
      font-weight: 700;
      cursor: pointer;
      transition: background-color 0.3s ease;
      box-shadow: 0 4px 12px rgba(159, 122, 234, 0.5);
    }

    button:hover {
      background: #805ad5; /* botão mais escuro no hover */
      box-shadow: 0 6px 16px rgba(128, 90, 213, 0.6);
    }

    @media (max-width: 420px) {
      form {
        padding: 30px 20px;
        width: 100%;
      }

      h1 {
        font-size: 1.8rem;
      }
    }
  </style>
</head>
<body>
  <form action="{{ route('users.store') }}" method="POST">
    @csrf

    <h1>Cadastrar Usuários</h1>

    <label for="name">Nome:</label>
    <input type="text" name="name" id="name" placeholder="Digite o seu nome" value="{{ old('name') }}" required />

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" placeholder="Digite o seu email" value="{{ old('email') }}" required />

    <label for="password">Senha:</label>
    <input type="password" name="password" id="password" placeholder="Digite a sua senha" value="{{ old('password') }}" required />

    <button type="submit">Cadastrar</button>
  </form>
</body>
</html>
