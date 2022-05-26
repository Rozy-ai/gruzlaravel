$(function() {
        if ($(".regular").width() < 426) {
            $(".regular").slick({
                dots: false,
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1
            });
        } else if ($(".regular").width() < 769) {
            $(".regular").slick({
                dots: false,
                infinite: true,
                slidesToShow: 2,
                slidesToScroll: 1
            });
        } else {
            $(".regular").slick({
                dots: false,
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 1
            });
        };


    if ($('.container').width() < 992) {
        $('.nav_block .dropdown .dropdown-menu').remove();
        $("span[class='caret']").remove();
    };

   


    $('select').change(function () {
        $('#go').click();

    });
});

$('nav.navbar-default li a').filter(function(){
  return this.href === location.href;
}).addClass('active');



function scroll() {
    // alert('asdasd');
    // alert($(window).scrollTop());
    if ($(window).scrollTop()>300){
        // alert('asdas');
        $('.topbtn').removeClass('openblock');
    } else {
        $('.topbtn').addClass('openblock');
        // alert('123');
    }
}


$('.scrollto a').on('click', function() {

    let href = $(this).attr('href');

    $('html, body').animate({
        scrollTop: $(href).offset().top
    }, {
        duration: 700,   // по умолчанию «400»
        easing: "linear" // по умолчанию «swing»
    });
    return false;
});

var app = {
    searchForm: function () {
        $('.search-close').on('click', function () {
            $('.search-header').removeClass('open').addClass('out');
            setTimeout(function () {
                $('.search-header').hide().addClass('hide');
            }, 850);
        });
        $('.search-open').on('click', function (e) {
            e.preventDefault();
            $('.search-header').show().addClass('open').removeClass('hide out');
            $('.search-input').focus();
        });
    },
    loaded: function () {
        app.searchForm();
    }
};

$('.counter').countUp();



//       var myModal = document.getElementById('myModal')
// var myInput = document.getElementById('myInput')

// myModal.addEventListener('shown.bs.modal', function () {
//   myInput.focus()
// });

$(document).ready(function () {
    app.loaded();
});

