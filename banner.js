var bannerID = 1
var maxID = 3
var nextID = 0
function change(time){
    if (time!=nextID){
        oldBanner = document.getElementById("banner"+nextID.toString())
        newBanner = document.getElementById("banner"+time.toString())
        oldDot = document.getElementById("dot"+nextID.toString())
        newDot = document.getElementById("dot"+time.toString())
        oldDot.classList.remove("fa-circle-dot")
        oldDot.classList.add("fa-circle")
        newDot.classList.add("fa-circle-dot")
        newDot.classList.remove("fa-circle")
        newBanner.style.zIndex="1";
        oldBanner.style.zIndex="0";
        setTimeout(() => {
            oldBanner.style.left="100vw";
        }, 300);
        newBanner.style.left="0vw";
        nextID = time
    }
}
const banner = setInterval(() => {
    nextID = bannerID + 1
    if (nextID > 3){
        nextID = 1
    }
    oldBanner = document.getElementById("banner"+bannerID.toString())
    newBanner = document.getElementById("banner"+nextID.toString())
    oldDot = document.getElementById("dot"+bannerID.toString())
    newDot = document.getElementById("dot"+nextID.toString())
    oldDot.classList.remove("fa-circle-dot")
    oldDot.classList.add("fa-circle")
    newDot.classList.add("fa-circle-dot")
    newDot.classList.remove("fa-circle")
    newBanner.style.zIndex="1";
    oldBanner.style.zIndex="0";
    setTimeout(() => {
        oldBanner.style.left="100vw";
    }, 300);
    newBanner.style.left="0vw";
    bannerID = nextID
}, 3000)
dot1 = document.getElementById("dot1")
dot2 = document.getElementById("dot2")
dot3 = document.getElementById("dot3")
dot1.addEventListener('mouseenter', function() {
    dot1.classList.add("fa-circle-dot")
    dot1.classList.remove("fa-circle")
});
dot1.addEventListener('mouseleave', function() {
    if (bannerID != 1){
        dot1.classList.remove("fa-circle-dot")
        dot1.classList.add("fa-circle")
    }
});
dot1.addEventListener('click', function() {
    bannerID=1
    change(bannerID)
    try {
        clearInterval(banner);
    } catch (error) {}
});
dot2.addEventListener('mouseenter', function() {
    dot2.classList.add("fa-circle-dot")
    dot2.classList.remove("fa-circle")
});
dot2.addEventListener('mouseleave', function() {
    if (bannerID != 2){
        dot2.classList.remove("fa-circle-dot")
        dot2.classList.add("fa-circle")
    }
});
dot2.addEventListener('click', function() {
    bannerID=2
    change(bannerID)
    try {
        clearInterval(banner);
    } catch (error) {}
});
dot3.addEventListener('mouseenter', function() {
    dot3.classList.add("fa-circle-dot")
    dot3.classList.remove("fa-circle")
});
dot3.addEventListener('mouseleave', function() {
    if (bannerID != 3){
        dot3.classList.remove("fa-circle-dot")
        dot3.classList.add("fa-circle")
    }
});
dot3.addEventListener('click', function() {
    bannerID=3
    change(bannerID)
    try {
        clearInterval(banner);
    } catch (error) {}
});