<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vehicle Management</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        body {
            font-family: 'Figtree', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f9fafb;
        }

        .container {
            text-align: center;
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 4px 34px rgba(0, 0, 0, 0.06);
        }

        .container h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #FF2D20;
        }

        .container p {
            font-size: 1rem;
            margin-bottom: 40px;
            color: #6b7280;
        }

        .button-group {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .button {
            padding: 10px 20px;
            font-size: 1rem;
            color: white;
            background-color: #FF2D20;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #e02424;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Vehicle Management</h1>
        <p>Manage your vehicles efficiently and stay updated with vehicle records.</p>

        <div class="button-group">
            <a href="{{ route('login') }}" class="button">Login</a>
            <a href="{{ route('register') }}" class="button">Register</a>
        </div>
    </div>
</body>
</html>
