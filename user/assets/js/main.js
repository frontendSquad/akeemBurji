/*----- Video Play Button -----*/
let videoBoxes = Array.from(document.querySelectorAll('.videoBox'));
videoBoxes.forEach(videoBox => {
    let playButton = videoBox.querySelector('.playButton');
    let myVideo = videoBox.querySelector('.video');
    playButton.addEventListener('click', function() {
        playButton.classList.add('d-none');
         myVideo.setAttribute("controls","controls")
        myVideo.play();
    });
});




document.addEventListener("DOMContentLoaded", function(){
        

    /////// Prevent closing from click inside dropdown
    document.querySelectorAll('.dropdown-menu').forEach(function(element){
        element.addEventListener('click', function (e) {
          e.stopPropagation();
        });
    })



    // make it as accordion for smaller screens
    if (window.innerWidth < 992) {

        // close all inner dropdowns when parent is closed
        document.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown){
            everydropdown.addEventListener('hidden.bs.dropdown', function () {
                // after dropdown is hidden, then find all submenus
                  this.querySelectorAll('.submenu').forEach(function(everysubmenu){
                      // hide every submenu as well
                      everysubmenu.style.display = 'none';
                  });
            })
        });
        
        document.querySelectorAll('.dropdown-menu a').forEach(function(element){
            element.addEventListener('click', function (e) {
    
                  let nextEl = this.nextElementSibling;
                  if(nextEl && nextEl.classList.contains('submenu')) {	
                      // prevent opening link if link needs to open dropdown
                      e.preventDefault();
                      console.log(nextEl);
                      if(nextEl.style.display == 'block'){
                          nextEl.style.display = 'none';
                      } else {
                          nextEl.style.display = 'block';
                      }

                  }
            });
        })
    }
    // end if innerWidth

}); 


/*----- Carousels -----*/

$('.banner-slide').owlCarousel({
    loop: true,
    margin: 10,
    responsiveClass: true,
    nav: false,
    autoplay: true,
    autoplayTimeout:3000,
    responsive: {
        0: {
            items: 1,
        },
    }
});

$('.pray-slide').owlCarousel({
    loop: true,
    margin: 20,
    responsiveClass: true,
    nav: true,
    dots: false,
    navText: [
        '<i class="fas fa-long-arrow-alt-left prayArrow"></i>',
        '<i class="fas fa-long-arrow-alt-right prayArrow"></i>',
    ],
    autoplay: true,
    autoplayTimeout:3000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 2,
        },
        767: {
            items: 3,
        },
        1200: {
            items: 4,
        }
    }
});

$('.seeWork-slide').owlCarousel({
    loop: true,
    margin: 20,
    responsiveClass: true,
    nav: true,
    dots: false,
    navText: [
        '<i class="fas fa-long-arrow-alt-left"></i>',
        '<i class="fas fa-long-arrow-alt-right"></i>',
    ],
    autoplay: true,
    autoplayTimeout:3000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1,
        },
        575: {
            items: 2,
        },
        991: {
            items: 3,
        },
    }
});