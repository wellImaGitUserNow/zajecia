<?php
    $text = <<< TEXT
    ZSŁ - Zespół
    Szkół Łączności
TEXT;
    echo $text;

    $name = "jAnUSz";
    echo "<br/><br/>", "$name to lowercase: ", strtolower($name);
    echo "<br/><br/>", "$name to uppercase: ", strtoupper($name); 

    echo "<br/><br/><br/><br/>";

    $text2 = "jan paweł iI";
    echo ucwords($text2);

    echo "<br/><br/><br/>";

    $text3 = "zAbAWne FormATOwaNiE tEKstU.";
    echo ucfirst(strtolower($text3));

    echo "<br/><br/><br/>";

    $lorem = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum non pharetra justo. Sed felis justo, tincidunt dignissim nulla sit amet, facilisis lobortis turpis. Ut eu ante ultricies mi elementum mattis quis quis mi. Pellentesque est nulla, tristique id sollicitudin vel, fringilla a enim. Maecenas interdum vulputate augue, et molestie turpis condimentum nec. Proin at auctor leo. Donec et sagittis mauris, ac vestibulum dui. Maecenas pellentesque tempor lacus, sit amet rutrum augue faucibus ac. Praesent congue placerat diam id bibendum. Aenean hendrerit mi urna, eu faucibus orci mattis id. Phasellus tincidunt semper diam quis eleifend. Nulla magna neque, pellentesque at rhoncus ac, iaculis sit amet turpis. Morbi in dolor nec ante pulvinar commodo. Proin molestie libero et sollicitudin ultricies. Fusce fermentum maximus ante. Praesent in pharetra tortor, a tincidunt justo. Donec mattis dapibus orci, in tincidunt elit rhoncus ut. Quisque tincidunt pulvinar efficitur. Aliquam consectetur metus fringilla lorem tempus, ut posuere purus vehicula. Quisque leo erat, porta molestie metus eget, varius semper turpis. Vestibulum pulvinar lorem odio, non dignissim quam laoreet eu. Suspendisse vitae interdum erat.";
    echo wordwrap($lorem, 60, "<br/>");
?>