// @codekit-prepend "plugins.js";

(function($) {
  $(document).ready(function() {
      $('a[href*=#]:not([href=#])').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
              || location.hostname == this.hostname) {

              var target = $(this.hash);
              target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
              if (target.length) {
                  $('html,body').animate({
                      scrollTop: target.offset().top
                  }, 1000);
                  return false;
              }
          }
      });

      $('.waypoint').each(function(){
          var self = $(this);

          $(this).waypoint({
              handler: function(){
                  self.addClass('active');
              },
              offset: '50%'
          });
      });

      $('.expander').click(function () {
          if ($(window).width() < 767) {
              $($(this).data("target")).slideToggle();
              $(this).toggleClass('expanded');
          }
      });

      $('.sidebar-expander').click(function () {
          $($(this).data("target")).slideToggle();
          $(this).toggleClass('sidebar-expanded');
      });

      var resizeStream = Rx.Observable.fromEvent($(window), 'resize')
          .debounce(500);

      var resizeSub = resizeStream.subscribe(
          function (x) {
              if ($(window).width() > 767) {
                  $('.expander').each(function( index ) {
                      $($(this).data("target")).show();
                      $(this).removeClass('expanded');
                  });
              }
          },
          function (err) {
              console.log('Error: ' + err);
          },
          function () {
          }
      );

  });
})(jQuery);
