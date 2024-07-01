<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Publicidades</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php include_once "../includes/menu.php"; ?>-
    <section class="content">
        <?php include_once "../sys/cad-publicidades.php"; ?>
        <form method="post" enctype="multipart/form-data">
            <h2>Cadastro de Publicidades</h2>
            <div class="form-group">
                <label for="imageUrl">URL da Imagem</label>
                <input type="text" id="imageUrl" name="imageUrl" required>
            </div>
            <div class="form-group">
                <label for="link">Link</label>
                <input type="text" id="link" name="link" required>
            </div>
            <div class="form-group">
                <button type="submit" class="bt-cad">Cadastrar Publicidade</button>
            </div>
        </form>
    </section>
    <script src="../assets/js/script.js"></script>
</body>

</html>