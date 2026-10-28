<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $tituloPagina ?></title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script type="text/javascript" src=<?=RUTA_JS."script.js"?>></script>
<!---    <link rel="icon" type="image/x-icon" href=<?=RUTA_IMG_PUB."IconoPaginaWeb.png"?>>--->
    <link rel="stylesheet" href=<?=RUTA_CSS."estilos.css"?>>
</head>
<body>
<div id="contenedor">
    <?php
    require(dirname(__DIR__).'/comun/cabecera.php');
    ?>
    <?php
    require(dirname(__DIR__).'/comun/SideBarIzq.php');
    ?>
    <main>
        <article>
            <?= $contenidoPrincipal ?>
        </article>
    </main>
    <?php
    require(dirname(__DIR__).'/comun/SideBarDer.php');
    ?>
    <?php
    require(dirname(__DIR__).'/comun/pie.php');
    ?>
</div>
</body>
</html>
