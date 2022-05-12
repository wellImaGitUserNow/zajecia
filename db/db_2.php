<?php

    require_once("script.php");

    $sql = "SELECT * FROM `table` JOIN `city` ON `table`.`city_id` = `city`.`id` JOIN `kolor` ON `table`.`kolor` = `kolor`.`id`;";
    $result = $connect->query($sql);
    $counter = 1;
    while($user = $result->fetch_assoc())
    {
        //print_r($user);
        echo "dane użytkownika nr ".$counter.": ".$user['imie']." ".$user['nazwisko']."; ".$user['nazwa']."; ulubiony kolor: ".$user['kolor'];
        echo "<br/>";
        $counter++;
    }

    $connect->close();

?>