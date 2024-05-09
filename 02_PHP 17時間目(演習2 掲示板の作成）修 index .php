<!DOCTYPE html>
<html lang="jp">
    <head>
       
        <meta charset="UTF-8">
        <title>diworksblog 掲示板</title>
        <link rel="stylesheet"type="text/css"href="02_PHP%2017%E6%99%82%E9%96%93%E7%9B%AE(%E6%BC%94%E7%BF%922%20%E6%8E%B2%E7%A4%BA%E6%9D%BF%E3%81%AE%E4%BD%9C%E6%88%90%EF%BC%89%E4%BF%AE%20style%20.css">
    
    </head>

    <body>
            
        <img src="diblog_logo.jpg"width=20%>
        <header>
           <div class="menu">トップ</div>
            <ul>
            <li>プロフィール</li>
            <li>D.l.Blogについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
            </ul>
         </header>
         <main>
            <div class="left">
                <h1>プログラミングに役立つ掲示板</h1>
                <form method="post"action="02_PHP%2017%E6%99%82%E9%96%93%E7%9B%AE(%E6%BC%94%E7%BF%922%20%E6%8E%B2%E7%A4%BA%E6%9D%BF%E3%81%AE%E4%BD%9C%E6%88%90%EF%BC%89%E4%BF%AE%20insert.php">
                    <h2>入力フォーム</h2>
                    <div>
                        <label>ハンドルネーム</label><br>
                        <input type="text"class="text"size="35"name="handlename">
                    </div>
                
                    <div>
                        <label>タイトル</label>
                        <br>
                        <input type="text"class="text"size="35"name="title">
                    </div>
                    
                    <div>
                        <label>コメント</label>
                        <br>
                        <textarea cols="35"rows="7"name="comments"></textarea>
                    </div>
                    <div>
                        <input type="submit"class="submit"value="投稿する">
                    </div>
                    
                </form>
                
                <div　class='comments'>
                    
                <?php
                mb_internal_encoding("utf8");
                $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");
                $stmt = $pdo->query("select * from diworks_keijiban");
                
                foreach($stmt as $row){
                    echo "<div class='kiji'>";
                    echo "<h3>".$row['title']."</h3>";
                    echo "<div class='contents'>";
                    echo $row['comments'];
                    echo "<div class='handlename'>posted by".$row['handlename']."</div>";
                    echo "</div>";
                    echo "</div>";
                }
                
                ?>
                    
                </div>
                
             </div>
             
             <div class="right">
                 <h4>人気の記事</h4>
                    <ul>
                    <li>PHPオススメ本</li>
                    <li>PHP　MyAdminの使い方</li>
                    <li>いま人気のエディタTops</li>
                    <li>HTMLの基礎</li>
                    </ul>
                 <h4>オススメリンク</h4>
                    <ul>
                    <li>ﾃﾞｨｰｱｲﾜｰｸｽ株式会社</li>
                    <li>XAMPPのダウンロード</li>
                    <li>Eeclipseのダウンロード</li>
                    <li>Bracketsのダウンロード</li>
                    </ul>
                 <h4>カテゴリ</h4>
                    <ul>
                    <li>HTML</li>
                    <li>PHP</li>
                    <li>MySQL</li>
                    <li>JavaScript</li>
                 </ul>
            </div> 
             
         </main>
        <footer>
            Copyright D.I.works｜ D.I blog is the one which provides A to Z about programming
        </footer>
     </body>
  </html>