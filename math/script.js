var formatter = new Intl.NumberFormat('en-US');
// f = factorial
document.getElementById("f1").addEventListener("input", function() {
    var user = parseInt(document.getElementById("f1").value);
    var fResult = 1
    for(var i=0;i<user;i++) {
        fResult = fResult * (i+1)
    }
    var fResult = (formatter.format(fResult)).toString().replace(/,/g, "");
    document.getElementById("fResult").value = fResult;
    document.getElementById("fResult").style.width = (fResult.length/1.8+1/1.8)+"em";
});
document.getElementById("p1").addEventListener("input", function() {
    document.getElementById("p2").addEventListener("input", function() {
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
        document.getElementById("pResult").value = pResult;
        document.getElementById("pResult").style.width = (pResult.length/1.8+1/1.8)+"em";
    });
});
document.getElementById("c1").addEventListener("input", function() {
    document.getElementById("c2").addEventListener("input", function() {
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
        document.getElementById("cResult").value = cResult;
        document.getElementById("cResult").style.width = (cResult.length/1.8+1/1.8)+"em";
    });
});

document.getElementById("f").style.backgroundColor="#69d2ff"
document.getElementById("fDiv").style.display = "flex";
document.getElementById("pDiv").style.display = "none";
document.getElementById("cDiv").style.display = "none";

document.getElementById("f").addEventListener("click", function() {
    document.getElementById("f").style.backgroundColor="#69d2ff"
    document.getElementById("p").style.backgroundColor=""
    document.getElementById("c").style.backgroundColor=""
    document.getElementById("fDiv").style.display = "flex";
    document.getElementById("pDiv").style.display = "none";
    document.getElementById("cDiv").style.display = "none";
});
document.getElementById("p").addEventListener("click", function() {
    document.getElementById("f").style.backgroundColor=""
    document.getElementById("p").style.backgroundColor="#69d2ff"
    document.getElementById("c").style.backgroundColor=""
    document.getElementById("fDiv").style.display = "none";
    document.getElementById("pDiv").style.display = "flex";
    document.getElementById("cDiv").style.display = "none";
});
document.getElementById("c").addEventListener("click", function() {
    document.getElementById("f").style.backgroundColor=""
    document.getElementById("p").style.backgroundColor=""
    document.getElementById("c").style.backgroundColor="#69d2ff"
    document.getElementById("fDiv").style.display = "none";
    document.getElementById("pDiv").style.display = "none";
    document.getElementById("cDiv").style.display = "flex";
});