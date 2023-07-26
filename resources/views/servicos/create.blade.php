
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Serviço</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }
        
        .container {
            max-width: 500px;
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
        
        .form-group {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 5px;
        }
        
        input[type="text"],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        
        textarea {
            resize: vertical;
        }
        
        button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }
        
        button:hover {
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
        <h2>Adicionar Serviço</h2>
        <form action="{{ route('servicos.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="cliente_id">Cliente</label>
                <select name="cliente_id" id="cliente_id" class="form-control" required>
                    @foreach ($clientes as $cliente)
                        <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="carro_id">Carro</label>
                <select name="carro_id" id="carro_id" class="form-control" required>
                    @foreach ($clientes as $cliente)
                        <option value="{{ $cliente->id }}">{{ $cliente->carro }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="data">Data</label>
                <input type="date" name="data" id="data" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="preco">Preço</label>
                <input type="number" name="preco" id="preco" class="form-control" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="descricao">Descrição</label>
                <textarea name="descricao" id="descricao" class="form-control" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
            
              <a href="{{ route('servicos.index') }}" class="btn btn-voltar">Voltar</a>
        </form>
    </div>
</body>
</html>