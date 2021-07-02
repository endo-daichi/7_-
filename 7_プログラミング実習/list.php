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

    mb_internal_encoding("utf8");
    try{
            $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");
            $pdo ->exec("insert into regist(family_name,last_name,family_name_kana,last_name_kana,mail,password,gender,postal_code,prefecture,address_1,address_2,authority)
             values('".$_POST['family_name']."','".$_POST['last_name']."','".$_POST['family_name_kana']."','".$_POST['last_name_kana']."','".$_POST['mail']."','$password','$gender','".$_POST['postal_code']."','".$_POST['prefecture']."','".$_POST['address_1']."','".$_POST['address_2']."','$authority');");
    }catch(Exception $ex) {
        echo 'エラーが発生したため、アカウント登録ができません。';
        return false;
    }
?>

<!doctype HTML>

<html lang="ja">

    <head>
        <meta charset="UTF-8">
        
        <title>アカウント一覧</title>
        <link rel="stylesheet" type="text/css" href="style4.css">
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
            <h5>アカウント一覧画面</h5>
            <table>
                <tr>
                    <th>ID</th>
                    <th>名前(姓)</th>
                    <th>名前(名)</th>
                    <th>カナ(姓)</th>
                    <th>カナ(名)</th>
                    <th>メールアドレス</th>
                    <th>性別</th>
                    <th>アカウント情報</th>
                    <th>削除フラグ</th>
                    <th>登録日時</th>
                    <th>更新日時</th>
                    <th>操作</th>
                </tr>
                
            </table>
            
            <form action="index.htm">
                <input type="submit" class="button1" value="TOPページへ戻る">
            </form>
        </div>
        <footer>
		Copyright D.I.works| D.I.blog is the one which provides A to Z about programming
		</footer>
    </body>
</html>