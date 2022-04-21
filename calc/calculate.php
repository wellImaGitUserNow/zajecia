<?php

    require_once 'cube.php';
    require_once 'rectangle.php';
    switch($_POST['figure'])
    {
        case 'cube':
            echo 'Sześcian o polu całkowitym: ';
            echo Cube($_POST['a']).'cm<sup>2</sup>';
            break;
           
        case 'rectangle':
            echo 'Prostokąt o polu: ';
            echo Rectangle($_POST['a'], $_POST['b']).'cm<sup>2</sup>';
            break;
    }

?>