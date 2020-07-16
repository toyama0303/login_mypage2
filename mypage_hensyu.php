<?php
mb_internal_encoding("utf8");

//セッションスタート
session_start();

//mypage.phpからの導線以外は、『login_error.php』へリダイレクト
  if(empty($_POST['from_mypage'])){
    header("Location:login_error.php");
  }


?>

<!DOCTYPE html>
<html lang="ja">
  <head>
  <meta charset="UTF-8">
  <title>マイページ編集</title>
  <link rel="stylesheet" type="text/css" href="mypage_hensyu.css">
  </head>
  
  <body>
  
    <header>
      <img src="4eachblog_logo.jpg">
      <div class="logout"><a href="log_out.php">ログアウト</a></div>
    </header>
  
    <main>
      <div class="box">
        <h2>会員情報</h2>
        <div class="hello">
          <?php echo "こんにちは！　".$_SESSION['name']."さん"; ?>
        </div>
        <div class="profile_pic">
          <img src="<?php echo $_SESSION['picture']; ?> ">
        </div>
        <form action="mypage_update.php" method="post" class="form_center">
          <div class="basic_info">
            <p>氏名：<input type="text" size="30" value="<?php echo $_SESSION['name']; ?>" name="name"></p>
            <p>メール：<input type="text" size="30" value="<?php echo $_SESSION['mail']; ?>" name="mail"></p>
            <p>パスワード：<input type="text" size="30" value="<?php echo $_SESSION['password']; ?>" name="password"></p>
            <input type="hidden" value="<?php echo rand(1,10);?>" name="from_mypage">
          </div>
          <div class="comments">
            <textarea cols="100" rows="5" name="comments"><?php echo $_SESSION['comments']; ?></textarea>
              <div class="hensyubutton">
                <input type="submit" class="submit_button" size="35" value="この内容に変更する">
              </div>
          </div>
          </form>
        </div>
    </main>

    <footer>
    © InterNous.inc. All right reserved
    </footer>
  
  
  </body>

</html>