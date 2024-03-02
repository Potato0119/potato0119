const str = "<p>嗨 很高興認識你<br>我叫馬鈴薯 英文是Potato0119<br>你可以叫我馬鈴薯 或 破鐵頭 或 Potato<br>如果有靜態網站設計的需求可以找我<br>從編寫程式到網站架設幫您一條龍服務</p>"
const strFinal = "嗨 很高興認識你<br>我叫馬鈴薯 英文是Potato0119<br>你可以叫我馬鈴薯 或 破鐵頭 或 Potato<br>如果有靜態網站設計的需求可以找我<br>從編寫程式到網站架設幫您一條龍服務"

function start(){
  setTimeout(() => {
    const typing = document.querySelector(".main p")
    i=1
    var loop = setInterval(() => {
      typing.textContent = str.slice(0,i)
      i++
      if (i == str.length+2){
        clearInterval(loop)
        setTimeout(() => {typing.innerHTML = strFinal}, 500)
        setTimeout(() => {typing.style = "text-shadow: 0 0 1vw #00c8ff;"}, 1000)
      }
    }, 50);
  }, 1000)
}

function discord(){
  Swal.fire({
    title: '我的Discord',
    text: '@potato_tw',
    icon: "success",
    confirmButtonText: '酷',
  });
}

const sblock1  = document.getElementById('sblock1');
const sub1 = document.getElementById('sub1');
sblock1.addEventListener('mouseenter', function() {
    sblock1.style.height="31vw";
    sub1.style.opacity="1"
});
sblock1.addEventListener('mouseleave', function() {
    sblock1.style.height="calc((14vw * 600 / 500) + 4vw)";
    sub1.style.opacity="0"
});

const sblock2  = document.getElementById('sblock2');
const sub2 = document.getElementById('sub2');
sblock2.addEventListener('mouseenter', function() {
    sblock2.style.height="28vw";
    sub2.style.opacity="1"
});
sblock2.addEventListener('mouseleave', function() {
    sblock2.style.height="calc((14vw * 600 / 500) + 4vw)";
    sub2.style.opacity="0"
});

const sblock3  = document.getElementById('sblock3');
const sub3 = document.getElementById('sub3');
sblock3.addEventListener('mouseenter', function() {
    sblock3.style.height="28vw";
    sub3.style.opacity="1"
});
sblock3.addEventListener('mouseleave', function() {
    sblock3.style.height="calc((14vw * 600 / 500) + 4vw)";
    sub3.style.opacity="0"
});

const sblock4 = document.getElementById('sblock4');
const sub4 = document.getElementById('sub4');
sblock4.addEventListener('mouseenter', function() {
    sblock4.style.height="24.5vw";
    sub4.style.opacity="1"
});
sblock4.addEventListener('mouseleave', function() {
    sblock4.style.height="calc((14vw * 600 / 500) + 4vw)";
    sub4.style.opacity="0"
});