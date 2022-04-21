<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <form method = "post">
            <input type = "radio" name = "figure" value = "cube">Sześcian
            <br/>
            <input type = "radio" name = "figure" value = "rectangle">Prostokąt
            <br/>
            <input type = "submit" value = "Zatwierdź">
        </form>
        <br/>
        <?php
            if(isset($_POST['figure']))
            {
                echo '<form action = "calculate.php" method = "post">';
                switch($_POST['figure'])
                {
                    case 'cube':
                        echo '<input type = "range" min = "0" max = "100" id = "slider" name = "a"><span id = "out"></span>';
                        echo '<br/>';
                        echo '<input type = "hidden" name = "figure" value = "cube">';
                        break;

                    case 'rectangle':
                        echo '<input type = "number" name = "a" placeHolder = "podaj długość 1 boku..."><br/>';
                        echo '<input type = "number" name = "b" placeHolder = "podaj długość 2 boku..."><br/>';
                        echo '<input type = "hidden" name = "figure" value = "rectangle">';
                        break;
                }
                echo '<input type = "submit" value = "Zatwierdź"><br/>';
                echo '</form>';
            }
        ?>
        <script>
            function slider(){
                document.getElementById("out").innerHTML = document.getElementById("slider").value;
            }
            setTimeout("slider()", 1);
        </script>
    </center>
</body>
</html>