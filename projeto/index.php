<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Notícias</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
</head>

<body>
    <?php include_once "includes/menu.php"; ?>
    <section class="content_home">
        <div class="card" id="news-card">
            <h2><i class="fas fa-newspaper"></i> Notícias</h2>
            <p id="news-count">0</p>
        </div>
        <div class="card" id="banners-card">
            <h2><i class="fas fa-images"></i> Banners</h2>
            <p id="banners-count">0</p>
        </div>
    </section>
    <script src="assets/js/script.js"></script>
</body>

</html>