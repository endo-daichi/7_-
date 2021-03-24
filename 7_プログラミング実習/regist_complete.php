<?php
                
    $password = hash('md5',$_POST['password']);
                    
    if ($_POST['gender']=="男"){
        $gender = 0;
    }
    else if ($_POST['gender']=="女"){
        $gender = 1;
    }
                    
    if ($_POST['authority']=="一般"){
        $authority = 0;
    }
    else if ($_POST['authority']=="管理者"){
        $authority = 1;
    }
?>

<?php
    mb_internal_encoding("utf8");
    try{
            $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");
            $pdo ->exec("insert into regist(family_name,last_name,family_name_kana,last_name_kana,mail,password,gender,postal_code,prefecture,address_1,address_2,authority)
             values('".$_POST['family_name']."','".$_POST['last_name']."','".$_POST['family_name_kana']."','".$_POST['last_name_kana']."','".$_POST['mail']."','$password','$gender','".$_POST['postal_code']."','".$_POST['prefecture']."','".$_POST['address_1']."','".$_POST['address_2']."','$authority');");
    }catch(Exception $ex) {
        echo 'エラーが発生したため、アカウント登録ができません。';
        return FALSE;
    }
?>

<!doctype HTML>

<html lang="ja">

    <head>
        <meta charset="UTF-8">
        
        <title>アカウント登録画面</title>
        <link rel="stylesheet" type="text/css" href="style3.css">
    </head>
    
    <body>
                        <div class="ata">
        <img src="diblog_logo.jpg"></div>
		<header>
			<ul class="abc">
				<li>トップ</li>
				<li>プロフィール</li>
				<li>D.I.Blogについて</li>
				<li>登録フォーム</li>
				<li>問い合わせ</li>
				<li>その他</li>
			</ul>
		</header>
        
        <div class="confirm">
            <h5>アカウント登録完了画面</h5>
            <h1>登録完了しました</h1>
            <form action="index.htm">
                <input type="submit" class="button1" value="TOPページへ戻る">
            </form>
        </div>
        <footer>
		Copyright D.I.works| D.I.blog is the one which provides A to Z about programming
		</footer>
    </body>
</html>