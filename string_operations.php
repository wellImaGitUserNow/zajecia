<?php
    $text = <<< SCHOOL
        ZSŁ - Zespół
        Szkół
        Łączności<br/>
SCHOOL;
echo $text;

echo nl2br($text);

$name = "jANuSz";

echo strtolower($name)."<br/>";
echo strtoupper($name)."<br/>";

$fullname = "jonasz koran mekka";
echo ucfirst($fullname)."<br/>";
echo ucwords($fullname)."<br/>";

$lorem = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur in turpis maximus, feugiat lectus id, molestie diam. Sed a luctus quam, vitae pharetra dui. Morbi aliquet leo vel fringilla viverra. Praesent eleifend felis odio, vel ullamcorper lacus varius ultrices. Etiam consequat tristique purus ut luctus. Donec urna purus, tincidunt in vulputate rhoncus, sodales non eros. Proin id nisi turpis. Maecenas gravida metus a elit tincidunt, et lacinia ipsum eleifend. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Morbi ac ex odio.";

echo $lorem."<br/><br/>";

echo wordwrap($lorem, 40, "<br/>");
ob_clean();

//usuwanie białych znaków

$name1 = "Łukasz";
$name2 = "   Łukasz     ";

echo "liczba znaków $name1: ".mb_strlen($name1)."<br/>";
echo "liczba znaków $name2: ".mb_strlen($name2)."<br/>";

echo strlen(ltrim($name2))."<br/>";
echo strlen(rtrim($name2))."<br/>";
echo strlen(trim($name2))."<br/>";

echo strstr("janusz@kowalski.pl", "@")."<br/>";

echo strpos("janusz@kowalski.pl", "a")."<br/>";
echo strpos("janusz@kowalski.pl", "w")."<br/>";
echo strpos("janusz@kowalski.pl", "@")."<br/>";

echo "<br/><br/><br/>";

$name = "janina";
echo substr($name, 2)."<br/>";
echo substr($name, 2, 2)."<br/>";
echo substr($name, -1)."<br/>";
echo substr($name, 2, -2)."<br/>";

ob_clean();

$domain = "janusz.kowalski@wp.pl";

$url =  "https://".substr(strstr($domain, "@"), 1)."/";
//header("Location: $url");
echo $url."<br/>";

echo str_replace("t", "*", "string")."<br/>";
?>