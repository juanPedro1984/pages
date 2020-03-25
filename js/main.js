 "use strict"

document.addEventListener('DOMContentLoaded' , hideHeader);

function hideHeader(){
  let header = document.getElementById('headerId');
  let prevScrollpos = window.pageYOffset;
  let navShow = document.getElementById('navbarNav');

    window.onscroll = function (){
    let currentScrollPos = window.pageYOffset;
      if(prevScrollpos < currentScrollPos){
        header.style.top = "-100px";
        navShow.className = "navbar-collapse collapse";

      }else{
          header.style.top = "0";
        }
        prevScrollpos = currentScrollPos;
      }

      navShow.addEventListener('click', function(){
        navShow.className = "navbar-collapse collapse";
      })
    }

    // document.getElementById('menuBtn').addEventListener('click', openNav);
    // document.getElementById('closebtn').addEventListener('click',closeNav);

    /* Set the width of the side navigation to 250px */
    // function openNav() {
    //   document.getElementById("headerId").style.width = "250px";
    // }

    /* Set the width of the side navigation to 0 */
    // function closeNav() {
    //   document.getElementById("headerId").style.width = "0";
    // }
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
