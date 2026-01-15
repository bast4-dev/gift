<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des cadeaux</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        .add-btn {
            display: inline-block;
            margin-bottom: 20px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        li {
            padding: 15px;
            margin-bottom: 10px;
            background: white;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .actions {
            margin-top: 10px;
        }
        .actions a, .actions button {
            margin-right: 10px;
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 3px;
            font-size: 14px;
        }
        .btn-view {
            background-color: #2196F3;
            color: white;
            border: none;
        }
        .btn-edit {
            background-color: #FF9800;
            color: white;
            border: none;
        }
        .btn-delete {
            background-color: #f44336;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Liste des cadeaux</h1>
    
    <a href="{{ route('gifts.create') }}" class="add-btn">Créer un cadeau</a>

    @if($gifts->isEmpty())
        <p>Aucun cadeau pour le moment.</p>
    @else
        <ul>
            @foreach($gifts as $gift)
                <li>
                    <strong>{{ $gift->name }}</strong> — {{ number_format($gift->price, 2, ',', ' ') }} €
                    
                    <div class="actions">
                        <a href="{{ route('gifts.show', $gift) }}" class="btn-view">Voir</a>
                        <a href="{{ route('gifts.edit', $gift) }}" class="btn-edit">Modifier</a>
                        
                        <form action="{{ route('gifts.destroy', $gift) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-delete" onclick="return confirm('Supprimer ce cadeau ?')">
                                Supprimer
                            </button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    @endif
</body>
</html>