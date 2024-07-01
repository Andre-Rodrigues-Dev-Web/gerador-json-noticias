<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $imageUrl = $_POST['imageUrl'];
    $link = $_POST['link'];

    // Validar o campo link como URL
    if (!filter_var($link, FILTER_VALIDATE_URL)) {
        echo "O link fornecido não é uma URL válida.";
        exit;
    }

    $arquivo = '../apis/publicidades.json';

    if (file_exists($arquivo)) {
        $conteudoJson = file_get_contents($arquivo);
        $publicidades = json_decode($conteudoJson, true);
        $ultimoId = end($publicidades)['id'];
    } else {
        $publicidades = [];
        $ultimoId = 0;
    }

    $novoId = $ultimoId + 1;

    $publicidade = [
        'id' => $novoId,
        'imageUrl' => $imageUrl,
        'link' => $link
    ];

    $publicidades[] = $publicidade;

    file_put_contents($arquivo, json_encode($publicidades, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

    echo "Publicidade cadastrada com sucesso!";
}
?>
