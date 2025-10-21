<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de Marmitas - Brisa & Aroma</title>

    <!-- Fonte Google -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        :root {
            --cor-fundo: #f8f5f0;
            --cor-marrom: #BD836C;
            --cor-texto: #333;
            --cor-destaque: #4a7a5c;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--cor-fundo);
            color: var(--cor-texto);
            margin: 0;
            padding: 40px 10%;
        }

        h1, h2 {
            text-align: center;
            color: var(--cor-marrom);
            margin-bottom: 10px;
        }

        p.descricao {
            text-align: center;
            margin-bottom: 40px;
            font-size: 1rem;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            margin-bottom: 60px;
        }

        th {
            background-color: var(--cor-marrom);
            color: white;
            padding: 14px;
            text-align: left;
            font-weight: 500;
        }

        td {
            padding: 14px;
            border-bottom: 1px solid #f0e8e4;
            vertical-align: top;
        }

        tr:hover {
            background-color: #f8f4f2;
        }

        .categoria {
            font-weight: 600;
            color: var(--cor-marrom);
        }

        .preco {
            font-weight: 600;
            color: var(--cor-destaque);
        }

        .custo {
            color: #777;
            font-size: 0.95em;
        }

        footer {
            text-align: center;
            font-size: 0.9em;
            color: #777;
            margin-top: 40px;
        }

        .btn-voltar {
            display: inline-block;
            background: var(--cor-marrom);
            color: #fff;
            padding: 10px 24px;
            text-decoration: none;
            border-radius: 6px;
            margin-top: 30px;
            transition: background 0.3s;
        }

        .btn-voltar:hover {
            background: #a56d57;
        }

        .subtitulo {
            text-align: center;
            color: var(--cor-marrom);
            margin-top: 60px;
            font-weight: 600;
        }

        /* Responsivo */
        @media (max-width: 768px) {
            body {
                padding: 20px;
            }

            table, th, td {
                font-size: 0.9em;
            }
        }
    </style>
</head>
<body>

<h1>🍱 Tabela de Marmitas — Curitiba 2025</h1>
<p class="descricao">
    Confira nossas opções de marmitas, com base nos custos médios de ingredientes e preparo em Curitiba.
    Escolha o estilo que combina com seu gosto e rotina!
</p>

<!-- ======= TABELA 1: TIPOS DE MARMITAS ======= -->
<table>
    <thead>
    <tr>
        <th>Categoria</th>
        <th>Composição</th>
        <th>Custo Médio (R$)</th>
        <th>Preço de Venda Sugerido (R$)</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td class="categoria">Tradicional</td>
        <td>Arroz branco, feijão, carne bovina ou frango, legumes refogados e salada.</td>
        <td class="custo">9,00</td>
        <td class="preco">16,90</td>
    </tr>
    <tr>
        <td class="categoria">Fitness</td>
        <td>Arroz integral, frango grelhado, legumes no vapor e salada fresca.</td>
        <td class="custo">10,50</td>
        <td class="preco">18,90</td>
    </tr>
    <tr>
        <td class="categoria">Vegetariana</td>
        <td>Arroz integral, grão-de-bico ou proteína de soja, legumes variados e salada.</td>
        <td class="custo">8,50</td>
        <td class="preco">15,90</td>
    </tr>
    <tr>
        <td class="categoria">Vegana Premium</td>
        <td>Quinoa, tofu grelhado, legumes e salada temperada com azeite extra virgem.</td>
        <td class="custo">11,50</td>
        <td class="preco">19,90</td>
    </tr>
    <tr>
        <td class="categoria">Low Carb</td>
        <td>Frango ou carne, legumes grelhados e salada (sem arroz nem feijão).</td>
        <td class="custo">9,50</td>
        <td class="preco">17,90</td>
    </tr>
    </tbody>
</table>

<!-- ======= TABELA 2: PLANOS E DESCONTOS ======= -->
<h2 class="subtitulo">📦 Planos e Descontos</h2>
<p class="descricao">Monte seu pacote conforme sua necessidade semanal ou mensal, com descontos progressivos.</p>

<table>
    <thead>
    <tr>
        <th>Plano</th>
        <th>Quantidade de Marmitas</th>
        <th>Desconto Aplicado</th>
        <th>Exemplo Tradicional (R$16,90 cada)</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td class="categoria">Plano Semanal</td>
        <td>5 marmitas</td>
        <td>Sem desconto</td>
        <td class="preco">R$ 84,50</td>
    </tr>
    <tr>
        <td class="categoria">Plano Quinzenal</td>
        <td>10 marmitas</td>
        <td>5% de desconto</td>
        <td class="preco">R$ 160,55</td>
    </tr>
    <tr>
        <td class="categoria">Plano Mensal</td>
        <td>15 marmitas</td>
        <td>10% de desconto</td>
        <td class="preco">R$ 228,15</td>
    </tr>
    </tbody>
</table>

<footer>
    <p>💡 Valores baseados em custos médios de alimentos e embalagens em Curitiba (referência 2025).
        Podem variar conforme o fornecedor e época do ano.</p>

    <a href="index.html" class="btn-voltar">← Voltar ao site</a>
</footer>

</body>
</html>
