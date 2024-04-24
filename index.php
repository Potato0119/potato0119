<!DOCTYPE html>
<html lang="zh-Hant">
<head>
  <!-- meta, title -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" >
  <meta name="description" content="安 我是馬鈴薯！這是我的個人網站 如果有客製網站服務也歡迎找我喔！馬鈴薯的個人網站 Potato0119 PotatoTW" />
  <title>馬鈴薯的個人網站 | Potato0119's Web</title>

  <!-- CSS -->
  <link rel="stylesheet" href="./reset.css" />
  <link rel="stylesheet" href="./style.css" />
  <link rel="stylesheet" href="./mobile.css" />

  <!-- icon, robots og-->
  <link type="image/x-icon" href="./favicon.ico" rel="icon" />
  <link type="image/x-icon" href="./favicon.ico" rel="bookmark" />
  <link data-default-icon="./favicon.ico" data-badged-icon="./favicon.ico" rel="shortcut icon" href="./favicon.ico"/>
  <link rel="robots" href="./robots.txt" />

  <meta property="og:type" content="website">
  <meta property="og:image" content="https://potato0119.com/image/icon.png">
  <meta property="og:title" content="馬鈴薯的個人網站 | Potato0119's Web">
  <meta property="og:description" content="安 我是馬鈴薯！這是我的個人網站 如果有客製網站服務也歡迎找我喔！馬鈴薯的個人網站 Potato0119 PotatoTW">
  <meta property="og:url" content="https://potato0119.com">

  <!-- font and other-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100..900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Kode+Mono:wght@400..700&family=Rochester&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/gh/eliyantosarage/font-awesome-pro@main/fontawesome-pro-6.5.1-web/css/all.min.css" rel="stylesheet"/>
