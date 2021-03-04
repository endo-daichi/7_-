<!doctype HTML>

<html lang="ja">

    <head>
        <meta charset="UTF-8">
        
        <title>アカウント登録確認画面</title>
        <link rel="stylesheet" type="text/css" href="style2.css">
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
        
        <h1>お問い合わせフォーム</h1>
        
        <div class="confirm">
            <h5>アカウント登録確認画面</h5>
            
            <form action="regist.php" method="post">
                <dl>
                <db><p>名前(姓）
                    <?php echo $_POST['family_name']; ?>
                    </p></db>
                <br>
                    <db><p>名前(名)
                        <?php echo $_POST['last_name']; ?>
                        </p></db>
                        
                <br>
                <db><p>カナ(姓)
                    <?php echo $_POST['family_name_kana']; ?>
                    </p></db>
                <br>
                <db><p>カナ(名)
                    <?php echo $_POST['last_name_kana']; ?>
                    </p></db>
                    
                <br>
                <db><p>メールアドレス
                    <?php echo $_POST['mail']; ?>
                    </p></db>
                    
                <br>
                <db><p>パスワード
                    <?php 
                    $password1 = $_POST ['password'];
                    echo $password1;
                    ?></p></db>
                <br>
                <db><p>性別
                    <?php echo $_POST['gender']; ?>
                    </p></db>
                    
                <br>
                <db><p>郵便番号
                    <?php echo $_POST['postel_code']; ?>
                    </p></db>
                <br>
                <db><p>住所(都道府県)
                    <?php echo $_POST['prefecture']; ?>
                    </p></db>
                <br>
                <db><p>住所(市区町村)
                    <?php echo $_POST['address_1']; ?>
                    </p></db>
                <br>
                <db><p>住所(番地)
                    <?php echo $_POST['address_2']; ?>
                    </p></db>
                <br>
                <db><p>アカウント権限
                    <?php echo $_POST['authority']; ?>
                    </p></db>
                    <br>
                </dl>
                <input type="submit" class="button1" value="前に戻る" onclick="history.back()">
            </form>
            <form action="regist_complete.php">
                <input type="submit" class="button2" value="登録する">
            </form>
        </div>
        <footer>
		Copyright D.I.works| D.I.blog is the one which provides A to Z about programming
		</footer>
    </body>
</html>