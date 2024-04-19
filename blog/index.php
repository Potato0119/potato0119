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
  <link href="https://cdn.jsdelivr.net/gh/eliyantosarage/font-awesome-pro@main/fontawesome-pro-6.5.1-web/css/all.min.css" rel="stylesheet"/>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
              <li><a href="./index.php">馬鈴薯Blog</a></li>
            </ul>
          </nav>
        </div>
    </form>
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