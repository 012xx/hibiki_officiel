<?php
$errors = [];
if($_POST){
    $id = null;
    $name = $_POST["name"];
    $contents = $_POST["contents"];
    if(!$name){
        $errors[] .= "名前を入力してください";
    }
    if(!$contents){
        $errors[] .= "投稿内容を入力してください";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="stylesheet2.css">
  <title>嵩原ひびき_official</title>
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
  
  <!-- サイトの中身部分 -->
<div class="all">
<h1 class="title">Contact</h1>
<div>ご意見・リクエスト…いろいろどーぞ</div>
<div class="form">
<form action="confirm.php" method="post" name="form" onsubmit="return validate()">

<div class="box">
<p>名前*</p>
  <input class="respon" id="name" type="text" name="name"placeholder="あなたのことを教えてください">
</div>

<div class="box">
<div class="c-block-input">
  <div class="c-block-input__items">
    <div class="c-block-input__title">どこから嵩原を知りましたか？*
    </div>
    <div class="c-block-input__radio">
      <input type="radio" name="Twitter" id="radio01" checked>
      <label for="radio01">Twitter</label>
     　 <input type="radio" name="YouTube" id="radio02">
      <label for="radio02">You Tube</label>
     　 <input type="radio" name="genjitu" id="radio03">
      <label for="radio03">現実</label>
     　 <input type="radio" name="sonota" id="radio04">
      <label for="radio04">その他</label>
    </div>
  </div>
</div>
</div>

<div class="box">
<p>ご意見・リクエストがあればどうぞ</p>
<tr><td><textarea class="respon" name="iken" rows="10" placeholder="悪口は書かないでね"></textarea></td></tr>
</div>
</div>
<div class="box1">
<tr><td><input type="reset" value="やり直し" class="button">    
        <input type="submit" value="送信" class="button1"></td></tr>
</div>
</form>
</div>
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

