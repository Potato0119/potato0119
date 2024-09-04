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
    document.getElementById('banner2').src = "./image/banner2.png";
    document.getElementById('banner3').src = "./image/banner3.png";
    document.getElementById('banner4').src = "./image/banner4.png";
    document.getElementById('banner5').src = "./image/banner5.png";
    document.getElementById('banner6').src = "./image/banner6.png";
    document.getElementById('banner7').src = "./image/banner7.png";
    // 執行 banner.js
    setTimeout(() => {
    var bannerScript = document.createElement('script');
    bannerScript.src = './banner.js';
    document.body.appendChild(bannerScript);
  }, 3000)
    // 結束
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
function onload(){
  document.getElementById("loading").style.opacity = "0";
  document.getElementById("loadingimg").style.opacity = "0";
  document.getElementById("loadingdiv").style.opacity = "0";
  document.getElementById("loadingp").style.opacity = "0";
  setTimeout(() => {
    document.getElementById("loading").style.display = "none";
    start()
  }, 500)
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
function partner(){
  const shopPage = document.getElementById('partner');
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