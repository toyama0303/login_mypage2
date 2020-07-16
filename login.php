<?php
session_start();
if(isset($_SESSION['id'])){
  header("Location:mypage.php");
}
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
  <meta charset="UTF-8">
  <title>ログイン</title>
  <link rel="stylesheet" type="text/css" href="login.css">
  </head>

  <body>
    
    <header>
      <img src="4eachblog_logo.jpg">
      <div class="login"><a href="login.php">ログイン</a></div>
    </header>
  
    <main>
      <form method="post" action="mypage.php">
        <div class="form_contents">
          <div class="mail">
            <label>メールアドレス</label><br>
            <input type="text" class="formbox" size="40" value="<?php echo $_COOKIE['mail']; ?>" name="mail">
          </div>
          <div class="password">
            <label>パスワード</label><br>
            <input type="password" class="formbox" size="40" value="<?php echo $_COOKIE['password']; ?>" name="password">
          </div>
          <div class="loginbutton">
            <input type="submit" class="submit_button" size="35" value="ログイン">
          </div>
        </div>
      </form>
    </main>

    <footer>
    © InterNous.inc. All right reserved
  </footer>
    
  </body>
  
</html>      