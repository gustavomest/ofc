<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Serviços</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>body {
        font-family: Arial, sans-serif;
        line-height: 1.6;
        color: #333;
        margin: 0;
        padding: 0;
        background-color: #f7f7f7;
    }
    
    .container {
        max-width: 900px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
    }
    
    h2 {
        text-align: center;
        margin: 20px 0;
    }
    
    .table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }
    
    .table th,
    .table td {
        padding: 10px;
        border: 1px solid #ddd;
    }
    
    .table th {
        font-weight: bold;
        background-color: #f2f2f2;
    }
    
    .table td {
        text-align: center;
    }
    
    .btn {
        display: inline-block;
        padding: 10px 20px;
        background-color: #edf6f8;
        color: #fff;
        text-decoration: none;
        border-radius: 4px;
        transition: background-color 0.3s ease;
    }
    
    .btn:hover {
        background-color: #0056b3;
    }</style>
</head>
<body>
    <div class="container">
        <!-- Seu conteúdo existente -->
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome do Cliente</th>
                    <th>Carro</th>
                    <th>Data</th>
                    <th>Preço</th>
                    <th>Descrição</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($servicos as $servico)
                    <tr>
                        <td>{{ $servico->id }}</td>
                        <td>{{ $servico->cliente->nome }}</td>
                        <td>{{ $servico->cliente->carro }}</td>
                        <td>{{ $servico->data }}</td>
                        <td>{{ $servico->preco }}</td>
                        <td>{{ $servico->descricao }}</td>
                        <td>
                            <a href="{{ route('servicos.edit', $servico->id) }}" class="btn btn-primary"><i class="fas fa-pencil-alt"></i> </a>
                            <form action="{{ route('servicos.destroy', $servico->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir este serviço?')"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('servicos.create') }}" class="btn btn-success">Adicionar Serviço</a>
        <a href="{{ route('clientes.index') }}" class="btn btn-success"> Clientes</a>
    </div>
</body>
</html>