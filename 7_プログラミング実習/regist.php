    
<!DOCTYPE html>
<html lang="ja">

	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="style1.css">
        <script type="text/javascript">
                function check(){
                    if(regi.family_name.value == ""){
                        alert("名前（姓）が未入力です。");
                        return false;
                    }
                    if(regi.last_name.value == ""){
                        alert("名前（名）が未入力です。");
                        return false;
                    }
                    if(regi.family_name_kana.value == ""){
                        alert("カナ（姓）が未入力です。");
                        return false;
                    }
                    if(regi.family_name_kana.value == ""){
                        alert("カナ（名）が未入力です。");
                        return false;
                    }
                    if(regi.mail.value == ""){
                        alert("メールアドレスが未入力です。");
                        return false;
                    }
                    if(regi.password.value == ""){
                        alert("パスワードが未入力です。");
                        return false;
                    }
                    if(regi.gender.value == ""){
                        alert("性別が未入力です。");
                        return false;
                    }
                    if(regi.postel_code.value == ""){
                        alert("郵便番号が未入力です。");
                        return false;
                    }
                    if(regi.prefecture.value == ""){
                        alert("住所（都道府県）が未入力です。");
                        return false;
                    }
                    if(regi.address_1.value == ""){
                        alert("住所（市区町村）が未入力です。");
                        return false;
                    }
                    if(regi.address_2.value == ""){
                        alert("住所（番地）が未入力です。");
                        return false;
                    }
                    if(regi.authority.value == ""){
                        alert("権限が未入力です。");
                        return false;
                    }
                    else{
                        return true;
                    }
                }
            </script>
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
        
        <form method="post" action="regist_confirm.php" name="regi">
            <dl>
            <div>
                
                <dt>名前（姓）</dt>
                <dd><input type="text" class="text" size="35" maxlength="10" pattern="[\u4E00-\u9FFF\u3040-\u309Fー]*" name="family_name" value="<?php if( !empty($_POST['family_name']) ){ echo $_POST['family_name']; } ?>"></dd>
                <br>
            </div>
            
            <div>
                <dt><label>名前（名）</label></dt>
                <dd><input type="text" class="text" size="35" maxlength="10" pattern="[\u4E00-\u9FFF\u3040-\u309Fー]*" name="last_name" value="<?php if( !empty($_POST['last_name']) ){ echo $_POST['last_name']; } ?>"></dd>
                <br>
            </div>
            
            <div>
                <dt><label>カナ（姓）</label></dt>
                <dd><input type="text" class="text" size="35" maxlength="10" pattern="[\u30A1-\u30F6]*" name="family_name_kana" value="<?php if( !empty($_POST['family_name_kana']) ){ echo $_POST['family_name_kana']; } ?>"></dd>
                <br>
            </div>
            
            <div>
                <dt><label>カナ（名）</label></dt>
                <dd><input type="text" class="text" size="35" maxlength="10" pattern="[\u30A1-\u30F6]*" name="last_name_kana" value="<?php if( !empty($_POST['last_name_kana']) ){ echo $_POST['last_name_kana']; } ?>"></dd>
                <br>
            </div>
            
            <div>
                <dt><label>メールアドレス</label></dt>
                <dd><input type="text" class="text" size="35" maxlength="100" name="mail" value="<?php if( !empty($_POST['mail']) ){ echo $_POST['mail']; } ?>"></dd>
                <br>
            </div>
            
            <div>
                <dt><label>パスワード</label></dt>
                <dd><input type="password" class="text" size="35" maxlength="10" name="password" value="<?php if( !empty($_POST['password']) ){ echo $_POST['password']; } ?>"></dd>
                <br>
            </div>
            
            <div>
                <dt><label>性別</label></dt>
                <dd><input type="radio" name="gender" value="<?php if( !empty($_POST['gender']) && $_POST['gender'] === "男" ){ echo 'checked'; } ?>" checked>男
                <input type="radio" name="gender" value="女" value="<?php if( !empty($_POST['gender']) && $_POST['gender'] === "女" ){ echo 'checked'; } ?>">女</dd>
                <br>
            </div>
            
            <div>
                <dt><label>郵便番号</label></dt>
                <dd><input type="text" class="text" size="7" maxlength="7" pattern="^[0-9]+$" name="postal_code" value="<?php if( !empty($_POST['postal_code']) ){ echo $_POST['postal_code']; } ?>"></dd>
                <br>
            </div>
            
            <div>
                <dt><label>住所（都道府県）</label></dt>
                <dd><select class="dropdown" name="prefecture">
                    <option value="name" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "name" ){ echo 'selected'; } ?>>　　　</option>
                    <option value="北海道" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "北海道" ){ echo 'selected'; } ?>>北海道</option>
                    <option value="青森県" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "青森県" ){ echo 'selected'; } ?>>青森県</option>
                    <option value="岩手県" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "岩手県" ){ echo 'selected'; } ?>>岩手県</option>
                    <option value="宮城県" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "宮城県" ){ echo 'selected'; } ?>>宮城県</option>
                    <option value="秋田県" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "秋田県" ){ echo 'selected'; } ?>>秋田県</option>
                    <option value="山形県" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "山形県" ){ echo 'selected'; } ?>>山形県</option>
                    <option value="福島県" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "福島県" ){ echo 'selected'; } ?>>福島県</option>
                    <option value="茨城県" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "茨城県" ){ echo 'selected'; } ?>>茨城県</option>
                    <option value="栃木県" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "栃木県" ){ echo 'selected'; } ?>>栃木県</option>
                    <option value="群馬県" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "群馬県" ){ echo 'selected'; } ?>>群馬県</option>
                    <option value="埼玉県" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "埼玉県" ){ echo 'selected'; } ?>>埼玉県</option>
                    <option value="千葉県" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "千葉県" ){ echo 'selected'; } ?>>千葉県</option>
                    <option value="東京都" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "東京都" ){ echo 'selected'; } ?>>東京都</option>
                    <option value="神奈川県" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "神奈川県" ){ echo 'selected'; } ?>>神奈川県</option>
                    <option value="新潟県" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "新潟県" ){ echo 'selected'; } ?>>新潟県</option>
                    <option value="富山県" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "富山県" ){ echo 'selected'; } ?>>富山県</option>
                    <option value="石川県" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "石川県" ){ echo 'selected'; } ?>>石川県</option>
                    <option value="福井県" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "福井県" ){ echo 'selected'; } ?>>福井県</option>
                    <option value="山梨県" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "山梨県" ){ echo 'selected'; } ?>>山梨県</option>
                    <option value="長野県" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "長野県" ){ echo 'selected'; } ?>>長野県</option>
                    <option value="岐阜県" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "岐阜県" ){ echo 'selected'; } ?>>岐阜県</option>
                    <option value="静岡県" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "静岡県" ){ echo 'selected'; } ?>>静岡県</option>
                    <option value="愛知県" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "愛知県" ){ echo 'selected'; } ?>>愛知県</option>
                    <option value="三重県" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "三重県" ){ echo 'selected'; } ?>>三重県</option>
                    <option value="滋賀県" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "滋賀県" ){ echo 'selected'; } ?>>滋賀県</option>
                    <option value="京都府" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "京都府" ){ echo 'selected'; } ?>>京都府</option>
                    <option value="大阪府" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "大阪府" ){ echo 'selected'; } ?>>大阪府</option>
                    <option value="兵庫県" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "兵庫県" ){ echo 'selected'; } ?>>兵庫県</option>
                    <option value="奈良県" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "奈良県" ){ echo 'selected'; } ?>>奈良県</option>
                    <option value="和歌山県" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "和歌山県" ){ echo 'selected'; } ?>>和歌山県</option>
                    <option value="鳥取県" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "鳥取県" ){ echo 'selected'; } ?>>鳥取県</option>
                    <option value="島根県" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "島根県" ){ echo 'selected'; } ?>>島根県</option>
                    <option value="岡山県" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "岡山県" ){ echo 'selected'; } ?>>岡山県</option>
                    <option value="広島県" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "広島県" ){ echo 'selected'; } ?>>広島県</option>
                    <option value="山口県" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "山口県" ){ echo 'selected'; } ?>>山口県</option>
                    <option value="徳島県" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "徳島県" ){ echo 'selected'; } ?>>徳島県</option>
                    <option value="香川県" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "香川県" ){ echo 'selected'; } ?>>香川県</option>
                    <option value="愛媛県" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "愛媛県" ){ echo 'selected'; } ?>>愛媛県</option>
                    <option value="高知県" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "高知県" ){ echo 'selected'; } ?>>高知県</option>
                    <option value="福岡県" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "福岡県" ){ echo 'selected'; } ?>>福岡県</option>
                    <option value="佐賀県" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "佐賀県" ){ echo 'selected'; } ?>>佐賀県</option>
                    <option value="長崎県" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "長崎県" ){ echo 'selected'; } ?>>長崎県</option>
                    <option value="熊本県" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "熊本県" ){ echo 'selected'; } ?>>熊本県</option>
                    <option value="大分県" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "大分県" ){ echo 'selected'; } ?>>大分県</option>
                    <option value="宮崎県" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "宮崎県" ){ echo 'selected'; } ?>>宮崎県</option>
                    <option value="鹿児島県" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "鹿児島県" ){ echo 'selected'; } ?>>鹿児島県</option>
                    <option value="沖縄県" <?php if( !empty($_POST['prefecture']) && $_POST['prefecture'] === "沖縄県" ){ echo 'selected'; } ?>>沖縄県</option>
                    </select></dd>
                <br>
            </div>
            
            <div>
                <dt>住所（市区町村）</dt>
                <dd><input type="text" class="text" size="35" maxlength="10" pattern="[\u4E00-\u9FFF\u3040-\u309Fー\u30A1-\u30F6\uFF10-\uFF19\0-9\-\s]*" name="address_1" value="<?php if( !empty($_POST['address_1']) ){ echo $_POST['address_1']; } ?>"></dd>
                <br>
            </div>
            
            <div>
                <dt><label>住所（番地）</label></dt>
                <dd><input type="text" class="text" size="35" maxlength="100" pattern="[\u4E00-\u9FFF\u3040-\u309Fー\u30A1-\u30F6\uFF10-\uFF19\0-9\-\s]*" name="address_2" value="<?php if( !empty($_POST['address_2']) ){ echo $_POST['address_2']; } ?>"></dd>
            <br>
            </div>
            
            <div>
                <dt><label>アカウント権限</label></dt>
                    <dd><select class="dropdown" name="authority">
                        <option value="一般" <?php if( !empty($_POST['authority']) && $_POST['authority'] === "一般" ){ echo 'selected'; } ?>>一般</option>
                        <option value="管理者" <?php if( !empty($_POST['authority']) && $_POST['authority'] === "管理者" ){ echo 'selected'; } ?>>管理者</option>
                        </select></dd>
                <br>
            </div>
            </dl>
            <div>
                <input type="submit" class="submit" value="確認する" onclick="return check();">
            </div>
        
        </form>
		
	</body>
		</main>
		<footer>
		Copyright D.I.works| D.I.blog is the one which provides A to Z about programming
		</footer>
	</body>
</html>
