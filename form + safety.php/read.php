<?php
$array = array($_POST["company"], $_POST["name"], $_POST["surname"], $_POST["address"], $_POST["title"], $_POST["number"], $_POST["date"], $_POST["func"]);
foreach($array as $key => $value)
{
    if(empty($value))
    {
        echo "<script>history.back();</script>";
        exit();
    }
}
//tutaj jakiś if żeby checkbox nie robił errorów ;P
echo "Given data:<br/>Company: ".$_POST["company"]."<br/>First Name: ".$_POST["name"]."<br/>Surname: ".$_POST["surname"]."</br>E-mail address: ".$_POST["address"]."<br/>Title: ".$_POST["title"]."<br/>Phone number: ".$_POST["number"]."</br>Cancel Registration: ".$_POST["box"]."<br/>Date: ".$_POST["date"]."<br/>Job function: ".$_POST["func"]."<br/>Dietary Requirements: ".$_POST["req"]."</br>Expactations: ".$_POST["area"];
?>