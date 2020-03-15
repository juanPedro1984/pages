 "use strict"

document.addEventListener('DOMContentLoaded' , hideHeader);

function hideHeader(){
  let header = document.getElementById('headerId');
  let btnMenu = document.getElementById('menuBtn');
  let prevScrollpos = window.pageYOffset;

    if(screen.width>800){
    window.onscroll = function (){

    let currentScrollPos = window.pageYOffset;
    header.style.display = "flex";
    btnC.style.display = "none";
      if(prevScrollpos < currentScrollPos){
        header.style.top = "-100px";
      }else{
        if(document.documentElement.scrollTop < 100){
          header.style.top = "0";
          header.style.backgroundColor ="inherit";
          header.style.opacity = "inherit";
          }else{
            header.style.top = "0";
            header.style.backgroundColor ="grey";
            header.style.opacity = "80%";
          }
        }
        prevScrollpos = currentScrollPos;
      }
    }
    }

    document.getElementById('menuBtn').addEventListener('click', openNav);
    document.getElementById('closebtn').addEventListener('click',closeNav);

    /* Set the width of the side navigation to 250px */
    function openNav() {
      document.getElementById("headerId").style.width = "250px";
    }

    /* Set the width of the side navigation to 0 */
    function closeNav() {
      document.getElementById("headerId").style.width = "0";
    }
//var prevScrollpos = window.pageYOffset;
// window.onscroll = function() {
// var currentScrollPos = window.pageYOffset;
//   if (prevScrollpos > currentScrollPos) {
//     document.getElementById("navbar").style.top = "0";
//   } else {
//     document.getElementById("navbar").style.top = "-50px";
//   }
//   prevScrollpos = currentScrollPos;
// }
