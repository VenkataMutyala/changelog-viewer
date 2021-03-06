<?php
    require __DIR__ . '/../vendor/autoload.php';
    use \Syonix\ChangelogViewer\Factory\ViewerFactory;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Changelog</title>
        <link href="../res/bootstrap/bootstrap.min.css" rel="stylesheet">
    </head>
    <body style="background: #ececec;">
        <!--<a href="#" onclick="openChangelogModal();" style="width: 200px; text-align: center; display: block; margin: 50px auto 0 auto; font-size: 2rem;">Show Changes</a>-->
        <?php ViewerFactory::createMarkdownHtmlViewer(__DIR__ . '/CHANGELOG.demo.md')->downloadLinks()->output(); ?>
    </body>
</html>
