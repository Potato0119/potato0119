<!DOCTYPE html>
<html lang="zh-Hant">
<head>
  <!-- meta, title -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" >
  <title>馬鈴薯Blog | Potato0119's Blog</title>

  <!-- CSS -->
  <link rel="stylesheet" href="./../reset.css" />
  <link rel="stylesheet" href="./style.css" />

  <!-- icon, robots-->
  <link type="image/x-icon" href="./../favicon.ico" rel="icon" />
  <link type="image/x-icon" href="./../favicon.ico" rel="bookmark" />
  <link data-default-icon="./../favicon.ico" data-badged-icon="./../favicon.ico" rel="shortcut icon" href="./../favicon.ico"/>

  <!-- font and other-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100..900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Kode+Mono:wght@400..700&family=Rochester&display=swap" rel="stylesheet">
  <link href="https://site-assets.fontawesome.com/releases/v6.5.2/css/all.css" rel="stylesheet"/>
</head>
<body>
    <img class="bg" src="./../image/bg.png"/>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
        <div class="header" id="header">
          <div class="title" id="title">
            <img src="/image/icon.png" />
            <p>馬鈴薯的個人網站</span></p>
          </div>
          <nav class="nav-pc">
            <ul class="nav-ul">
              <li><a href="./../index.php">首頁</a></li>
              <li><a href="../math/index.html">排列組合計算機</a></li>
              <li><a href="../resource/index.html">資源下載專區</a></li>
              <li><a href=".././screen/?brand=0&px=0&hz=0&hdr=2&curved=2&onems=2&inch=0&btn=">螢幕選購助手</a></li>
              <li><a href="./index.php">馬鈴薯Blog</a></li>
              <li><a href="../login/index.php">註冊登入系統</a></li>
            </ul>
          </nav>
        </div>
    </form>
    <!-- 手機選單 -->
    <i class="list fa-solid fa-list" id="list"></i>
    <div class="exit-menu" id="exit-menu"></div>
    <div class="menu" id="menu">
      <img src="../image/icon.png" alt="icon">
      <p class="menu-title">Potato0119's Web</p>
      <hr width="100%" style="height: 0.25vh;border-width:0;background-color:gray">
      <nav>
        <div><a href="../index.php">首頁</a></div>
        <div><a href="../math/index.html">排列組合計算機</a></div>
        <div><a href="../resource/index.html">資源下載專區</a></div>
        <div><a href=".././screen/?brand=0&px=0&hz=0&hdr=2&curved=2&onems=2&inch=0&btn=">螢幕選購助手</a></div>
        <div><a href="./index.html">馬鈴薯Blog</a></div>
        <div><a href="../login/index.php">註冊登入系統</a></div>
      </nav>
    </div>
    <!-- 手機選單 -->
    <script src="../menu.js"></script>
    <?php
      $SQLservername = "localhost";
      $SQLusername = "root";
      $SQLpassword = "";
      $SQLdbname = "potato";
      $conn = new mySqli($SQLservername, $SQLusername, $SQLpassword, $SQLdbname);
      if ($conn->connect_error) {
          die("<script>console.log('" . "MySQL資料庫連線失敗: " . $conn->connect_error . "')</script>");
      } else{
          echo "<script>console.log('MySQL資料庫連線成功')</script>";
      }
      
      $data = "SELECT * FROM `blog`"; 
      $allData = $conn->query($data);
      $contents = "";
      while($row = $allData->fetch_assoc()) {
        $contents = $row["content"] . $contents;
      }
      $blog = '<div class="blog">
                <div class="blogHeader">
                  <p class="headerTitle">嗨 這是我的Blog(or廢文)</p>
                  <p class="headerContent">可能有點枯燥無聊XD 請見諒</p>
                </div>' . $contents . '<div class="footer"><p>Copyright © 2024・馬鈴薯Potato0119</p></div></div>';
      echo $blog;
    ?>
</body>
</html>