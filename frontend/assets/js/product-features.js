jQuery(document).ready(function ($) {
    
});

let imageZoomEle=document.getElementById("imageZoomEle");
imageZoomEle.addEventListener("mousemove",(e)=>{
    imageZoomEle.style.setProperty('--opacity','1');
    let pointer={
        x : (e.offsetX * 100) / imageZoomEle.offsetWidth,
        y : (e.offsetY * 100) / imageZoomEle.offsetHeight
    }
    imageZoomEle.style.setProperty('--zoom-x',pointer.x + '%');
    imageZoomEle.style.setProperty('--zoom-y',pointer.y + '%');
    imageZoomEle.addEventListener("mouseout",()=>{
        imageZoomEle.style.setProperty('--opacity','0');
    })
})

let gallery_images=document.querySelectorAll(".gallery-image img");
gallery_images.forEach((e)=>{
    e.addEventListener("click",(j)=>{
        let targetImgEle=document.querySelector("#imageZoomEle")
        let img_path=e.getAttribute("src");
        imageZoomEle.style.setProperty('--url',"url("+img_path+")");
        document.querySelector("#imageZoomEle img").setAttribute("src",img_path);
    })
})