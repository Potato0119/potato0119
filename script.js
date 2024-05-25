function isMobileDevice() {
  let mobileDevices = [
    "Android",
    "webOS",
    "iPhone",
    "iPad",
    "iPod",
    "BlackBerry",
    "Windows Phone",
  ];
  for (var i = 0; i < mobileDevices.length; i++) {
    if (navigator.userAgent.match(mobileDevices[i])) {
      return true;
    }
  }
  return false;
}

// 起始動畫
const str = "<p>嗨 很高興認識你<br>我叫馬鈴薯 英文是Potato0119<br>你可以叫我馬鈴薯 或 破鐵頭 或 Potato<br>如果有靜態網站設計的需求可以找我<br>從編寫程式到網站架設幫您一條龍服務</p>"
const strFinal = "嗨 很高興認識你<br>我叫馬鈴薯 英文是Potato0119<br>你可以叫我馬鈴薯 或 破鐵頭 或 Potato<br>如果有靜態網站設計的需求可以找我<br>從編寫程式到網站架設幫您一條龍服務"
const potato = "Potato0119's Web"
function start(){
  if (isMobileDevice()) {
    setTimeout(() => {
      if (window.scrollY <= window.innerHeight){
          back()
      }
    }, 1)
    setTimeout(() => {
      const sub = document.querySelector(".sub1")
      i=1
      var loop1 = setInterval(() => {
        sub.innerHTML = potato.slice(0,i)
        i++
        if (i == potato.length+2){
          clearInterval(loop1)
          setTimeout(() => {sub.style = "text-shadow: 0 0 1vw #eab532;"}, 500)
        }
      }, 50);
    }, 1000)
  }else{
    setTimeout(() => {
      if (window.scrollY <= window.innerHeight){
          back()
      }
    }, 1)
    setTimeout(() => {
      document.querySelector(".title1").style = "color: #eab532;"
      document.querySelector(".title2").style = "color: #9154d2;"
    }, 1000)
    setTimeout(() => {
      const sub = document.querySelector(".sub1")
      i=1
      var loop1 = setInterval(() => {
        sub.innerHTML = potato.slice(0,i)
        i++
        if (i == potato.length+2){
          clearInterval(loop1)
          setTimeout(() => {sub.style = "text-shadow: 0 0 1vw #eab532;"}, 500)
        }
      }, 50);
    }, 2000)
  }
}

// Discord
function discord(){
  Swal.fire({
    title: '我的Discord',
    html: "@potato_tw",
    icon: "info",
    confirmButtonText: '酷',
  });
}
function contact(){
  Swal.fire({
    title: '我的聯繫方式',
    html: "Instagram: @potato_0119_<br>Discord: @potato_tw",
    icon: "info",
    confirmButtonText: '酷',
  });
}

// Shop
const sblock1  = document.getElementById('sblock1');
const sub1 = document.getElementById('sub1');
const sblock2  = document.getElementById('sblock2');
const sub2 = document.getElementById('sub2');
const sblock3  = document.getElementById('sblock3');
const sub3 = document.getElementById('sub3');
const sblock4 = document.getElementById('sblock4');
const sub4 = document.getElementById('sub4');

if (isMobileDevice()) {
  sblock1.addEventListener('mouseenter', function() {
    sblock1.style.height="31vh";
    sub1.style.opacity="1"
  });
  sblock1.addEventListener('mouseleave', function() {
    sblock1.style.height="calc((14vh * 600 / 500) + 4vh)";
    sub1.style.opacity="0"
  });

  sblock2.addEventListener('mouseenter', function() {
    sblock2.style.height="28vh";
    sub2.style.opacity="1"
  });
  sblock2.addEventListener('mouseleave', function() {
    sblock2.style.height="calc((14vh * 600 / 500) + 4vh)";
    sub2.style.opacity="0"
  });

  sblock3.addEventListener('mouseenter', function() {
    sblock3.style.height="28vh";
    sub3.style.opacity="1"
  });
  sblock3.addEventListener('mouseleave', function() {
    sblock3.style.height="calc((14vh * 600 / 500) + 4vh)";
    sub3.style.opacity="0"
  });

  sblock4.addEventListener('mouseenter', function() {
    sblock4.style.height="24.5vh";
    sub4.style.opacity="1"
  });
  sblock4.addEventListener('mouseleave', function() {
    sblock4.style.height="calc((14vh * 600 / 500) + 4vh)";
    sub4.style.opacity="0"
  });
}else{
  sblock1.addEventListener('mouseenter', function() {
    sblock1.style.height="31vw";
    sub1.style.opacity="1"
  });
  sblock1.addEventListener('mouseleave', function() {
    sblock1.style.height="calc((14vw * 600 / 500) + 4vw)";
    sub1.style.opacity="0"
  });

  sblock2.addEventListener('mouseenter', function() {
    sblock2.style.height="28vw";
    sub2.style.opacity="1"
  });
  sblock2.addEventListener('mouseleave', function() {
    sblock2.style.height="calc((14vw * 600 / 500) + 4vw)";
    sub2.style.opacity="0"
  });

  sblock3.addEventListener('mouseenter', function() {
    sblock3.style.height="28vw";
    sub3.style.opacity="1"
  });
  sblock3.addEventListener('mouseleave', function() {
    sblock3.style.height="calc((14vw * 600 / 500) + 4vw)";
    sub3.style.opacity="0"
  });

  sblock4.addEventListener('mouseenter', function() {
    sblock4.style.height="24.5vw";
    sub4.style.opacity="1"
  });
  sblock4.addEventListener('mouseleave', function() {
    sblock4.style.height="calc((14vw * 600 / 500) + 4vw)";
    sub4.style.opacity="0"
  });
}

// header
function header() {
  if (window.scrollY >= window.innerHeight - ((window.innerWidth * 730 / 2560) * 0.02 + window.innerWidth * 0.04)) {
    document.getElementById('header').style="background: #aaa;";
  }else{
    document.getElementById('header').style="background: transparent;";
  }
}
window.addEventListener('scroll', header);

function home(){
  const homePage = document.querySelector('body');
  homePage.scrollIntoView({
    behavior: 'smooth'
  });
}
function about(){
  const aboutPage = document.getElementById('about');
  const rect = aboutPage.getBoundingClientRect();
  const offset = (window.innerWidth * 730 / 2560) * 0.015 + window.innerWidth * 0.04;
  const targetY = window.scrollY + rect.top - offset;
  window.scrollTo({
      top: targetY,
      behavior: 'smooth'
  });
}
function project(){
  const projectPage = document.getElementById('project');
  const rect = projectPage.getBoundingClientRect();
  const offset = (window.innerWidth * 730 / 2560) * 0.02 + window.innerWidth * 0.04;
  const targetY = window.scrollY + rect.top - offset;
  window.scrollTo({
      top: targetY,
      behavior: 'smooth'
  });
}
function shop(){
  const shopPage = document.getElementById('shop');
  const rect = shopPage.getBoundingClientRect();
  const offset = (window.innerWidth * 730 / 2560) * 0.02 + window.innerWidth * 0.04;
  const targetY = window.scrollY + rect.top - offset;
  window.scrollTo({
      top: targetY,
      behavior: 'smooth'
  });
}
function back(){
  window.scrollTo({
    top: 0
  });
}