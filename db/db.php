<?php

    require_once("script.php");

    $sql = "SELECT `imie`, `nazwisko` FROM `table` WHERE 1;";
    $result = $connect->query($sql);
    while($user = $result->fetch_assoc())
    {
        //print_r($user);
        echo $user['imie']." ".$user['nazwisko'];
        echo "<br/>";
    }

    $connect->close();

?>