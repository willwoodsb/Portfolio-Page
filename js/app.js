//-----------------------------
// Initializing variables 
//-----------------------------

const $hamburger = $('.hamburger-container div');
const $popout = $('.popout-menu');
const $main = $('.main');
let popoutState = false;
let mousePos = [0, 0];
let hamShow = false;
let scrollPos = 0;

//----------------------
//On page load
//----------------------

//hide non JS elements
$('.no-JS').hide();

$('#scroll-down p, #scroll-down span').hide();

//make hamburger visible 
$('.hamburger-container').css('display', 'inline');

//on load animations for main header section

$(document).ready(function() {
    if (accessed == "n") {
        //header animations
        setTimeout(function() {
            $(function() {
                $('#name').selfw({
                    text: 'My Name is Will Woods Ballard',
                    time: 110,
                })
            });

            setTimeout(function() {
                $(function() {
                    $('#web-dev').selfw({
                        text: 'I\'m a Web Developer',
                        time: 110,
                    })
                })
            }, 3500);

            setTimeout(function() {
                $('#scroll-down p, #scroll-down span').fadeIn(100);
            }, 5500);
        }, 1500);
    } else {
        $('.no-JS').fadeIn(500);
        $('#scroll-down p, #scroll-down span').fadeIn(500);
    }
    
    setTimeout(function() {
        $('.submit-message').slideDown(200);
    }, 500);

    setTimeout(function() {
        $('.submit-message').slideUp(200);
    }, 8000);
    
});





//---------------------------------------------
//Form Validation
//---------------------------------------------

const input = $('input:not([type=submit]), textarea');
const email = $('input[type = email]');

input.on('invalid', function (event) {
  if (event.target.validity.valueMissing) {
    event.target.setCustomValidity(' ');
    $(`#${event.target.id} + .error`).show();
  }
});

function validateEmail(userInput) {
    let emailRegex = /(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/;
    if (!emailRegex.test(userInput.value)) {
        $(`#email + .error`).show();
        return false;
    } else {
        return true;
    };
}
    
input.on('change', function (event) {
    $(`#${event.target.id} + .error`).hide();
    valid = true;
});

function submitForm(userInput){
    if(validateEmail(userInput.email) && !!userInput.fname.value && !!userInput.lname.value && !!userInput.message.value) {
        return true;
        
    } else {
        return false;
    }
}





// --------------------------------------------
//Event Listeners
//---------------------------------------------

//scroll button animations
$('.scroll, .internal-links').on('click', function(event) {
    if ($(event.target).hasClass('internal-links')) {
        popoutState = true;
    } 
    let target = $(this.getAttribute('href'));
    if (target.length) {
        event.preventDefault();
        $('html, body').stop().animate({
            scrollTop: target.offset().top
        }, 700);
    }
});


//scroll event listener
window.addEventListener("scroll", function() {
    // Call the makeSticky function  
    makeSticky(document.querySelector('.hamburger-container')); 
});

//mouse position event listener 
window.addEventListener('mousemove', (e) => {
    mousePos[0] = window.event.clientX;
    mousePos[1] = window.event.clientY;
});


function addTransition(object, milliseconds = 500) {
    seconds = milliseconds / 1000;
    seconds = seconds.toString();
    seconds = seconds.concat('s');
    $(object).css('transition', seconds);
    setTimeout(function() {
        $(object).css('transition', '');
    }, milliseconds)
}

$('.hamburger-container div, .internal-links').on('click', function() {
    if (!popoutState) {
        scrollPos = $(document).scrollTop();
        $('.main').css('top', -scrollPos).addClass('noscroll');
        addTransition($('.body__item'));
        $('.body__item').addClass('slide-right');
        $('.hamburger').removeClass('hamburger').addClass('cross').hide();
        setTimeout(function() {
            $('.cross').show();
        }, 500);
        popoutState = true;
    } else {
        addTransition($('.body__item'));
        $('.body__item').removeClass('slide-right');
        $('.cross').removeClass('cross').addClass('hamburger').hide();
        setTimeout(function() {
            $('.hamburger').show();
            $('.main').css('top', '').removeClass('noscroll');
            window.scrollTo(0, scrollPos);
        }, 500);
        popoutState = false;
    }
});




//---------------------------
//functions
//---------------------------

//make an element stick when scrolling
function makeSticky(element) {
    // Get the position of the element 
    const position = element.getBoundingClientRect();

    // Check if the element is in the viewport  
    const isInViewport = (position.top > -100 && $(element).css('position') !== 'fixed');

    if (!isInViewport && !hamShow ) {  
        // The element is not in the viewport, so add the "sticky" class to make it sticky
        
        $(element).addClass("sticky").addClass("sticky-reveal"); 
        hamShow = true;
        let i = 0;
        //loop that loops for approx 2 seconds if not hovering on popup and infinitely if hovering and then when finished removes popup 
        function hoverLoop() {
            setTimeout(() => {
                if (isHovering(element) && i <= 2000) {
                    i = 0;
                    hoverLoop();
                } else if (!isHovering || i <= 2000) {
                    i += 250;
                    hoverLoop();
                } else {
                    element.classList.remove("sticky-reveal");
                    if (window.pageYOffset > 100) {
                        setTimeout(function() {
                            element.classList.remove("sticky"); 
                            hamShow = false;
                        }, 500);
                    } else {
                        element.classList.remove("sticky"); 
                        hamShow = false;
                    }
                }
            }, 250);
        }
        
        hoverLoop();

    } else if (isInViewport && hamShow ) {
        // The element is in the viewport, so remove the "sticky" class
        element.classList.remove("sticky"); 
        hamShow = false; 
    } 
}
 
//test id the user is hovering over an element
function isHovering(element) {
    if (popoutState) {
        return true;
    }

    // check if user is on touch screen device as cannot hover on touch screen
    if(!!navigator.userAgent.match(/iphone|android|blackberry/ig)) {
        return false;
    }

    // Get the element's position  
    const position = element.getBoundingClientRect();

   // Get the mouse position 
    const mouseX = mousePos[0];  
    const mouseY = mousePos[1];
    // Check if the mouse position is within the element's position
    if (mouseX >= position.left && mouseX <= position.right && mouseY >= position.top && mouseY <= position.bottom) { 
        return true;
    } else { 
        return false;  

    }  

}

$('.submit-message .icon').on('click', function(e) {
    $parent = $(e.target).parent();
    $parent.slideUp(100);
});





