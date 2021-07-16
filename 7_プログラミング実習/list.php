

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
                        <?php
                    mb_internal_encoding("utf8");
                    $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");
                    $stmt = $pdo->query("select * from regist order by id desc");
            
                        echo '<table border=1>';
                        echo '<th>';
                        echo 'ID';
                        echo '<th>';
                        echo '名前（姓）';
                        echo '<th>';
                        echo '名前（名）';
                        echo '<th>';
                        echo 'カナ（姓）';
                        echo '<th>';
                        echo 'カナ（名）';
                        echo '<th>';
                        echo 'メールアドレス';
                        echo '<th>';
                        echo '性別';
                        echo '<th>';
                        echo 'アカウント権限';
                        echo '<th>';
                        echo '削除フラグ';
                        echo '<th>';
                        echo '登録日時';
                        echo '<th>';
                        echo '更新日時';
                        echo '<th>';
                        echo '操作';
                        echo '<br>';
                        
                        while($row = $stmt->fetch()){
                            echo '<tr>';
                            echo '<td>';
                            echo $row['ID'];
                            echo '<td>';
                            echo $row['family_name'];
                            echo '<td>';
                            echo $row['last_name'];
                            echo '<td>';
                            echo $row['family_name_kana'];
                            echo '<td>';
                            echo $row['last_name_kana'];
                            echo '<td>';
                            echo $row['mail'];
                            echo '<td>';
                            $gender1 = $row['gender'];
                            if($gender1 == 0){
                                echo '男';
                            }
                            if($gender1 == 1){
                                echo '女';
                            }
                            echo '<td>';
                            $authority1 = $row['authority'];
                            if($authority1 == 0){
                                echo '一般';
                            }
                            if($authority1 == 1){
                                echo '管理者';
                            }
                            echo '<td>';
                            echo $row['delete_flag'];
                            echo '<td>';
                            $registered_time1 = $row['registered_time'];
                            echo date('Y/m/d',strtotime($registered_time1));
                            echo '<td>';
                            $update_time1 = $row['update_time'];
                            echo date('Y/m/d',strtotime($update_time1));
                            echo '<td>';
                            echo '<input type="submit" name="submit1" value="更新">';
                            echo '<input type="submit" name="submit2" value="削除">';
                            echo '</tr>';
                            echo '<br>';
                        }
                ?>
        </div>
        <footer>
		Copyright D.I.works| D.I.blog is the one which provides A to Z about programming
		</footer>
    </body>
</html>