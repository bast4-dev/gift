<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $gift->name }}</title>
    <style>
        body {
            font-family: 'Instrument Sans', Arial, sans-serif;
            background-color: #FDFDFC;
            color: #1b1b18;
            padding: 2rem;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
        }
        .card {
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        h1 {
            font-size: 2rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            color: #1b1b18;
        }
        .info-row {
            margin-bottom: 1.5rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid #e3e3e0;
        }
        .info-row:last-child {
            border-bottom: none;
        }
        .label {
            font-weight: 600;
            color: #706f6c;
            margin-bottom: 0.5rem;
        }
        .value {
            font-size: 1.125rem;
        }
        .actions {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
        }
        .btn {
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 4px;
            font-weight: 500;
            transition: all 0.2s;
            border: 1px solid;
        }
        .btn-primary {
            background-color: #2196F3;
            color: white;
            border-color: #2196F3;
        }
        .btn-primary:hover {
            background-color: #1976D2;
        }
        .btn-secondary {
            background-color: white;
            color: #1b1b18;
            border-color: #e3e3e0;
        }
        .btn-secondary:hover {
            border-color: #1b1b18;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <h1>{{ $gift->name }}</h1>
            
            <div class="info-row">
                <div class="label">Prix</div>
                <div class="value">{{ number_format($gift->price, 2, ',', ' ') }} €</div>
            </div>
            
            @if($gift->url)
                <div class="info-row">
                    <div class="label">URL</div>
                    <div class="value">
                        <a href="{{ $gift->url }}" target="_blank" style="color: #2196F3; text-decoration: underline;">
                            {{ $gift->url }}
                        </a>
                    </div>
                </div>
            @endif
            
            @if($gift->details)
                <div class="info-row">
                    <div class="label">Détails</div>
                    <div class="value">{{ $gift->details }}</div>
                </div>
            @endif
            
            <div class="actions">
                <a href="{{ route('gifts.index') }}" class="btn btn-secondary">
                    Retour à la liste
                </a>
                <a href="{{ route('gifts.edit', $gift->id) }}" class="btn btn-primary">
                    Modifier
                </a>
            </div>
        </div>
    </div>
</body>
</html>