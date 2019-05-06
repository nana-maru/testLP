<?php
    mb_internal_encoding("utf8");
    $pdo=new PDO("mysql:dbname=DB NAME;host=HOST NAME;","USER NAME","PASSWORD");
    
    $pdo->exec("insert into TABLE NAME(name,email,opinion) values('".$_POST['name']."','".$_POST['email']."','".$_POST['opinion']."');");

?>

<!DOCTYPE html>
<html>
    <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="stylesheet.css">
    </head>
    <meta http-equiv="refresh" content="3;URL='index.html'"/>
    
    <body>
        <h2>お問い合わせ完了</h2>
        お問い合わせありがとうございました。
    </body>
</html>