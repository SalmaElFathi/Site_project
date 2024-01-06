//container bar
let open=document.getElementById('open');
let close=document.getElementById('close');
let container_bar=document.querySelector('.container_bar');

close.onclick=function(){
    container_bar.classList.add("hide");
    this.classList.add("hide");
    open.classList.remove("hide");}

open.onclick=function(){
        container_bar.classList.remove("hide");
        this.classList.add("hide");
        close.classList.remove("hide");
}
window.addEventListener("scroll",function(){
if(scrollY>=90){container_bar.style.position='fixed';}
else {container_bar.style.position='relative';}})
//scroll
let scroll_btn=document.getElementById('scroll');
window.onscroll=function(){
   if(scrollY>=50) {scroll_btn.style.display='block';}
   else{scroll_btn.style.display='none';}
}
scroll_btn.onclick=function(){
   scroll({
       left:0,
       top:0,
       behavior:'smooth'
   })
}
//search
/*let search_img=document.getElementById("search_img")
search_img.onclick=function(){

}*/