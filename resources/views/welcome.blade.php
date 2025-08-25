<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f6f0fa; /* lilás bem claro */
            color: #4b3869; /* violeta escuro */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h1 {
            color: #6a0dad; /* violeta vibrante */
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        a {
            text-decoration: none;
            background-color: #a678d8; 
            color: white;
            padding: 10px 20px;
            border-radius: 3px;
            font-weight: bold;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        a:hover {
            background-color: #935dc0; 
            transform: scale(1.05);
        }
    </style>
</head>

<body>
    <h1>Olá mago 🧙🏼‍♂️🧙🏼</h1>

    <a href="{{ route('users.create') }}">Cadastrar</a>
</body>
</html>
