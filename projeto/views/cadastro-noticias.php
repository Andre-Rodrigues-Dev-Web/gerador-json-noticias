<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Notícias</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <!--summernote-->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
</head>

<body>
    <?php include_once "../includes/menu.php"; ?>-
    <section class="content">
        <?php include_once "../sys/cadastro.php"; ?>
        <form method="post" enctype="multipart/form-data">
            <h2>Cadastro de Notícias</h2>
            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" id="titulo" name="titulo" required>
            </div>
            <div class="form-group">
                <label for="descricao">Descrição</label>
                <textarea id="descricao" name="descricao" required></textarea>
            </div>
            <div class="form-group">
                <label for="conteudo">Conteúdo</label>
                <textarea id="conteudo" name="conteudo" required></textarea>
            </div>
            <div class="form-group">
                <label for="categoria">Categoria</label>
                <input type="text" id="categoria" name="categoria" required>
            </div>
            <div class="form-group">
                <label for="imagem">URL da Imagem</label>
                <input type="text" id="imagem" name="imagem" required>
            </div>
            <div class="form-group">
                <button class="bt-cad" type="submit">Cadastrar Notícia</button>
            </div>
        </form>
    </section>
    <script>
        $(document).ready(function() {
            $('#descricao').summernote();
        });
        $(document).ready(function() {
            $('#conteudo').summernote();
        });
    </script>
    <script src="../assets/js/script.js"></script>
</body>

</html>