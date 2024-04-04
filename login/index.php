<!DOCTYPE html>
<html lang="zh-Hant">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>登入 | 馬鈴薯的個人網站 | Potato0119's Web</title>
  <link rel="stylesheet" href="./reset.css" />
  <link rel="stylesheet" href="./style.css" />
  <link rel="stylesheet" href="./mobile.css" />
  <link data-default-icon="../image/icon.png" data-badged-icon="../image/icon.png" rel="shortcut icon" href="../image/icon.png"/>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="background"><img src="/image/login.png"></div>
    <div class="all">
      <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" autocomplete="off">
        <div class="content">
          <img src="/image/icon.png" class="icon">
          <p class="title">Potato0119'Web 登入示範系統</p>
          <label for="username">使用者名稱 Username</label>
          <br>
          <input class="username" id="username" name="username" placeholder="Username ...">
          <br>
          <label for="password">密碼 Password</label>
          <br>
          <input class="password" id="password" name="password" placeholder="Password ...">
          <br>
          <input class="btn" type="submit" name="login" value="登入">
          <br>
          <input class="btn" type="button" onclick="window.location.href = '../register/index.php';" value="沒有帳號? 註冊">
          <br>
          <input class="btn" type="button" onclick="window.location.href = '../../';" value="回首頁">
        </div>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
        
        $data = "SELECT * FROM `acc` ORDER BY `username` DESC"; 
        $allData = $conn->query($data);
        
        // 登入
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
            if (isset($_POST["username"]) and isset($_POST["password"])){
                $username = $_POST["username"];
                $password = $_POST["password"];
                if ($allData->num_rows > 0) {
                  while($row = $allData->fetch_assoc()) {
                    if ($row["username"] == $username){
                      $passwordIs = $row["password"];
                      if (password_verify($password, $passwordIs)) {
                          echo "<script>
                            Swal.fire({
                              title: '登入成功',
                              text: '歡迎使用者 ".$username."!',
                              icon: 'success',
                              timer: 5000,
                              timerProgressBar: true,
                            });
                          </script>";
                      }else{
                          echo "<script>
                            Swal.fire({
                              title: '登入失敗',
                              text: '帳號或密碼錯誤',
                              icon: 'error',
                              timer: 5000,
                              timerProgressBar: true,
                            });
                          </script>";
                      };
                    }else{
                      echo "<script>
                        Swal.fire({
                          title: '登入失敗',
                          text: '帳號或密碼錯誤',
                          icon: 'error',
                          timer: 5000,
                          timerProgressBar: true,
                        });
                      </script>";
                    };
                  }
                } else {
                  echo "<script>
                          Swal.fire({
                            title: '登入失敗',
                            text: '未知錯誤1',
                            icon: 'error',
                            timer: 5000,
                            timerProgressBar: true,
                          });
                        </script>";
                }
            };
        }
    ?>
</body>