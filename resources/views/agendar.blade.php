<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendar — CarSystem</title>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        :root {
            --bg: #0e0f12;
            --surface: #16181d;
            --surface-2: #1e2028;
            --border: rgba(255,255,255,0.07);
            --accent: #e8c547;
            --accent-dim: rgba(232,197,71,0.10);
            --text: #f0f0f0;
            --text-muted: #7a7d88;
            --teal: #34c7a0;
            --teal-dim: rgba(52,199,160,0.10);
        }

        body {
            font-family: 'DM Sans', sans-serif;
            background: var(--bg);
            color: var(--text);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 24px;
        }

        .card {
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: 20px;
            padding: 48px 44px;
            width: 100%;
            max-width: 480px;
            animation: fadeUp 0.45s ease both;
        }

        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(16px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .back {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            color: var(--text-muted);
            text-decoration: none;
            font-size: 13px;
            margin-bottom: 28px;
            transition: color 0.2s;
        }

        .back:hover { color: var(--text); }
        .back svg { width: 14px; height: 14px; fill: currentColor; }

        .icon-wrap {
            width: 48px;
            height: 48px;
            background: var(--teal-dim);
            border: 1px solid rgba(52,199,160,0.2);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .icon-wrap svg { width: 24px; height: 24px; fill: var(--teal); }

        h2 {
            font-family: 'Syne', sans-serif;
            font-size: 24px;
            font-weight: 700;
            letter-spacing: -0.4px;
            margin-bottom: 4px;
        }

        .car-tag {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: var(--accent-dim);
            border: 1px solid rgba(232,197,71,0.18);
            border-radius: 8px;
            padding: 6px 12px;
            font-size: 13px;
            color: var(--accent);
            margin-bottom: 28px;
        }

        .car-tag svg { width: 14px; height: 14px; fill: var(--accent); }

        .field { margin-bottom: 16px; }

        label {
            display: block;
            font-size: 11.5px;
            font-weight: 500;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 0.8px;
            margin-bottom: 8px;
        }

        input[type="text"],
        input[type="date"] {
            width: 100%;
            background: var(--surface-2);
            border: 1px solid var(--border);
            border-radius: 10px;
            color: var(--text);
            font-family: 'DM Sans', sans-serif;
            font-size: 15px;
            padding: 12px 14px;
            outline: none;
            transition: border-color 0.2s, box-shadow 0.2s;
            color-scheme: dark;
        }

        input:focus {
            border-color: var(--teal);
            box-shadow: 0 0 0 3px rgba(52,199,160,0.10);
        }

        input::placeholder { color: var(--text-muted); }

        .grid-2 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 14px;
        }

        button[type="submit"] {
            width: 100%;
            margin-top: 28px;
            padding: 13px;
            background: var(--teal);
            color: #0e0f12;
            border: none;
            border-radius: 10px;
            font-family: 'Syne', sans-serif;
            font-size: 14.5px;
            font-weight: 700;
            cursor: pointer;
            transition: opacity 0.2s, transform 0.1s;
        }

        button[type="submit"]:hover { opacity: 0.88; }
        button[type="submit"]:active { transform: scale(0.99); }
    </style>
</head>
<body>

<div class="card">
    <a href="/carros" class="back">
        <svg viewBox="0 0 24 24"><path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"/></svg>
        Voltar para Frota
    </a>

    <div class="icon-wrap">
        <svg viewBox="0 0 24 24"><path d="M17 12h-5v5h5v-5zM16 1v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2h-1V1h-2zm3 18H5V8h14v11z"/></svg>
    </div>

    <h2>Agendar Locação</h2>

    <div class="car-tag">
        <svg viewBox="0 0 24 24"><path d="M18.92 6.01C18.72 5.42 18.16 5 17.5 5h-11c-.66 0-1.21.42-1.42 1.01L3 12v8c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1h12v1c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-8l-2.08-5.99zM6.5 16c-.83 0-1.5-.67-1.5-1.5S5.67 13 6.5 13s1.5.67 1.5 1.5S7.33 16 6.5 16zm11 0c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM5 11l1.5-4.5h11L19 11H5z"/></svg>
        {{ $carro->modelo }} · {{ $carro->placa }}
    </div>

    <form method="POST" action="/agendar/store/{{ $carro->id }}">
        @csrf
        <div class="field">
            <label for="nome_cliente">Cliente</label>
            <input type="text" id="nome_cliente" name="nome_cliente" placeholder="Nome completo do cliente">
        </div>

        <div class="grid-2">
            <div class="field">
                <label for="data_retirada">Retirada</label>
                <input type="date" id="data_retirada" name="data_retirada">
            </div>
            <div class="field">
                <label for="data_devolucao">Devolução</label>
                <input type="date" id="data_devolucao" name="data_prevista_devolucao">
            </div>
        </div>

        <button type="submit">Confirmar Agendamento</button>
    </form>
</div>

</body>
</html>