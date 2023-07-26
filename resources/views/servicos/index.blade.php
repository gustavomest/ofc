<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de serviços</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
        }

        .btn-primary {
            background-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-danger {
            background-color: #dc3545;
        }

        .btn-danger:hover {
            background-color: #b02a37;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Lista de serviços</h1>
        <a href="{{ route('servicos.create') }}" class="btn btn-primary">Novo Serviço</a>
        <a href="{{ route('clientes.index') }}" class="btn btn-primary">servicos</a>
        <table>
            <thead>
                <tr>

                    <th>Nome</th>
                    <th>Carro</th>
                    <th>Data</th>
                    <th>Preço</th>
                    <th>Km</th>
                    <th>descrição</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($servicos as $servico)
                    <tr>
                        <td>{{ $servico->cliente->nome }}</td>
                        <td>{{ $servico->cliente->carro }}</td>
                        <td>{{ $servico->data }}</td>
                        <td>{{ $servico->preco}}</td>
                        <td>{{ $servico->km}}</td>
                        <td>{{ $servico->descricao }}</td>
                        <td>
                            <!-- Ícone de lápis para editar -->
                            <a href="{{ route('servicos.edit', $servico->id) }}" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>
                            <form action="{{ route('servicos.destroy', $servico->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <!-- Ícone de lixeira para excluir -->
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir este servico?')"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>