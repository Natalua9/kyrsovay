const menuButtonElem=document.querySelector(".menu_button")
const menuListElem=document.querySelector(".menu-list")
menuButtonElem.addEventListener("click",()=>{
    menuListElem.classList.toggle("open")
})