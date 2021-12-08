$(".chosen-select").chosen();

 $('.popup_btn').magnificPopup({
    removalDelay: 500, //delay removal by X to allow out-animation
    callbacks: {
      beforeOpen: function() {
         this.st.mainClass = this.st.el.attr('data-effect');
      }
    },
    midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
  });

//   owl carousel
/*
$('.loop').owlCarousel({
    center: true,
    items:2,
    loop:true,
    margin:10,
    responsive:{
        600:{
            items:4
        }
    }
});
$('.nonloop').owlCarousel({
    center: true,
    items:2,
    loop:false,
    margin:10,
    responsive:{
        600:{
            items:4
        }
    }
});*/

//range calendar

/*$(function() {
        $('.calendar').daterangepicker({
            opens: 'left'
        }, function(start, end, label) {
            console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
        });
    });
*/

// dropdown tabs
    /*$('.tab_open').click(function() {
        $('.g_popup_openedside').slideUp();
        $(this).next('.g_popup_openedside').stop().slideToggle();
    });*/


    //tabs


/*$(document).ready(function() {

        $('.header_tablinks li a').on('click', function(e) {
            var currentNewsValue = $(this).attr('href');

            $('.table_tab ').hide();
            $(currentNewsValue).fadeIn(500);


            $(this).parent('li').addClass('active').siblings().removeClass('active');
            e.preventDefault();
        });
    });

*/

//datepicker

/*$('[data-toggle="datepicker"]').datepicker({
        inline: true,
        format: 'dd-mm-yyyy'
    });
*/

// $('.file_up').change(function() {
//         filename = $(this)[0].files[0].name;
//         $(this).next('.upload_inp_containerr').find('p').text(filename);
//     })
$('.glass_mobile_slider .owl-carousel').owlCarousel({
    center: false,
    items:2,
    loop:true,
    nav:true,
    dots:false,
    margin:17,
    responsive:{
        0:{
            items:2,
            autoWidth:true,
            nav:false,
        },
        768:{
            items:2
        }
    }
});

$('.main_products_tablinks a').click(function(e){
    e.preventDefault();
    $('.main_products_tablinks a').removeClass('active');
    $(this).addClass('active');  
});

$('.search_open').click(function(){
    $('.search_box input').addClass('active');
    $(this).hide();
    $('.search_submit').show();
});

$('.search_open').click(function(e){
    e.stopPropagation();
});
$('.search_submit').click(function(e){
    e.stopPropagation();
});

$('.search_box input').click(function(e){
    e.stopPropagation();
});
$(document).click(function() {
   $('.search_box input').removeClass('active');
    $('.search_open').show();
    $('.search_submit').hide();
});

$(document).ready(function() {
  $('.nice-select').niceSelect();
});

$(document).ready(function(){

       var $tabs =  $('.sub_cat>a').click(function(e){
            e.preventDefault();
            $('.filter_subtrop').slideUp();
            $(this).next('.filter_subtrop').stop().slideToggle();   


            var $parent = $(this);
        
            if ($parent.is('.opened')) {
                $parent.removeClass('opened');
                $tabs.removeClass('opened');
                return;
            }
            
             $tabs.removeClass('opened');
              $parent.addClass("opened");


        });
    });

    
$(document).ready(function(){

       var $tabs =  $('.mobile_has_sub>a').click(function(event){

            $('.mobile_submenu').slideUp();
            $(this).next('.mobile_submenu').stop().slideToggle();   


            var $parent = $(this);
        
            if ($parent.is('.active')) {
                $parent.removeClass('active');
                $tabs.removeClass('active');
                return;
            }
            
             $tabs.removeClass('active');
              $parent.addClass("active");


        });
    });

    $('.mobile_menu_open').click(function(){
        $('.mobile_menu').addClass('opened');
    });
      $('.menu_close').click(function(){
        $('.mobile_menu').removeClass('opened');
    });
    
$(document).ready(function(){

       var $tabs =  $('.accordion_open').click(function(event){

            $('.accrodion_desc').slideUp();
            $(this).next('.accrodion_desc').stop().slideToggle();   


            var $parent = $(this);
        
            if ($parent.is('.opened')) {
                $parent.removeClass('opened');
                $tabs.removeClass('opened');
                return;
            }
            
             $tabs.removeClass('opened');
              $parent.addClass("opened");


        });
    });




$(document).ready(function() {

        $('.about_tablinks li a').on('click', function(e) {
            var currentNewsValue = $(this).attr('href');

            $('.about_tab ').hide();
            $(currentNewsValue).fadeIn(500);


            $(this).parent('li').addClass('active').siblings().removeClass('active');
            e.preventDefault();
        });
    });

