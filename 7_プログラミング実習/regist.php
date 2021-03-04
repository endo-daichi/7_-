<!DOCTYPE html>
<html lang="ja">

	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="style1.css">
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
		<main>        
	<body>
        <h4>アカウント登録画面</h4>
        <form method="post" action="regist_confirm.php">
            
            <?php
                session_start();

                if(!isset($SESSION_['family_name'])) {
                    $SESSION_['family_name'] = 0;
                } else {
                    $SESSION_['family_name']++;
                }
            ?>
            <dl>
            <div>
                
                <dt>名前（姓）</dt>
                <dd><input type="text" class="text" size="35" maxlength="10" pattern="[\u4E00-\u9FFF\u3040-\u309Fー]*" name="family_name"></dd>
                <br>
            </div>
            
            <div>
                <dt><label>名前（名）</label></dt>
                <dd><input type="text" class="text" size="35" maxlength="10" pattern="[\u4E00-\u9FFF\u3040-\u309Fー]*" name="last_name"></dd>
                <br>
            </div>
            
            <div>
                <dt><label>カナ（姓）</label></dt>
                <dd><input type="text" class="text" size="35" maxlength="10" pattern="[\u30A1-\u30F6]*" name="family_name_kana"></dd>
                <br>
            </div>
            
            <div>
                <dt><label>カナ（名）</label></dt>
                <dd><input type="text" class="text" size="35" maxlength="10" pattern="[\u30A1-\u30F6]*" name="last_name_kana"></dd>
                <br>
            </div>
            
            <div>
                <dt><label>メールアドレス</label></dt>
                <dd><input type="text" class="text" size="35" maxlength="100" name="mail"></dd>
                <br>
            </div>
            
            <div>
                <dt><label>パスワード</label></dt>
                <dd><input type="password" class="text" size="35" maxlength="10" name="password"></dd>
                <br>
            </div>
            
            <div>
                <dt><label>性別</label></dt>
                <dd><input type="radio" name="gender" checked value="男">男
                <input type="radio"  name="gender" value="女">女</dd>
                <br>
            </div>
            
            <div>
                <dt><label>郵便番号</label></dt>
                <dd><input type="text" class="text" size="35" maxlength="7" name="postel_code"></dd>
                <br>
            </div>
            
            <div>
                <dt><label>住所（都道府県）</label></dt>
                <dd><select class="dropdown" name="prefecture">
                    <option value="name">　　　</option>
                    <option value="北海道">北海道</option>
                    <option value="青森県">青森県</option>
                    <option value="岩手県">岩手県</option>
                    <option value="宮城県">宮城県</option>
                    <option value="秋田県">秋田県</option>
                    <option value="山形県">山形県</option>
                    <option value="福島県">福島県</option>
                    <option value="茨城県">茨城県</option>
                    <option value="栃木県">栃木県</option>
                    <option value="群馬県">群馬県</option>
                    <option value="埼玉県">埼玉県</option>
                    <option value="千葉県">千葉県</option>
                    <option value="東京都">東京都</option>
                    <option value="神奈川県">神奈川県</option>
                    <option value="新潟県">新潟県</option>
                    <option value="富山県">富山県</option>
                    <option value="石川県">石川県</option>
                    <option value="福井県">福井県</option>
                    <option value="山梨県">山梨県</option>
                    <option value="長野県">長野県</option>
                    <option value="岐阜県">岐阜県</option>
                    <option value="静岡県">静岡県</option>
                    <option value="愛知県">愛知県</option>
                    <option value="三重県">三重県</option>
                    <option value="滋賀県">滋賀県</option>
                    <option value="京都府">京都府</option>
                    <option value="大阪府">大阪府</option>
                    <option value="兵庫県">兵庫県</option>
                    <option value="奈良県">奈良県</option>
                    <option value="和歌山県">和歌山県</option>
                    <option value="鳥取県">鳥取県</option>
                    <option value="島根県">島根県</option>
                    <option value="岡山県">岡山県</option>
                    <option value="広島県">広島県</option>
                    <option value="山口県">山口県</option>
                    <option value="徳島県">徳島県</option>
                    <option value="香川県">香川県</option>
                    <option value="愛媛県">愛媛県</option>
                    <option value="高知県">高知県</option>
                    <option value="福岡県">福岡県</option>
                    <option value="佐賀県">佐賀県</option>
                    <option value="長崎県">長崎県</option>
                    <option value="熊本県">熊本県</option>
                    <option value="大分県">大分県</option>
                    <option value="宮崎県">宮崎県</option>
                    <option value="鹿児島県">鹿児島県</option>
                    <option value="沖縄県">沖縄県</option>
                    </select></dd>
                <br>
            </div>
            
            <div>
                <dt>住所（市区町村）</dt>
                <dd><input type="text" class="text" size="35" maxlength="10" name="address_1"></dd>
                <br>
            </div>
            
            <div>
                <dt><label>住所（番地）</label></dt>
                <dd><input type="text" class="text" size="35" maxlength="100" name="address_2"></dd>
            <br>
            </div>
            
            <div>
                <dt><label>アカウント権限</label></dt>
                    <dd><select class="dropdown" name="authority">
                        <option value="一般">一般</option>
                        <option value="管理者">管理者</option>
                        </select></dd>
                <br>
            </div>
            </dl>
            <div>
                <input type="submit" class="submit" value="確認する">
            </div>
        </form>
        
		
	</body>
		</main>
		<footer>
		Copyright D.I.works| D.I.blog is the one which provides A to Z about programming
		</footer>
	</body>
</html>
