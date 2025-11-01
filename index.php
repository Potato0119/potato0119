<!DOCTYPE html>
<html lang="zh-Hant">
<head>
  <!-- meta, title -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" >
  <meta name="description" content="安 我是馬鈴薯！這是我的個人網站 如果有客製網站服務也歡迎找我喔！馬鈴薯的個人網站 Potato0119 PotatoTW" />
  <title>馬鈴薯的個人網站 | Potato0119's Web</title>

  <!-- font and other-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100..900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Kode+Mono:wght@400..700&family=Rochester&display=swap" rel="stylesheet">
  <link href="https://site-assets.fontawesome.com/releases/v6.5.2/css/all.css" rel="stylesheet"/>

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
  <link rel="preload" href="./image/banner.jpg" as="image">

</head>
<body onload="onload()">
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
      <img alt="icon" src="/image/icon.png" />
      <p><span class="title1">馬鈴薯的</span><span class="title2">個人網站</span></p>
    </div>
    <nav class="nav-pc">
      <ul class="nav-ul">
        <li><a onclick="home()">首頁</a></li>
        <li><a onclick="about()">關於我</a></li>
        <li><a onclick="project()">作品集</a></li>
        <li><a onclick="partner()">朋友的網站</a></li>
        <li><a href="./math/index.html">排列組合計算機</a></li>
        <br class="rwd">
        <li><a href="./resource/index.html">資源下載專區</a></li>
        <li><a href="./screen/?brand=0&px=0&hz=0&hdr=2&curved=2&onems=2&inch=0&btn=">螢幕選購助手</a></li>
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
    <img class="banner" id="banner" alt="" src="./image/banner.jpg">
    <img class="mbanner" alt="" src="/image/mbanner.png">
  </div>
  <a class="clearBtn" onclick="window.location.reload(true)">強制清除快取</a>
  <div class="about" id="about">
    <p class="about-title">關於我</p>
    <p class="about-text">嗨 很高興認識你 我叫馬鈴薯 英文是Potato0119<br>你可以叫我馬鈴薯 或 破鐵頭 或 Potato<br>就讀華江高中 於該校擔任第九屆軍事研究社社長(已卸任)<br>APCS 7分(4+3, 2025/01)</p>
    <div class="call">
      <p class="call-title">聯繫方式</p>
      <div class="call-item" onclick="discord()"><img alt="" src="/image/discord.png"/><p>Discord</p></div>
      <a href="https://www.instagram.com/potato_0119_/" target="_blank"><div class="call-item"><img alt="" src="/image/ig.png"/><p>Instagram</p></div></a>
      <a href="https://github.com/Potato0119" target="_blank"><div class="call-item"><img alt="" src="/image/github.png"/><p>Github</p></div></a>
      <div class="call-background"></div>
    </div>
    <div class="skill">
      <p class="skill-title">技能</p>
      <div class="skill-item"><img alt="" src="/image/python.png"/><p>Python</p></div>
      <div class="skill-item"><img alt="" src="/image/html.png"/><p>網站前端</p></div>
      <div class="skill-item"><img alt="" src="/image/ps.png"/><p>基本修圖</p></div>
      <div class="skill-item"><img alt="" src="/image/pr.png"/><p>基本剪輯</p></div>
      <div class="skill-item"><img alt="" src="/image/ae.png"/><p>基本特效</p></div>
      <div class="skill-background"></div>
    </div>
    <div class="mskill1">
      <p class="mskill1-title">技能</p>
      <div class="mskill1-item"><img alt="" src="/image/python.png"/><p>Python</p></div>
      <div class="mskill1-item"><img alt="" src="/image/html.png"/><p>網站前端</p></div>
      <div class="mskill1-item"><img alt="" src="/image/ps.png"/><p>基本修圖</p></div>
      <div class="mskill1-background"></div>
    </div>
    <div class="mskill2">
      <p class="mskill2-title">技能</p>
      <div class="mskill2-item"><img alt="" src="/image/pr.png"/><p>基本剪輯</p></div>
      <div class="mskill2-item"><img alt="" src="/image/ae.png"/><p>基本特效</p></div>
      <div class="mskill2-background"></div>
    </div>
    <div class="game">
      <p class="game-title">遊戲</p>
      <div class="game-item"><img alt="" src="/image/minecraft.png"/><p>Minecraft</p></div>
      <div class="game-item"><img alt="" src="/image/gtav.png"/><p>GTA V</p></div>
      <div class="game-item"><img alt="" src="/image/fh5.png"/><p>Forza Horizon 5</p></div>
      <div class="game-item"><img alt="" src="/image/mfs2020.png"/><p>MFS 2020</p></div>
      <div class="game-item"><img alt="" src="/image/ron.png"/><p>Ready or Not</p></div>
      <div class="game-item"><img alt="" src="/image/ets2.png"/><p>ETS 2</p></div>
      <div class="game-background"></div>
    </div>
    <div class="mgame1">
      <p class="mgame1-title">遊戲</p>
      <div class="mgame1-item"><img alt="" src="/image/minecraft.png"/><p>Minecraft</p></div>
      <div class="mgame1-item"><img alt="" src="/image/gtav.png"/><p>GTA V</p></div>
      <div class="mgame1-item"><img alt="" src="/image/fh5.png"/><p>Forza Horizon 5</p></div>
      <div class="mgame1-background"></div>
    </div>
    <div class="mgame2">
      <p class="mgame2-title">遊戲</p>
      <div class="mgame2-item"><img alt="" src="/image/mfs2020.png"/><p>MFS 2020</p></div>
      <div class="mgame2-item"><img alt="" src="/image/ron.png"/><p>Ready or Not</p></div>
      <div class="mgame2-item"><img alt="" src="/image/ets2.png"/><p>ETS 2</p></div>
      <div class="mgame2-background"></div>
    </div>
  </div>
  <div class="project" id="project">
    <p class="project-title">
      這些是我的作品<br class="rwd">有但不多
    </p>
    <div class="Gblock">
      <a onclick="ts()" target="_blank"><div class="block block1"><img alt="" src="/image/ts.png" ><p>DC-廢話機器人</p></div></a>
      <a onclick="bet()" target="_blank"><div class="block block2"><img alt="" src="/image/betBOTato.png" ><p>DC-對賭機器人</p></div></a>
      <a href="/math/index.html"><div class="block block3"><img alt="" src="/image/math.png" ><p>排列組合計算機</p></div></a>
      <!-- <a href=""><div class="block block4"><img alt="" src="/image/media1.png" ><p>開發中</p></div></a>
      <a href=""><div class="block block5"><img alt="" src="/image/media1.png" ><p>開發中</p></div></a>
      <a href=""><div class="block block6"><img alt="" src="/image/media1.png" ><p>開發中</p></div></a> -->
    </div>
  </div>

  <div class="partner" id="partner">
    <p class="partner-title">
      朋友的網站
    </p>
    <div class="PblockGroup">
      <div class="Pblock">
        <a href="https://maple.potato0119.com" target="_blank">
          <img src="/image/maple.jpg" alt="maple">
          <p>Maple Leaf</p>
        </a>
      </div>
      <div class="Pblock">
        <a href="https://u7.potato0119.com" target="_blank">
          <img src="/image/u7.jpg" alt="u7">
          <p>u7</p>
        </a>        
      </div>
      <div class="Pblock">
        <a href="https://ufeelme.potato0119.com" target="_blank">
          <img src="/image/ufeelme.jpg" alt="ufeelme">
          <p>ufeelme</p>
        </a>
      </div>  
      <div class="Pblock">
        <a href="https://jimmy.potato0119.com" target="_blank">
          <img src="/image/jimmy.jpg" alt="jimmy">
          <p>jimmy</p>
        </a>
      </div>
      <div class="Pblock">
        <a href="#here">
          <img src="/image/question-solid.svg" alt="who">
          <p>誠徵朋友</p>
        </a>
      </div>
      <div class="Pblock">
        <a href="#here">
          <img src="/image/question-solid.svg" alt="who">
          <p>誠徵朋友</p>
        </a>
      </div>
      <div class="Pblock">
        <a href="#here">
          <img src="/image/question-solid.svg" alt="who">
          <p>誠徵朋友</p>
        </a>
      </div>
      <div class="Pblock">
        <a href="#here">
          <img src="/image/question-solid.svg" alt="who">
          <p>誠徵朋友</p>
        </a>
      </div>
    </div>
  </div>

  <div class="footer">
    <div><p>Copyright © 2024・馬鈴薯Potato0119</p><h6 style="text-align: right;margin-right: 2em"><span class="rwddel">Designed and Developed by Potato0119</span></h6></div>
  </div>

  <script src="./script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>