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
          setTimeout(() => {sub.style = "color: #92f8ff;text-shadow: 0 0 1vw #034bf3;"}, 500)
        }
      }, 50);
    }, 1000)
  }else{
    setTimeout(() => {
      if (window.scrollY <= window.innerHeight){
          back()
      }
    }, 1)
  //   // 執行 banner.js
  //   setTimeout(() => {
  //   var bannerScript = document.createElement('script');
  //   bannerScript.src = './banner.js';
  //   document.body.appendChild(bannerScript);
  // }, 3000)
  //   // 結束
    setTimeout(() => {
      document.querySelector(".title1").style = "color: #b5faff;text-shadow: 0 0 1vw #039bf3;"
      document.querySelector(".title2").style = "color: #f45bfe;text-shadow: 0 0 1vw #d400ff;"
    }, 1000)
    setTimeout(() => {
      const sub = document.querySelector(".sub1")
      i=1
      var loop1 = setInterval(() => {
        sub.innerHTML = potato.slice(0,i)
        i++
        if (i == potato.length+2){
          clearInterval(loop1)
          setTimeout(() => {sub.style = "color: #b5faff;text-shadow: 0 0 1vw #034bf3;"}, 500)
        }
      }, 50);
    }, 2000)
  }
}
function onload(){
  setTimeout(() => {
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
function ts(){
  Swal.fire({
    title: '廢話機器人介紹',
    html: '廢話機器人是一個Discord機器人<br>它是一個使用大量使用者反饋的"廢話"<br>對於這些東西給予編號並儲存<br>等到有人使用指令"/ts"<br>再用隨機的方式去抽一個句廢話回覆給使用者',
    icon: "info",
    confirmButtonText: '太棒了，點我試試',
  }).then((result) => {
    if (result.isConfirmed) {
      window.open("https://reurl.cc/YV9M3X", "_blank");
    }
  });
}
function bet(){
  Swal.fire({
    title: '對賭機器人介紹',
    html: '對賭機器人是一個Discord機器人<br>使用你的本金去與他對賭<br>有二分之一的機率會得到1.85倍的錢 表示贏錢<br>但也有二分之一的機率會輸錢 表示輸錢<br>使用"/bet {下注金額}"就可以進行對賭',
    icon: "info",
    confirmButtonText: '太棒了，點我試試',
  }).then((result) => {
    if (result.isConfirmed) {
      window.open("https://reurl.cc/xLK6aE", "_blank");
    }
  });
}

// header
// function header() {
//   if (window.scrollY >= window.innerHeight - ((window.innerWidth * 730 / 2560) * 0.02 + window.innerWidth * 0.04)) {
//     document.getElementById('header').style="background: #aaa;";
//   }else{
//     document.getElementById('header').style="background: transparent;";
//   }
// }
// window.addEventListener('scroll', header);

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