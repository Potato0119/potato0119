<!DOCTYPE html>
<html lang="zh-Hant">
<head>
  <!-- meta, title -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" >
  <title>Admin!</title>

  <!-- icon, robots-->
  <link type="image/x-icon" href="./../favicon.ico" rel="icon" />
  <link type="image/x-icon" href="./../favicon.ico" rel="bookmark" />
  <link data-default-icon="./../favicon.ico" data-badged-icon="./../favicon.ico" rel="shortcut icon" href="./../favicon.ico"/>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100..900&display=swap" rel="stylesheet">
  <style>
  body {
    font-family: "Noto Sans TC", sans-serif;
  }
  .blogStyle{
    background-color: #faebd7;
    width: 80vw;
    height: 8vw;
    margin-left: 10vw;
    border-radius: 1vw;
    margin-top: 1vw;
  }
  .blogTitle{
      position: absolute;
      width: 65vw;
      height: 2vw;
      display: flex;
      align-items: center;
  }
  .blogTitle input{
      font-size: 1.5vw;
      margin-left: 1em;
      font-weight: bold;
      font-family: "Noto Sans TC", sans-serif;
  }
  .blogDate{
      position: relative;
      left:65vw;
      width: 15vw;
      height: 2vw;
      display: flex;
      align-items: center;
      justify-content: end;
  }
  .blogDate input{
      font-size: 1vw;
      margin-right: 1em;
      font-weight: bold;
      font-family: "Noto Sans TC", sans-serif;
  }
  .blogContent{
      position: absolute;
      width: 80vw;
      height: 6vw;
  }
  .blogContent textarea{
      font-size: 1vw;
      margin-left: 1.5vw;
      margin-right: 1.5vw;
      margin-top: 1em;
      width:77vw;
      height:3.6vw;
      line-height:1.2em;
      font-family: "Noto Sans TC", sans-serif;
  }
  .sso,.export{
    margin-top:1vw;
    margin-left:11vw;
    font-family: "Noto Sans TC", sans-serif;
  }
  </style>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
        <div class="blogStyle">
          <div class="blogTitle"><p><input name="title"></p></div>
          <div class="blogDate"><p><input type="date" name="date"></p></div>
          <div class="blogContent"><p><textarea name="content"></textarea></p></div>
        </div>
        <input class="sso" name="sso">
        <input type="submit" name="submit" value="提交">
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
      if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
        if ($_POST["title"] == "" or $_POST["date"] == "" or $_POST["content"] == ""){
          echo "<p class='export'>資料為空</p>";
        }else if ($_POST["sso"] == "w") {
          $maxid = 0;
          while($row = $allData->fetch_assoc()) {
            if ($maxid < $row["id"]){
              $maxid = $row["id"];
            }
          }
          $maxid = $maxid + 1;
          $new = '<div class="blogStyle"><div class="blogTitle"><p>' . $_POST["title"] . '</p></div><div class="blogDate"><p>' . $_POST["date"] . '</p></div><div class="blogContent"><p>' . $_POST["content"] . '</p></div></div>';
          $create = "INSERT INTO `blog` (`content`, `title`, `id`) VALUES (?, ?, ?)";
          $toSave = $conn->prepare($create);
          $toSave->bind_param("ssi",$new,$_POST["title"],$maxid);
          $toSave->execute();
          $toSave->close();
          echo "<p class='export'>Submitted successfully.</p>";
          header("Location: admin.php");
          exit;
        }else {
          echo "<p class='export'>Verfiy error.</p>";
        }
      }
    ?>
    <script src="./script.js"></script>
</body>
</html>

