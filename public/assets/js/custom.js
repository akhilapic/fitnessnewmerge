//Header
$(function(){
  var lastScrollTop = 0, delta = 15;
  $(window).scroll(function(event){
     var st = $(this).scrollTop();
     
     if(Math.abs(lastScrollTop - st) <= delta)
        return;
if ((st > lastScrollTop) && (lastScrollTop>0)) {
     // downscroll code
    $("header").css("top","-100%");

 } else {
    // upscroll code
    $("header").css("top","0px");
 }
     lastScrollTop = st;
  });
});



/*select2*/

$(document).ready(function() {
    $("#interestedin, #bodyparts, #exercise, #trainingday, #fitnessgoal, #dietselect").select2({});

    $( ".select2" ).addClass( "form-control" );
});



$(document).ready(function(){
  $(".search-toggle-btn").click(function(){
    $(".search-block").slideToggle();
  });
});


$("#carousel").slick({
  autoplay: true,
  autoplaySpeed: 5000,
  dots: true,
  arrows: false,
  infinite: false,
  slidesToShow: 1,
  slidesToScroll: 1,

  customPaging : function(slider, i) {
    var thumb = $(slider.$slides[i]).data();
    return '<a class="dot">'+('0'+(i+1)).slice(-2)+'</a>'; // <-- new
  }

});


$(function(){
  var owl = $('.happycustomers-slider');
  owl.owlCarousel({
    autoplay: 2000,
    autoWidth: true,
    center: true,
    items:3,
    loop: true,
    margin: 44,
    nav: false,
    dots: false,
    onInitialized  : counter, //When the plugin has initialized.
    onTranslated : counter, //When the translation of the stage has finished.

    responsive: {
      0: {
        items: 1,
        center: false,
        margin: 15,
      },
      576: {
        items: 3,
      },
      768: {
        items: 3,
        margin: 20,
      },
    }
  });
  
  function counter(event) {
     var element   = event.target;         // DOM element, in this example .owl-carousel
      var items     = event.item.count;     // Number of items
      var item      = event.item.index + 1;     // Position of the current item
    
    // it loop is true then reset counter from 1
    if(item > items) {
      item = item - items
    }
    $('#counter').html(item+" / "+items)
  }
  });


  //Sign in header Js
  $(window).scroll(function(){
    var sticky = $('.signinheader'),
        scroll = $(window).scrollTop();
  
    if (scroll >= 10) sticky.addClass('fixed');
    else sticky.removeClass('fixed');
  });


  //Otp Verification Js
  $('.digit-group').find('input').each(function() {
    $(this).attr('maxlength', 1);
    $(this).on('keyup', function(e) {
      var parent = $($(this).parent());
      
      if(e.keyCode === 8 || e.keyCode === 37) {
        var prev = parent.find('input#' + $(this).data('previous'));
        
        if(prev.length) {
          $(prev).select();
        }
      } else if((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 65 && e.keyCode <= 90) || (e.keyCode >= 96 && e.keyCode <= 105) || e.keyCode === 39) {
        var next = parent.find('input#' + $(this).data('next'));
        
        if(next.length) {
          $(next).select();
        } else {
          if(parent.data('autosubmit')) {
            parent.submit();
          }
        }
      }
    });
  });

  $(document).ready(function(){ 
    $('.otp-inputs').find("input").each(function(ev)
    {
        if(!$(this).val()) { 
       $(this).attr("placeholder", "-");
    }
    });
  });



  $(function() {
    $(window).bind("resize", function() {
      var h =  $('.emailverification-bgimg').height();
      $('.verification-inner').css({ 'height': 'calc(100% - ' + h+ 'px)' });
    }).trigger("resize");
});


  


$(document).ready(function() {
    
  //alert('here');

$('#bodyweight a').click(function(){

   $('.paneltab1').hide();
   $('#bodyweight a.active').removeClass('active');
   $(this).addClass('active');
   
   var panel1 = $(this).attr('href');
   $(panel1).fadeIn(1000);
   
   return false;  // prevents link action
  
});  // end click 

   $('#bodyweight li:first a').click();




   $('#heighttab a').click(function(){

    $('.paneltab2').hide();
    $('#heighttab a.active').removeClass('active');
    $(this).addClass('active');
    
    var panel2 = $(this).attr('href');
    $(panel2).fadeIn(1000);
    
    return false;  // prevents link action
   
 });  // end click 
 
    $('#heighttab li:first a').click();
   
}); // end ready


//Fitness survey Js
$(window).scroll(function(){
  var sticky = $('.fitness-header'),
      scroll = $(window).scrollTop();

  if (scroll >= 10) sticky.addClass('fixed');
  else sticky.removeClass('fixed');
});

//Membership Page Workout session Slider Js
$(document).ready(function () {
    $('.top-workoutsession-slider').owlCarousel({
      loop: true,
      center: true,
      margin: 26,
      autoWidth: true,
      responsiveClass: true, 
      autoplayHoverPause: true,
      autoplay: false,
      slideSpeed: 5000,
      paginationSpeed: 5000,
      autoplayTimeout: 5000,
      nav:false,
      dots:false,
      //navText : ["<span class='icon-slide-arrow-left'></span>","<span class='icon-slide-arrow-right'></span>"],
      
      responsive: {
        0: {
          items: 1.5,
          margin: 10,
          autoWidth: false,
        },
        576: {
          items: 2,
          margin: 15,
          autoWidth: false,
        },
        768: {
          items: 3,
          margin: 20,
        },
        1000: {
          items: 5,
          margin: 26,
        }
      }
    
    }); 
  });


//Survey Result Page Js
$(".icon-bookmark").click(function(){
  $(this).toggleClass("active");
});

$(".filterbtn").click(function(){
  $(this).toggleClass("active");
  $(".filter-option-block").slideToggle();
});




//Payment Page Js
var $radioButtons = $('.payment-option-block input[type="radio"]');
$radioButtons.click(function() {
    $radioButtons.each(function() {
        $(this).parent().parent().toggleClass('active', this.checked);
    });
});


//////Accordian FAQ Page Js
$(document).ready(function(){
  // Add minus icon for collapse element which is open by default
  $(".accordian-collapse .collapse.show").each(function(){
    $(this).prev(".card-header").find(".icon").addClass("fii-acc-arrow-up").removeClass("fii-acc-arrow-down");
  });
  
  // Toggle plus minus icon on show hide of collapse element
  $(".accordian-collapse .collapse").on('show.bs.collapse', function(){
    $(this).prev(".card-header").find(".icon").removeClass("fii-acc-arrow-down").addClass("fii-acc-arrow-up");
  }).on('hide.bs.collapse', function(){
    $(this).prev(".card-header").find(".icon").removeClass("fii-acc-arrow-up").addClass("fii-acc-arrow-down");
  });
});









  // dashbaord menu 

  $(".dash_menu_btn").click(function(){
    $(".dash_menus_li").slideToggle();
  });

  //  filter box

  $(".filter_box").click(function(){
   $(".filter_list").slideToggle();
 });

 // plan cancel

 $(".fii-more-d").click(function(){
   $(".plan_listtt").slideToggle();
 });


 // add class on Notification 

 $('.moreless').on('click', function(){
   //$('.moreless.current').removeClass('current');
   $(this).addClass('current');
});


 // alert box

 $(".mega_phn").click(function(){
  $(".alert_box").slideToggle();
});

