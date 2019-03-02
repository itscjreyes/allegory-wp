const app = {}

app.init = function(){
  app.navigation();
  app.smoothScrolling();
  app.banner();
  app.scrollReveal();
}

app.navigation = function(){
  $('.mobileTrigger').click(function(){
    $(this).toggleClass('active');
    $('header').toggleClass('menuActive');
  });
}

app.banner = function(){
  $(window).on('resize', function(){
    var bannerHeight = $('.banner').height() + 200;
    $('.banner > img').css('height', bannerHeight + 'px');
  }).resize();
}

app.smoothScrolling = function(){
  // Select all links with hashes
  $('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('.mobileTrigger').removeClass('active');
        $('header').removeClass('menuActive');
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });
}

app.scrollReveal = function(){
  window.sr = ScrollReveal();
  sr.reveal('.bannerPhone', {origin: 'right', duration: 800, distance: '80px', easing: 'ease'});
  
  $('.faqSingle button').click(function(){
      if ($(this).parent().hasClass('active')){
          $('.faqSingle').removeClass('active');
          $('.faqBlock').slideUp();
      } else {
          $('.faqSingle').removeClass('active');
          $('.faqBlock').slideUp();
          $(this).parent().addClass('active');
          $(this).parent().find('.faqBlock').slideDown();
      }
  });
}

$(document).ready(function(){
  app.init();
});