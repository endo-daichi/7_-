<?php
mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");

$pdo ->exec("insert into contactform(name,mail,age,comments)
values('".$_POST['name']."','".$_POST['mail']."','".$_POST['age']."','".$_POST['comments']."');");

?>

<!doctype HTML>

<html lang="ja">

    <head>
        <meta charset="UTF-8">
        
        <title>アカウント登録画面</title>
        <link rel="stylesheet" type="text/css" href="style2.css">
    </head>
    
    <body>
        <h1>お問い合わせフォーム</h1>
        
        <div class="confirm">
            <h5>アカウント登録完了画面</h5>
            <p>登録完了しました</p>
            <form action="index.htm">
                <input type="submit" class="button1" value="TOPページへ戻る">
            </form>
        </div>
    </body>
</html>