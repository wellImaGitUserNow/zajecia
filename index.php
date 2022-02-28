<html>
    <head>
        <title>dołączanie pliku</title>
    </head>
    <body>
        <h3>początek strony</h3>
            <?php
                @include_once './script.php';
                echo '<bt/><br/>';
                @require './text.php';
            ?>
        <h3>koniec strony</h3>
    </body>
</html>