</head>
<body onload="start()">
  <?php
    session_start();
    if(isset($_SESSION['username'])) {
      $username = "歡迎使用者 " . $_SESSION['username'];
    }else{
      $username = "登入註冊系統";
      echo "<style>.loginli:hover .accList{opacity: 0;}</style>";
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["logout"])) {
      $username = "登入註冊系統";
      echo "<style>.loginli:hover .accList{opacity: 0;}</style>";
    }
  ?>
  <div class="header" id="header">
    <div class="title" id="title">
      <img src="/image/icon.png" />
      <p><span class="title1">馬鈴薯</span><span class="title2">的個人網站</span></p>
    </div>
    <nav class="nav-pc">
      <ul class="nav-ul">
        <li><a onclick="home()">首頁</a></li>
        <li><a onclick="about()">關於我</a></li>
        <li><a onclick="project()">作品集</a></li>
        <li><a onclick="shop()">客製網站服務</a></li>
        <li><a href="./math/index.html">高一數學計算機</a></li>
        <li><a href="./blog/index.php">馬鈴薯Blog</a></li>
        <li class="loginli"><a href="./login/index.php"><?php echo $username; ?></a>
        <form method='post' action='<?php echo $_SERVER["PHP_SELF"]; ?>'><ul class='accList'><li><input type='submit' name='logout' value='登出'></p></li></ul></form>
        </li>
      </ul>
    </nav>
  </div>
  
  <span class="sub">
    <p class="sub1"></p>
  </span>

  <div class="main">
    <img class="banner" id="banner1" src="./image/banner1.png">
    <img class="banner" id="banner2" src="./image/banner2.png">
    <img class="banner" id="banner3" src="./image/banner3.png">
    <img class="mbanner" src="/image/mbanner.png" />
    <p></p>
    <div class="mainDot">
      <i class="fa-solid fa-circle-dot" id="dot1" style="color: #ffffff;"></i>
      <i class="fa-solid fa-circle" id="dot2" style="color: #ffffff;"></i>
      <i class="fa-solid fa-circle" id="dot3" style="color: #ffffff;"></i>
    </div>
  </div>
  <div class="about" id="about">
    <p class="about-title">關於我</p>
    <p class="about-text">早安 我只是一個普通的高中生 就讀<span>你猜</span>高中<br>我平常的興趣也就是寫寫程式打個遊戲之類的XD<br>除此之外還有一個會讓很多人生氣的事<br>就是我有女朋友 我很幸福:D</p>
    <div class="call">
      <p class="call-title">聯繫方式</p>
      <div class="call-item" onclick="discord()"><img src="/image/discord.png"/><p>Discord</p></div>
      <a href="https://www.instagram.com/potato_0119_/" target="_blank"><div class="call-item"><img src="/image/ig.png"/><p>Instagram</p></div></a>
      <a href="https://github.com/Potato0119" target="_blank"><div class="call-item"><img src="/image/github.png"/><p>Github</p></div></a>
      <div class="call-background"></div>
    </div>
    <div class="skill">
      <p class="skill-title">技能</p>
      <div class="skill-item"><img src="/image/python.png"/><p>Python</p></div>
      <div class="skill-item"><img src="/image/html.png"/><p>網站前端</p></div>
      <div class="skill-item"><img src="/image/ps.png"/><p>基本修圖</p></div>
      <div class="skill-item"><img src="/image/pr.png"/><p>基本剪輯</p></div>
      <div class="skill-item"><img src="/image/ae.png"/><p>基本特效</p></div>
      <div class="skill-background"></div>
    </div>
    <div class="mskill1">
      <p class="mskill1-title">技能</p>
      <div class="mskill1-item"><img src="/image/python.png"/><p>Python</p></div>
      <div class="mskill1-item"><img src="/image/html.png"/><p>網站前端</p></div>
      <div class="mskill1-item"><img src="/image/ps.png"/><p>基本修圖</p></div>
      <div class="mskill1-background"></div>
    </div>
    <div class="mskill2">
      <p class="mskill2-title">技能</p>
      <div class="mskill2-item"><img src="/image/pr.png"/><p>基本剪輯</p></div>
      <div class="mskill2-item"><img src="/image/ae.png"/><p>基本特效</p></div>
      <div class="mskill2-background"></div>
    </div>
    <div class="game">
      <p class="game-title">遊戲</p>
      <div class="game-item"><img src="/image/minecraft.png"/><p>Minecraft</p></div>
      <div class="game-item"><img src="/image/gtav.png"/><p>GTA V</p></div>
      <div class="game-item"><img src="/image/fh5.png"/><p>Forza Horizon 5</p></div>
      <div class="game-item"><img src="/image/mfs2020.png"/><p>MFS 2020</p></div>
      <div class="game-item"><img src="/image/ron.png"/><p>Ready or Not</p></div>
      <div class="game-item"><img src="/image/ets2.png"/><p>ETS 2</p></div>
      <div class="game-background"></div>
    </div>
    <div class="mgame1">
      <p class="mgame1-title">遊戲</p>
      <div class="mgame1-item"><img src="/image/minecraft.png"/><p>Minecraft</p></div>
      <div class="mgame1-item"><img src="/image/gtav.png"/><p>GTA V</p></div>
      <div class="mgame1-item"><img src="/image/fh5.png"/><p>Forza Horizon 5</p></div>
      <div class="mgame1-background"></div>
    </div>
    <div class="mgame2">
      <p class="mgame2-title">遊戲</p>
      <div class="mgame2-item"><img src="/image/mfs2020.png"/><p>MFS 2020</p></div>
      <div class="mgame2-item"><img src="/image/ron.png"/><p>Ready or Not</p></div>
      <div class="mgame2-item"><img src="/image/ets2.png"/><p>ETS 2</p></div>
      <div class="mgame2-background"></div>
    </div>
  </div>
  <div class="project" id="project">
    <p class="project-title">
      這些是我的作品<br class="rwd">有但不多
    </p>
    <div class="Gblock">
      <a href="https://reurl.cc/YV9M3X" target="_blank"><div class="block block1"><img src="/image/ts.png" ><p>DC-廢話機器人</p></div></a>
      <a href="https://reurl.cc/xLK6aE" target="_blank"><div class="block block2"><img src="/image/betBOTato.png" ><p>DC-對賭機器人</p></div></a>
      <a href="/math/index.html"><div class="block block3"><img src="/image/math.png" ><p>高一數學計算機</p></div></a>
      <a href="https://www.instagram.com/reel/Cs-57kCOqV2/" target="_blank"><div class="block block4"><img src="/image/media1.png" ><p>IG-小帥的冒險1</p></div></a>
      <a href="https://www.instagram.com/reel/Cs_a2gZsAYp/" target="_blank"><div class="block block5"><img src="/image/media1.png" ><p>IG-小帥的冒險2</p></div></a>
      <a href="https://www.instagram.com/reel/CtBE1KsOUOi/" target="_blank"><div class="block block6"><img src="/image/media1.png" ><p>IG-小帥的冒險3</p></div></a>
    </div>
  </div>

  <div class="shop" id="shop">
    <p class="shop-title">
      客製網站服務
    </p>
    <p class="shop-text">我目前接單網站編寫服務 我只接靜態網頁喔~<br>品質優良 歡迎下單</p>
    <div class="sblock sblock1" id="sblock1">
      <img src="./image/book.png"/>
      <p class="sblock_title">網站編寫</p>
      <p class="sblock_price">私訊談價</p>
      <a onclick="discord()"><p><i class="fa-solid fa-cart-shopping"></i> 私訊IG or DC</p></a>
      <p class="sblock_sub" id="sub1">不會寫程式嗎?<br>沒關係 只要你有想法<br>都歡迎你下單討論<br>基本費用是600元<br>不過如果沒甚麼特殊的需求<br>可能就剛好600<br>一切以報價為準</p>
    </div>
    <div class="sblock sblock2" id="sblock2">
      <img src="./image/lever.png"/>
      <p class="sblock_title">網站架設</p>
      <p class="sblock_price">私訊談價</p>
      <a onclick="discord()"><p><i class="fa-solid fa-cart-shopping"></i> 私訊IG or DC</p></a>
      <p class="sblock_sub" id="sub2">你有一個網站的檔案了<br>但想讓網站出現在網路上?<br>只要你願意下單<br>就幫你架設到網路上<br>還有Google搜尋引擎上喔~</p>
    </div>
    <div class="sblock sblock3" id="sblock3">
      <img src="./image/iron_golem.png"/>
      <p class="sblock_title">網站維護</p>
      <p class="sblock_price">私訊談價</p>
      <a onclick="discord()"><p><i class="fa-solid fa-cart-shopping"></i> 私訊IG or DC</p></a>
      <p class="sblock_sub" id="sub3">網站寫好了也架設好了<br>但有時需要更新?<br>現在只需要300$月<br>就可以依照你的想法<br>幫你進行網站更新</p>
    </div>
    <div class="sblock sblock4" id="sblock4">
      <img src="./image/emerald.png"/>
      <p class="sblock_title">套餐: 編寫+架設</p>
      <p class="sblock_price">編寫+架設的價格打8折!!</p>
      <a onclick="discord()"><p><i class="fa-solid fa-cart-shopping"></i> 私訊IG or DC</p></a>
      <p class="sblock_sub" id="sub4">網站編寫跟架設一氣呵成?<br>就是這裡了 下單此項目<br>立即享受八折優惠!!</p>
    </div>
  </div>

  <div class="footer">
    <div><p>Copyright © 2024・馬鈴薯Potato0119</p></div>
  </div>

  <script src="./script.js"></script>
  <script src="./banner.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>