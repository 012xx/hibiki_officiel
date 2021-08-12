<?php 
    // フォームのボタンが押されたら
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // フォームから送信されたデータを各変数に格納
        $name = $_POST["name"];
        $radio = $_POST["radio"];
        $iken = $_POST["iken"];
    }
    // 送信ボタンが押されたら
    if (isset($_POST["submit"])) {
        // 送信ボタンが押された時に動作する処理をここに記述する
            mb_language("ja");
        mb_internal_encoding("UTF-8");
        //mb_send_mail("BS120037@sun.ac.jp", "メール送信テスト", "メール本文");
            // 件名を変数subjectに格納
            $subject = "［自動送信］お問い合わせ内容の確認";
            // メール本文を変数bodyに格納
        $body = <<< EOM
{$name}　様
お問い合わせありがとうございます。
以下のお問い合わせ内容を、メールにて確認させていただきました。
===================================================
【 お名前 】 
{$name}
【 ふりがな 】 
{$furigana}
【 メール 】 
{$email}
【 電話番号 】 
{$tel}
【 性別 】 
{$sex}
【 項目 】 
{$item}
【 内容 】 
{$content}
===================================================

内容を確認のうえ、回答させて頂きます。
しばらくお待ちください。
EOM;     
        // 送信元のメールアドレスを変数fromEmailに格納
        $fromEmail = "contact@dream-php-seminar.com";
        // 送信元の名前を変数fromNameに格納
        $fromName = "お問い合わせテスト";
        // ヘッダ情報を変数headerに格納する      
        $header = "From: " .mb_encode_mimeheader($fromName) ."<{$fromEmail}>";
        // メール送信を行う
        mb_send_mail($email, $subject, $body, $header);
        // サンクスページに画面遷移させる
        header("Location: http://localhost/thanks.php");
        exit;
    }
?>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="css/Contact.css">
<title>お問い合わせフォーム</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<!-- header -->
  <header>
  <img src="logo.png" class="headline">
  <ul class="nav-list">
  <li class="nav-list-item"><a href="index.html">Home</a></li>
  <li class="nav-list-item"><a href="Works.html">Works</a></li>
  <li class="nav-list-item"><a href="About.html">About</a></li>
  <li class="nav-list-item">Contact</li>
  </ul>
</header>
<div class="all">
    <form action="confirm.php" method="post">
            <input type="hidden" name="name" value="<?php echo $name; ?>">
            <input type="hidden" name="radio" value="<?php echo $radio; ?>">
            <input type="hidden" name="iken" value="<?php echo $iken; ?>">
            <h1>内容確認</h1>
            <p>内容は合ってるかい？<br>よろしければ「送信する」ボタンを押して下され。</p>
            <div class="all">
                <div>
                    <label>お名前：</label><?php echo $name; ?>
                </div>
                <div>
                    <label>出会い：</label><?php echo $radio; ?>
                </div>
                <div>
                    <label>意見など：</label><?php echo $iken; ?>
                </div>
                
            </div>
        <input type="button" value="内容を修正する" onclick="history.back(-2)" class="button">
        <button type="submit" name="submit" class="button1">送信する</button>
    </form>
</div>
<!-- footer -->
<footer>
    <br>
    <ul class="footer-menu">
    <li><a href="index.html" id="line">Home ｜</a></li>
    <li><a href="Works.html" id="line">Works ｜</a></li>
    <li><a href="About.html" id="line">About ｜</a></li>
    <li>Contact</li>
    </ul>
    <p>© 2021 team-BPR.</p>
</footer>
</body>
</html>