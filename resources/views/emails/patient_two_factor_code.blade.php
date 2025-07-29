<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Código de Verificação</title>
    <style>
        body { font-family: 'Inter', Arial, sans-serif; background: #f8fafc; margin: 0; padding: 0; }
        .container { max-width: 400px; margin: 0 auto; background: #fff; border-radius: 16px; box-shadow: 0 2px 8px #0001; padding: 32px 24px; }
        h1 { color: #1e293b; font-size: 1.5rem; margin-bottom: 16px; }
        p { color: #334155; font-size: 1rem; margin-bottom: 8px; }
        .code { font-size: 2rem; font-weight: bold; color: #059669; background: #e0e7ef; border-radius: 8px; padding: 12px; text-align: center; letter-spacing: 0.2em; margin-bottom: 16px; }
        .footer { color: #64748b; font-size: 0.9rem; text-align: center; margin-top: 24px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Seu código de verificação</h1>
        <p>Olá, {{ $patient->name }}!</p>
        <div class="code">{{ $code }}</div>
        <p>Digite este código para confirmar seu acesso ao sistema.</p>
        <div class="footer">Podóloga Fabiana Gonçalves &copy; {{ date('Y') }}</div>
    </div>
</body>
</html>
