console.log("連接menu.js成功")
function closeMenu(){
    menu.style.opacity = 0;
    setTimeout(() => {
        exitMenu.style.opacity = 0;
    }, 500);
    setTimeout(() => {
        exitMenu.style.display = "none";
        menu.style.display = "none";
    }, 1000);
    setTimeout(() => {
        list.classList.remove('fa-xmark');
        list.classList.add('fa-list');
    }, 1100);
}

var list = document.getElementById("list")
var menu = document.getElementById("menu")
var exitMenu = document.getElementById("exit-menu")

list.addEventListener('click', function() {
    if (list.classList.contains("fa-list")){
        list.classList.remove('fa-list');
        list.classList.add('fa-xmark');
        exitMenu.style.display = "block";
        menu.style.display = "block";
        setTimeout(() => {
            exitMenu.style.opacity = 1;
        }, 200);
        setTimeout(() => {
            menu.style.opacity = 1;
        }, 700);
    }else if (list.classList.contains("fa-xmark")){
        closeMenu()
    }
});

exitMenu.addEventListener('click', function() {
    closeMenu()
});