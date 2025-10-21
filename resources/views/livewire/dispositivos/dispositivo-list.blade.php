<div>
    <div class="container">
        <div class="header">
            <h1>Dispositivos</h1>
            <button class="add-button" href="{{ route('sensor.create') }}">Cadastrar Novo Dispositivo</button>
        </div>

        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Código</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sensors as $s)
                    <tr>
                        <td>{{ $s->id }}</td>
                        <td>{{ $s->codigo }}</td>
                        <td class="status-cell">
                            <label class="switch">
                                <input type="checkbox"
                                    wire:click="toggleStatus('{{ $s->codigo }}')"
                                    @if($s->status) checked @endif>
                                <span class="slider round"></span>
                            </label>
                            @if($s->status)
                                <span class="status-text active">Ativo</span>
                            @else
                                <span class="status-text inactive">Inativo</span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <style>
        :root {
            --azul-vibrante: #00BFFF;
            --azul-oceano: #1E90FF;
            --ciano-brilhante: #00FFFF;
            --fundo-solido: #E0F7FA;
            --branco: #fff;
            --cinza-claro: #f4f7fa;
            --cinza-escuro: #777;
            --borda-cor: #e0e6ed;
        }

        body {
            /* Gradiente de fundo mais dinâmico */
            background: linear-gradient(135deg, var(--azul-oceano), var(--azul-vibrante), var(--ciano-brilhante));
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            color: #333;
            margin: 0;
            padding: 40px 20px;
            min-height: 100vh;
            box-sizing: border-box;
            background-size: 400% 400%;
            animation: backgroundGradient 15s ease infinite;
        }

        @keyframes backgroundGradient {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        .container {
            max-width: 900px;
            margin: auto;
            background-color: var(--branco);
            border-radius: 12px;
            /* Sombra mais profunda */
            box-shadow: 0 15px 45px rgba(0, 0, 0, 0.2);
            padding: 30px;
            transform: translateY(0);
            transition: transform 0.3s ease-in-out;
        }

        .container:hover {
            transform: translateY(-5px);
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            position: relative;
        }

        .header h1 {
            color: var(--azul-oceano);
            font-size: 2.5em;
            font-weight: 700;
            margin: 0;
            letter-spacing: -1px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
        }

        .add-button {
            /* Botão com gradiente vibrante e sombra */
            background: linear-gradient(45deg, var(--azul-oceano), var(--azul-vibrante));
            color: var(--branco);
            border: none;
            padding: 12px 28px;
            border-radius: 50px; /* Borda arredondada para um visual moderno */
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 6px 20px rgba(30, 144, 255, 0.4);
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .add-button:hover {
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 8px 25px rgba(30, 144, 255, 0.6);
        }
        
        .table-container {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: var(--branco);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }

        thead {
            background-color: var(--fundo-solido);
            color: var(--cinza-escuro);
            text-align: left;
            border-bottom: 2px solid var(--borda-cor);
        }

        th, td {
            padding: 18px 24px;
            border-bottom: 1px solid var(--borda-cor);
            font-size: 1em;
            transition: background-color 0.2s ease;
        }

        th {
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: var(--azul-oceano);
        }

        tbody tr:last-child td {
            border-bottom: none;
        }

        tbody tr:hover {
            background-color: var(--cinza-claro);
        }

        .status-cell {
            display: flex;
            align-items: center;
            gap: 15px;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        /* Estilização do switch mais moderno */
        .switch {
            position: relative;
            display: inline-block;
            width: 52px;
            height: 28px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: var(--borda-cor);
            transition: .4s;
            border-radius: 34px;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 22px;
            width: 22px;
            left: 3px;
            bottom: 3px;
            background-color: var(--branco);
            transition: .4s;
            border-radius: 50%;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        input:checked + .slider {
            background-color: var(--ciano-brilhante);
        }

        input:focus + .slider {
            box-shadow: 0 0 1px var(--ciano-brilhante);
        }

        input:checked + .slider:before {
            transform: translateX(24px);
        }

        /* Estilização do texto de status com mais contraste */
        .status-text {
            font-weight: 600;
            font-size: 0.9em;
            padding: 5px 12px;
            border-radius: 20px;
            text-transform: uppercase;
        }

        .status-text.active {
            color: var(--branco);
            background: linear-gradient(45deg, var(--azul-oceano), var(--ciano-brilhante));
            box-shadow: 0 2px 8px rgba(0, 255, 255, 0.3);
        }

        .status-text.inactive {
            color: var(--cinza-escuro);
            background-color: var(--borda-cor);
        }
    </style>
</div>
