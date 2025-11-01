var formatter = new Intl.NumberFormat('en-US');
// f = factorial
document.getElementById("fBtn").addEventListener("click", function() {
    var user = parseInt(document.getElementById("f1").value);
    var fResult = 1
    for(var i=0;i<user;i++) {
        fResult = fResult * (i+1)
    }
    var fResult = (formatter.format(fResult)).toString().replace(/,/g, "");
    document.getElementById("fResult").textContent = fResult;
});
document.getElementById("pBtn").addEventListener("click", function() {
    // init
    var n = parseInt(document.getElementById("p1").value);
    var k = parseInt(document.getElementById("p2").value);
    var temp1 = 1
    var temp2 = 1
    var pResult = 1
    var x = 0
    // n!
    for(var i=0;i<n;i++) {
        temp1 = temp1 * (i+1)
    }
    // (n-k)!, 設n-k=x
    x=n-k
    for(var i=0;i<x;i++) {
        temp2 = temp2 * (i+1)
    }
    pResult = temp1 / temp2; 
    var pResult = (formatter.format(pResult)).toString().replace(/,/g, "");
    document.getElementById("pResult").textContent = pResult; 
});
document.getElementById("cBtn").addEventListener("click", function() {
    // init
    var n = parseInt(document.getElementById("c1").value);
    var k = parseInt(document.getElementById("c2").value);
    var temp1 = 1
    var temp2 = 1
    var cResult = 1
    var x = 0
    // n!
    for(var i=0;i<n;i++) {
        temp1 = temp1 * (i+1)
    }
    console.log(temp1)
    // (n-k)!, 設n-k=x
    x=n-k
    for(var i=0;i<x;i++) {
        temp2 = temp2 * (i+1)
    }
    console.log(temp2)
    // k!, 設k!=y
    y=1
    for(var i=0;i<k;i++) {
        y = y * (i+1)
    }
    console.log(y)
    cResult = temp1 / (y*temp2); 
    var cResult = (formatter.format(cResult)).toString().replace(/,/g, "");
    document.getElementById("cResult").textContent = cResult;
});

document.getElementById("f").style.backgroundColor="#69d2ff"
document.getElementById("fDiv").style.display = "flex";
document.getElementById("pDiv").style.display = "none";
document.getElementById("cDiv").style.display = "none";
document.getElementById("description").innerHTML="階乘是在數學中是指一個正整數及所有比它小的正整數的連乘積 記作 n!<br>例如 5的階乘用 5! 表示 計算方式是從5開始 依次乘以下方的所有正整數<br>5!=5×4×3×2×1=120<br>在程式之中，則可以使用for迴圈去計算階層";

document.getElementById("f").addEventListener("click", function() {
    document.getElementById("f").style.backgroundColor="#69d2ff"
    document.getElementById("p").style.backgroundColor=""
    document.getElementById("c").style.backgroundColor=""
    document.getElementById("fDiv").style.display = "flex";
    document.getElementById("pDiv").style.display = "none";
    document.getElementById("cDiv").style.display = "none";
    document.getElementById("description").innerHTML="階乘是在數學中是指一個正整數及所有比它小的正整數的連乘積 記作 n!<br>例如 5的階乘用 5! 表示 計算方式是從5開始 依次乘以下方的所有正整數<br>5!=5×4×3×2×1=120<br>在程式之中，則可以使用for迴圈去計算階層";
});
document.getElementById("p").addEventListener("click", function() {
    document.getElementById("f").style.backgroundColor=""
    document.getElementById("p").style.backgroundColor="#69d2ff"
    document.getElementById("c").style.backgroundColor=""
    document.getElementById("fDiv").style.display = "none";
    document.getElementById("pDiv").style.display = "flex";
    document.getElementById("cDiv").style.display = "none";
    document.getElementById("description").innerHTML="排列是指從n個不同元素中取出k個 並將這些元素依一定順序排列成一列的方法數<br>不同於組合只關心選出哪些元素 排列還重視元素的排列順序<br>P(n,k)=n!÷(n-k)!<br>在程式中使用P則是先用for迴圈算出n及(n-k)的階層再去進行除法";
});
document.getElementById("c").addEventListener("click", function() {
    document.getElementById("f").style.backgroundColor=""
    document.getElementById("p").style.backgroundColor=""
    document.getElementById("c").style.backgroundColor="#69d2ff"
    document.getElementById("fDiv").style.display = "none";
    document.getElementById("pDiv").style.display = "none";
    document.getElementById("cDiv").style.display = "flex";
    document.getElementById("description").innerHTML="組合是指從n個不同元素中取出k個元素 且不考慮排列順序的方法數<br>C(n,k)=n!÷((n-k)!×n!)<br>在程式中使用C則是先用for迴圈算出n及(n-k)及k的階層再去進行除法";
});