/* product*/

$(function(){
    var owl_first = $('.mainpage_products .owl-carousel');
    owl_first.owlCarousel({
    center: false,
    items:5,
    nav:false,
    autoplay:true,
    autoplayTimeout:2500,
    loop:true,
    dots:true,
    margin:36,
    onInitialized  : counter, //When the plugin has initialized.
    onTranslated : counter, //When the translation of the stage has finished.,
     responsive:{
        0:{
            items:4,
            autoWidth:true,
            margin:20,
            dots:false,
        },
        991:{
            items:4
        },
        1200:{
            items:5
        }
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
  $('.mainpage_products .counter').html(+item+" / "+items)
}

$('.mainpage_products .next').click(function() {
    owl_first.trigger('next.owl.carousel');
})
// Go to the previous item
$('.mainpage_products .prev').click(function() {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    owl_first.trigger('prev.owl.carousel', [300]);
})
});



$(function(){
    var owl_similar = $('.similar_products_slider  .owl-carousel');
    owl_similar.owlCarousel({
    center: false,
    items:5,
    nav:false,
    loop:true,
    dots:true,
    margin:36,
    onInitialized  : counter, //When the plugin has initialized.
    onTranslated : counter, //When the translation of the stage has finished.,
     responsive:{
        0:{
            items:2,
            autoWidth:false,
            margin:20,
            dots:false,
        },
        768:{
            items:3,
            autoWidth:false,
            margin:20,
            dots:false,
        },
        991:{
            items:4
        },
        1200:{
            items:5
        }
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
  $('.similar_products_slider  .counter').html(+item+" / "+items)
}

$('.similar_products_slider  .next').click(function() {
    owl_similar.trigger('next.owl.carousel');
})
// Go to the previous item
$('.similar_products_slider  .prev').click(function() {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    owl_similar.trigger('prev.owl.carousel', [300]);
})
});
/* product end*/
$(function(){
    var owl_brend = $('.main_brends_section .owl-carousel');
    owl_brend.owlCarousel({
    center: false,
    items:5,
    nav:false,
    loop:true,
    dots:true,
    margin:36,
    onInitialized  : counter, //When the plugin has initialized.
    onTranslated : counter, //When the translation of the stage has finished.,
     responsive:{
        0:{
            items:4,
            autoWidth:true,
            margin:20,
            dots:false,
        },
        991:{
            items:4
        },
        1200:{
            items:5
        }
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
  $('.main_brends_section .counter').html(+item+" / "+items)
}

$('.main_brends_section .next').click(function() {
    owl_brend.trigger('next.owl.carousel');
})
// Go to the previous item
$('.main_brends_section .prev').click(function() {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    owl_brend.trigger('prev.owl.carousel', [300]);
})
});

/* brend end**/

$(function(){
    var owl_news = $('.news_page_similars .owl-carousel');
    owl_news.owlCarousel({
    center: false,
    items:4,
    nav:false,
    loop:true,
    dots:true,
    margin:27,
    onInitialized  : counter, //When the plugin has initialized.
    onTranslated : counter, //When the translation of the stage has finished.,
    responsive:{
        0:{
            items:4,
            autoWidth:true,
            margin:27,
            dots:false,
        },
        991:{
            items:3
        },
        1200:{
            items:4
        }
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
  $('.counter').html(+item+" / "+items)
}

$('.pro_slider_btns .next').click(function() {
    owl_news.trigger('next.owl.carousel');
})
// Go to the previous item
$('.pro_slider_btns .prev').click(function() {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    owl_news.trigger('prev.owl.carousel', [300]);
})
});

/* 2022*/

$(document).ready(function() {

    $('.dist_page_tablinks li a').on('click', function(e) {
        var currentNewsValue = $(this).attr('href');

        $('.dist_tab').hide();
        $(currentNewsValue).fadeIn(500);


        $(this).parent('li').addClass('active').siblings().removeClass('active');
        e.preventDefault();
    });


    $('.partners_countries a').click(function(){
        $('.partners_countries a').removeClass('active');
        $(this).addClass('active');
    })
});

$('.timeline-content').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.timeline-year'
});
$('.timeline-year').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  asNavFor: '.timeline-content',
  dots: true,
  centerMode: true,
  focusOnSelect: true,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 3,
        infinite: false,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 2,
        infinite: false,
        centerMode: false,
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: false,
        centerMode: false,
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});