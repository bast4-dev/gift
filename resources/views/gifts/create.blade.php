<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un cadeau</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .card {
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            margin-bottom: 1.5rem;
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
        label {
            display: block;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: #333;
        }
        input[type="text"],
        input[type="number"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1rem;
            box-sizing: border-box;
        }
        textarea {
            min-height: 100px;
            resize: vertical;
        }
        .error {
            color: #f44336;
            font-size: 0.875rem;
            margin-top: 0.25rem;
        }
        .actions {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
        }
        .btn {
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: 500;
            text-decoration: none;
            border: none;
            cursor: pointer;
            font-size: 1rem;
        }
        .btn-primary {
            background-color: #4CAF50;
            color: white;
        }
        .btn-secondary {
            background-color: #6c757d;
            color: white;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Créer un cadeau</h1>
        
        <form action="{{ route('gifts.store') }}" method="POST">
            @csrf
            
            <div class="form-group">
                <label for="name">Nom *</label>
                <input name="name" id="name" value="{{ old('name') }}" required>
                @error('name')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="price">Prix *</label>
                <input name="price" id="price" value="{{ old('price') }}" required>
                @error('price')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="url">URL</label>
                <input name="url" id="url" value="{{ old('url') }}">
                @error('url')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="details">Détails</label>
                <textarea name="details" id="details">{{ old('details') }}</textarea>
                @error('details')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="actions">
                <a href="{{ route('gifts.index') }}" class="btn btn-secondary">Annuler</a>
                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </div>
        </form>
    </div>
</body>
</html>