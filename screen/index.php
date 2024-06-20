<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <!-- meta, title -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>資源下載專區 | 馬鈴薯的個人網站 | Potato0119's Web</title>
    <link data-default-icon="../favicon.ico" data-badged-icon="../favicon.ico" rel="shortcut icon" href="../favicon.ico"/>
    
    <!-- CSS -->
    <link rel="stylesheet" href="./reset.css" />
    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="./mobile.css" />
    
    <!-- font and other-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kode+Mono:wght@400..700&family=Rochester&display=swap" rel="stylesheet">
    <link href="https://site-assets.fontawesome.com/releases/v6.5.2/css/all.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <form method="GET"> 
    <div class="selecters">
        <p>條件篩選</p>
        <div>
        <label for="brand">品牌</label>
        <select name="brand" id="brand">
            <option value="0">全部</option>
            <option value="Acer">Acer&nbsp;宏碁</option>
            <option value="AOC">AOC</option>
            <option value="Asus">Asus&nbsp;華碩</option>
            <option value="ROG">Asus&nbsp;ROG</option>
            <option value="BenQ">BenQ</option>
            <option value="GigaByte">Gigabyte&nbsp;技嘉</option>
            <option value="hp">hp&nbsp;惠普</option>
            <option value="MSI">MSI&nbsp;微星</option>
            <option value="Philips">Philips&nbsp;飛利浦</option>
            <option value="Samsung">Samsung&nbsp;三星</option>
            <option value="ViewSonic">ViewSonic&nbsp;優派</option>
        </select>
        </div>

        <div>
        <label for="px">畫質</label>
        <select name="px" id="px">
          <option value="0">全部</option>
          <option value="HD">HD</option>
          <option value="QHD">QHD(2k)</option>
          <option value="UHD">UHD(4k)</option>
        </select>
        </div>

        <div>
        <label for="hz">刷新率</label>
        <select name="hz" id="hz">
          <option value="0">全部</option>
          <option value="60">60Hz以上</option>
          <option value="144">144Hz以上</option>
          <option value="240">240Hz以上</option>
        </select>
        </div>

        <div>
        <label for="hdr">HDR</label>
        <select name="hdr" id="hdr">
          <option value="2">全部</option>
          <option value="1">要</option>
          <option value="0">不要</option>
        </select>
        </div>

        <div>
        <label for="curved">曲面螢幕</label>
        <select name="curved" id="curved">
          <option value="2">全部</option>
          <option value="1">要</option>
          <option value="0">不要</option>
        </select>
        </div>

        <div>
        <label for="onems">1ms延遲</label>
        <select name="onems" id="onems">
          <option value="2">全部</option>
          <option value="1">要</option>
          <option value="0">不要</option>
        </select>
        </div>

        <div>
        <label for="inch">尺寸</label>
        <select name="inch" id="inch">
          <option value="0">全部</option>
          <option value="24">24吋</option>
          <option value="27">27吋</option>
          <option value="32">32吋</option>
        </select>
        </div>

        <button name="btn">搜尋</button>
    </div>
    </form>
    <script>
        Swal.fire({
            title: "注意",
            html: "金額僅供參考<br>難免有誤 詳細資料請至官網公布的數據確認",
            icon: "warning",
            timer: 2000,
            timerProgressBar: true
        });
    </script>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "potato";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("連接失敗: " . $conn->connect_error);
    }
    
    // $sql = "SELECT name, brand, px, hz, hdr, curved, radius, onems, inch, money FROM screen WHERE 1=1";
    // $result = $conn->query($sql);

    if (isset($_GET['btn'])) {
        $sql = "SELECT name, brand, px, hz, hdr, curved, radius, onems, inch, money FROM screen WHERE 1=1";
    
        echo "<br><div class='search'><p>搜尋條件:";
        if ($_GET['brand'] != '0') {
            $brand = $conn->real_escape_string($_GET['brand']);
            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $brand;
            $sql .= " AND brand = '$brand'";
        }
    
        if ($_GET['px'] != '0') {
            $px = $conn->real_escape_string($_GET['px']);
            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $px;
            $sql .= " AND px = '$px'";
        }
    
        if ($_GET['hz'] != '0') {
            $hz = $conn->real_escape_string($_GET['hz']);
            echo "Hz以上&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $hz;
            $sql .= " AND hz >= '$hz'";
        }

        if ($_GET['hdr'] != '2') {
            $hdr = $conn->real_escape_string($_GET['hdr']);
            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
            if ($_GET['hdr'] == '0'){
                echo "不要HDR";
            }else if($_GET['hdr'] == '1'){
                echo "要HDR";
            }
            $sql .= " AND hdr = '$hdr'";
        }

        if ($_GET['curved'] != '2') {
            $curved = $conn->real_escape_string($_GET['curved']);
            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
            if ($_GET['curved'] == '0'){
                echo "不要曲面螢幕";
            }else if($_GET['curved'] == '1'){
                echo "要曲面螢幕";
            }
            $sql .= " AND curved = '$curved'";
        }

        if ($_GET['onems'] != '2') {
            $onems = $conn->real_escape_string($_GET['onems']);
            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
            if ($_GET['onems'] == '0'){
                echo "不要GTG-1ms";
            }else if($_GET['onems'] == '1'){
                echo "要GTG-1ms";
            }
            $sql .= " AND onems = '$onems'";
        }

        if ($_GET['inch'] != '0') {
            $inch = $conn->real_escape_string($_GET['inch']);
            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $inch . "吋";
            $sql .= " AND inch = '$inch'";
        }

        if ($_GET['brand']=='0'&&$_GET['px']=='0'&&$_GET['hz']=='0'&&$_GET['hdr']=='2'&&$_GET['curved']=='2'&&$_GET['onems']=='2'&&$_GET['inch']=='0') {
            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;無";
        }
        echo "</p></div><br><br>";
        $result = $conn->query($sql);
    }

    if ($result->num_rows > 0) {
        if (isset($_GET['btn'])) {
            echo "<table>";
            echo "<tr class='tr'><th>品牌</th><th>名稱</th><th>畫質</th><th>刷新率</th><th>HDR?</th><th>曲面螢幕?</th><th>曲面R</th><th>1ms?</th><th>尺寸</th><th>價格</th></tr>";
            $brand = $_GET['brand'];
            $px = $_GET['px'];
            $hz = $_GET['hz'];
            $hdr = $_GET['hdr'];
            $curved = $_GET['curved'];
            $onems = $_GET['onems'];
            $inch = $_GET['inch'];
        }
        
        while($row = $result->fetch_assoc()) {
            if ($row["hdr"]){
                $have_hdr = "是";
            }else{
                $have_hdr = "否";
            }
            if ($row["curved"]){
                $have_curved = "是";
            }else{
                $have_curved = "否";
            }
            if ($row["onems"]){
                $have_onems = "是";
            }else{
                $have_onems = "否";
            }
            echo "<tr>";
            echo "<td>" . $row["brand"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["px"] . "</td>";
            echo "<td>" . $row["hz"] . "</td>";
            echo "<td>" . $have_hdr . "</td>";
            echo "<td>" . $have_curved . "</td>";
            echo "<td>" . $row["radius"] . "R</td>";
            echo "<td>" . $have_onems . "</td>";
            echo "<td>" . $row["inch"] . "</td>";
            echo "<td>" . $row["money"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<br><table><tr><td>0 筆結果</td></tr>";
    }
    // echo "<br><p>出現錯誤嗎 點擊 <a href='/GET?brand=0&px=0&hz=0&hdr=0&curved=0&onems=0&inch=0&btn='>這裡修正</a></p>";
    ?>
</body>
</html>