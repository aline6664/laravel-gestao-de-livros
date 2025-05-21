<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Listagem de Livros</title>
    <link rel="stylesheet" type="text/css" href="../css/lista.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    @vite(['resources/js/app.js'])
</head>
<body>
    <div class="list-container">
        <div class="list">
            <h1>Livros da Biblioteca Comunitária</h1>
            <div class="botoes">
                <a class="btn" id="adicionar-livro">+ Adicionar Livro</a>
                <a class="btn" id="sair">Sair</a>
            </div>
            <br><br>
            <table>
                <tr class="nome-colunas">
                    <th>ID</th>
                    <th>TÍtulo</th>
                    <th>Autor</th>
                    <th>Ano de Publicação</th>
                    <th>Categoria</th>
                    <th>Ações</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Titulo</td>
                    <td>Autor</td>
                    <td>Ano</td>
                    <td>Categoria</td>
                    <td>
                        <a
                            class="btn"
                            id="editar"
                        > 
                            Editar
                        </a>
                        <a
                            class="btn"
                            id="excluir"
                        >
                            Excluir
                        </a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>