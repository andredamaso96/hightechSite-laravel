window.onscroll = function() {myFunction()};

var header = document.getElementById("ftco-navbar");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}

$('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
  if (!$(this).next().hasClass('show')) {
    $(this).parents('.dropdown-menu').first().find('.show').removeClass('show');
  }
  var $subMenu = $(this).next('.dropdown-menu');
  $subMenu.toggleClass('show');


  $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
    $('.dropdown-submenu .show').removeClass('show');
  });


  return false;
});


$(document).on('click', '.dropdown-menu', function (e) {
  e.stopPropagation();
});

// make it as accordion for smaller screens
if ($(window).width() < 992) {
  

  $('.dropdown-menu a').click(function(e){
    //e.preventDefault();
      if($(this).next('.submenu').length){
        $(this).next('.submenu').toggle();
      }
      $('.dropdown').on('hide.bs.dropdown', function () {
     $(this).find('.submenu').hide();
  })
  });


  $('.dropdown-menu > li').click(function(e){

     $(this).style.display="block";

  });

}


// (function($) {
//   var defaults={
//       sm : 540,
//       md : 720,
//       lg : 960,
//       xl : 1140,
//       navbar_expand: 'lg',
//       animation: true,
//       animateIn: 'fadeIn',
//   };
//   $.fn.bootnavbar = function(options) {

//       var screen_width = $(document).width();
//       settings = $.extend(defaults, options);

//       if(screen_width >= settings.lg){
//           $(this).find('.dropdown').hover(function() {
//               $(this).addClass('show');
//               $(this).find('.dropdown-menu').first().addClass('show');
//               if(settings.animation){
//                   $(this).find('.dropdown-menu').first().addClass('animated ' + settings.animateIn);
//               }
//           }, function() {
//               $(this).removeClass('show');
//               $(this).find('.dropdown-menu').first().removeClass('show');
//           });
//       }

//       $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
//         if (!$(this).next().hasClass('show')) {
//           $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
//         }
//         var $subMenu = $(this).next(".dropdown-menu");
//         $subMenu.toggleClass('show');

//         $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
//           $('.dropdown-submenu .show').removeClass("show");
//         });

//         return false;
//       });
//   };
// })(jQuery);