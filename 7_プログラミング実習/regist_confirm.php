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
        
        <title>アカウント登録確認画面</title>
        <link rel="stylesheet" type="text/css" href="style1.css">
    </head>
    
    <body>
        <h1>お問い合わせフォーム</h1>
        
        <div class="confirm">
            <h5>アカウント登録確認画面</h5>
            
            <form action="insert.php" method="post">
                <input type="hidden" value="<?php echo $_POST['family_name']; ?>" name="family_name">
                <input type="hidden" value="<?php echo $_POST['last_name']; ?>" name="last_name">
                <input type="hidden" value="<?php echo $_POST['family_name_kana']; ?>" name="family_name_kana">
                <input type="hidden" value="<?php echo $_POST['last_name_kana']; ?>" name="last_name_kana">
                <input type="hidden" value="<?php echo $_POST['mail']; ?>" name="mail">
                <input type="hidden" value="<?php echo $_POST['password']; ?>" name="password">
                <input type="hidden" value="<?php echo $_POST['gender']; ?>" name="gender">
                <input type="hidden" value="<?php echo $_POST['postal_code']; ?>" name="postal_code">
                <input type="hidden" value="<?php echo $_POST['prefecture']; ?>" name="prefecture">
                <input type="hidden" value="<?php echo $_POST['address_1']; ?>" name="address_1">
                <input type="hidden" value="<?php echo $_POST['address_2']; ?>" name="address_2">
                <input type="hidden" value="<?php echo $_POST['authority']; ?>" name="authority">
            <form action="regist.php">
                <input type="submit" class="button1" value="前に戻る">
            </form>
            <form action="regist_complete/php">
                <input type="submit" class="button2" value="登録する">
            </form>
        </div>
    </body>
</html>