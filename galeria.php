<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria de Foto</title>

    <link rel="stylesheet" href="galeria.css">
    <script src="galeria.js"></script>
    
</head>
<body>
    <div class="galeria">
        <?php 
            //pega lista de imagens da pasta galeria
            $dir = __DIR__ . DIRECTORY_SEPARATOR . "galeria" . DIRECTORY_SEPARATOR;
            $imagens = glob("$dir*.{jpg,jpeg,gif,png,bmp,webp}", GLOB_BRACE);

            //para exibir as imagens
            foreach($imagens as $i) {
                printf("<img src='galeria/%s'/>", basename($i));
            }
        ?>
    </div>
</body>
</html>