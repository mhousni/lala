const menu = document.getElementById("menu");
const middle = document.getElementById("middle");
const right = document.getElementById("right");
let toggle = 0;
menu.addEventListener("click", (e) => {
    e.preventDefault();
    if(toggle == 0 ){
        right.style.display="flex";
        middle.style.display="flex";
        toggle = 1;
    }else{
        right.style.display="none";
        middle.style.display="none";
        toggle = 0;
    }
    
})