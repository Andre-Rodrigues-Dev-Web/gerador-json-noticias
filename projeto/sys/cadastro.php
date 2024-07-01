<?php
function criarSlug($string) {
    $unwanted_array = array(
        'á' => 'a', 'à' => 'a', 'ã' => 'a', 'â' => 'a', 'ä' => 'a',
        'é' => 'e', 'è' => 'e', 'ê' => 'e', 'ë' => 'e',
        'í' => 'i', 'ì' => 'i', 'î' => 'i', 'ï' => 'i',
        'ó' => 'o', 'ò' => 'o', 'õ' => 'o', 'ô' => 'o', 'ö' => 'o',
        'ú' => 'u', 'ù' => 'u', 'û' => 'u', 'ü' => 'u',
        'ç' => 'c', 'ñ' => 'n',
        'Á' => 'A', 'À' => 'A', 'Ã' => 'A', 'Â' => 'A', 'Ä' => 'A',
        'É' => 'E', 'È' => 'E', 'Ê' => 'E', 'Ë' => 'E',
        'Í' => 'I', 'Ì' => 'I', 'Î' => 'I', 'Ï' => 'I',
        'Ó' => 'O', 'Ò' => 'O', 'Õ' => 'O', 'Ô' => 'O', 'Ö' => 'O',
        'Ú' => 'U', 'Ù' => 'U', 'Û' => 'U', 'Ü' => 'U',
        'Ç' => 'C', 'Ñ' => 'N'
    );
    
    $string = strtr($string, $unwanted_array);
    $string = strtolower(trim($string));
    $string = preg_replace('/[^a-z0-9-]/', '-', $string);
    $string = preg_replace('/-+/', '-', $string);
    return rtrim($string, '-');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $conteudo = $_POST['conteudo'];
    $categoria = $_POST['categoria'];
    $imagem = $_POST['imagem'];

    $slug = criarSlug($titulo);

    $arquivo = '../apis/noticias.json';

    if (file_exists($arquivo)) {
        $conteudoJson = file_get_contents($arquivo);
        $noticias = json_decode($conteudoJson, true);
        $ultimoId = end($noticias)['id'];
    } else {
        $noticias = [];
        $ultimoId = 0;
    }

    $novoId = $ultimoId + 1;

    $noticia = [
        'id' => $novoId,
        'titulo' => $titulo,
        'descricao' => $descricao,
        'conteudo' => $conteudo,
        'categoria' => $categoria,
        'slug' => $slug,
        'imagem' => $imagem
    ];

    $noticias[] = $noticia;

    file_put_contents($arquivo, json_encode($noticias, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

    echo "Notícia cadastrada com sucesso!";
}
?>
