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

function getTime(){
  const d = new Date();
  const year = d.getFullYear();
  const month = String(d.getMonth() + 1).padStart(2, '0');
  const date = String(d.getDate()).padStart(2, '0');
  const hh = String(d.getHours()).padStart(2, '0');
  const mm = String(d.getMinutes()).padStart(2, '0');
  const ss = String(d.getSeconds()).padStart(2, '0');
  const week = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
  const day = week[d.getDay()];
  return `${year}/${month}/${date} ${hh}:${mm}:${ss} ${day}.`;
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
      document.querySelector(".title1").style = "color: #fdcf6dff;text-shadow: 0 0 1vw #f3b303ff;"
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
    setTimeout(() => {
      const sub2 = document.querySelector(".sub2")
      sub2.style = "opacity: 1;"
    }, 4000)
    setInterval(() => {
      const sub2 = document.querySelector(".sub2")
      sub2.innerHTML = getTime()
    }, 50);
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

// Background Music System 
const bmsList = [
  {
    id: 1,
    name: "Sweet Life (Luxury Chill) - AlexGrohl",
    path: "bms/1.mp3"
  },
  {
    id: 2,
    name: "Hype | Drill Music - kontraa",
    path: "bms/2.mp3"
  },
  {
    id: 3,
    name: "Future Design - penguinmusic",
    path: "bms/3.mp3"
  }
];

const bms = document.getElementById('bms-play');
const bmsText = document.querySelector('#bms-text span');
const nextBtn = document.getElementById('bms-forward');
const prevBtn = document.getElementById('bms-backward');
const audio = document.getElementById("player");
const volume = document.getElementById("bms-volume-scale");
let index = 0;

bms.addEventListener('click', () => {
  if (bms.classList.contains('fa-pause')) {
    bms.classList.remove('fa-pause');
    bms.classList.add('fa-play');
    audio.pause();
  } else {
    bms.classList.remove('fa-play');
    bms.classList.add('fa-pause');
    audio.play();
  }
});
nextBtn.addEventListener('click', () => {
  index = (index + 1) % bmsList.length;
  player.src = bmsList[index].path;
  bmsText.textContent = bmsList[index].name;
  player.play();
  bms.classList.replace('fa-play', 'fa-pause');
});
prevBtn.addEventListener('click', () => {
  index = (index - 1 + bmsList.length) % bmsList.length;
  player.src = bmsList[index].path;
  bmsText.textContent = bmsList[index].name;
  player.play();
  bms.classList.replace('fa-play', 'fa-pause');
});
audio.addEventListener('ended', () => {
  index = (index + 1) % bmsList.length;
  audio.src = bmsList[index].path;
  bmsText.textContent = bmsList[index].name;
  audio.play();
});

audio.volume = 1;
volume.addEventListener("input", () => {
  console.log(volume.value)
  audio.volume = volume.value / 1000;
});
function enableAutoPlay() {
  audio.play()
    .then(() => console.log("已自動播放"))
    .catch(err => console.log("播放被阻擋:", err));
}
