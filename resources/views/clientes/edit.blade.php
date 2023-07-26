<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }

        h1 {
            text-align: center;
            margin: 20px 0;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .btn-primary {
            background-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        /* CSS divertido para os botões */
        .btn-gaiato {
            background-color: #ff0066;
        }

        .btn-gaiato:hover {
            background-color: #cc0052;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Editar Cliente</h1>
        <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nome">Nome do Cliente</label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{ $cliente->nome }}" required>
            </div>
            <div class="form-group">
                <label for="carro">Carro</label>
                <input type="text" class="form-control" id="carro" name="carro" value="{{ $cliente->carro }}" required>
            </div>
            <button type="submit" class="btn btn-gaiato">Atualizar</button>
        </form>
    </div>
</body>
</html>