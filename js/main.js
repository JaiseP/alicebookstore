"use strict";


const counterQtyElement = document.getElementsByClassName('counter-qty')[0];
const counterPlusElement = document.getElementsByClassName('counter-plus')[0];
const counterMinusElement = document.getElementsByClassName('counter-minus')[0];
const menuBarsElement = document.getElementsByClassName('fa-bars')[0];
const drawerMenuElement = document.getElementsByClassName('drawer-menu')[0];
const closeElement = document.getElementsByClassName('fa-xmark')[0];
const acc = document.getElementsByClassName("sub-menu");
const modalElements = document.querySelectorAll("[data-toggle='modal']");


$(document).ready(function(){

    // Login Register Toggle Function
    $("#register-form").hide();
    $("#login-title").click(function(){
        if(!$('#login-form').is(":visible")) {
            $('#login-form').show();
            $('#login-title').addClass("active");
            $('#register-form').hide();
            $('#register-title').removeClass("active");
        }
    });
    $("#register-title").click(function(){
        if(!$('#register-form').is(":visible")) {
            $('#login-form').hide();
            $('#login-title').removeClass("active");
            $('#register-form').show();
            $('#register-title').addClass("active");
        }
    });

    $('#search-view-open').click(() => {
        $('.search-mobile').show();
    })

    $('#search-view-back').click(() => {
        $('.search-mobile').hide();
    })

  });

//   $(".counter-plus").click((e) => {
//       console.log("clicked +");
//   })

// if(counterPlusElement != null && counterMinusElement != null) {
//     console.log(counterMinusElement);
//     console.log(counterPlusElement);
//     counterPlusElement.addEventListener('click', (event) => {
//         event.preventDefault();
//         console.log("click +");
//         let counterValue = parseInt(counterQtyElement.innerHTML);
//         counterQtyElement.innerHTML = counterValue + 1;
//     });
//     counterMinusElement.addEventListener('click', (e) => {
//         e.preventDefault();
//         let counterValue = parseInt(counterQtyElement.innerHTML);
//         if(counterValue > 1) {
//             counterQtyElement.innerHTML = counterValue - 1;
//         }
//     });
// }

// Code for opening and closing drawer navigation
if(menuBarsElement && closeElement) {
    menuBarsElement.addEventListener('click', () => {
        drawerMenuElement.classList.add('open');
    });
    closeElement.addEventListener('click', () => {
        drawerMenuElement.classList.remove('open');
    })
}


var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    // this.classList.toggle("link-active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}


for (let i of modalElements) {
    i.addEventListener('click', () => {
        const modalElement = document.querySelector(i.getAttribute('data-target'));
        const closeElement = modalElement.querySelector('.close');
        modalElement.style.display = 'block';

        // Close modal when user clicks on close icon
        closeElement.addEventListener('click', () => {
            modalElement.style.display = 'none';
        });
        
        // Close Modal when user click anywhere else in the screen.
        window.onclick = function(event) {
            if (event.target == modalElement) {
                modalElement.style.display = "none";
            }
          }

    })
}




 

    // Render Youtube Video
    // This code loads the IFrame Player API code asynchronously.
    // Code credits: https://stackoverflow.com/questions/3405242/how-can-i-autoplay-a-video-using-the-new-embed-code-style-for-youtube
    // Written by: Jules (https://stackoverflow.com/users/1055877/jules)
    
     var tag = document.createElement('script');

     tag.src = "https://www.youtube.com/iframe_api";
     var firstScriptTag = document.getElementsByTagName('script')[0];
     firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

     // This function creates an <iframe> (and YouTube player)
     // after the API code downloads.
     var player;
     function onYouTubeIframeAPIReady() {
         player = new YT.Player('player', {
         width: '100%',
         videoId: 'SKVcQnyEIT8',
         playerVars: { 'autoplay': 1, 'playlist': 'SKVcQnyEIT8', 'playsinline': 1, 'loop': 1 },
         events: {
             'onReady': onPlayerReady
         }
         });
     }

     // The API will call this function when the video player is ready.
     function onPlayerReady(event) {
         event.target.mute();
         event.target.playVideo();
     }

     

    