/**
 * Customized javascript bootstrap components call
 */

jQuery(document).ready(function ( $ ) {

    /* Off canvas bootstrap content */
    $('[data-toggle="offcanvas"]').click(function () {
        $('.row-offcanvas').toggleClass('active');
    });

});


/**
 * esto es el menu pegajoso
 */
window.onscroll = function() {myFunction()};
var header = document.getElementById("myHeader");
function myFunction() {
    if (window.pageYOffset >= 1) {
        header.classList.add("header2");
    } else {
        header.classList.remove("header2");
    }
}


/**
 * esto es el acordeon
 */
jQuery(function($){
    var contents = $('.accordeon-content');
    var titles = $('.accordeon-title');
    titles.on('click',function(){
        var title = $(this);
        contents.filter(':visible').slideUp(function(){
            $(this).prev('.accordeon-title').removeClass('is-opened');
        });

        var content = title.next('.accordeon-content');

        if (!content.is(':visible')) {
            content.slideDown(function(){title.addClass('is-opened')});
        }
    });
});

/**
 * Esto es para el hover de las imagenes otras ciudades
 */
jQuery(function($) {
    $("[rel='tooltip']").tooltip();

    $('.thumbnailok').hover(
        function(){
            $(this).find('.caption').slideDown(250); //.fadeIn(250)
        },
        function(){
            $(this).find('.caption').slideUp(250); //.fadeOut(205)
        }
    );
});
/**
 * Hover de las imagenes otras ciudades pagina tour privado
 */
jQuery(function($) {
    $("[rel='tooltip']").tooltip();

    $('.thumbnailok').hover(
        function(){
            $(this).find('.caption-tp').slideDown(250); //.fadeIn(250)
        },
        function(){
            $(this).find('.caption-tp').slideUp(250); //.fadeOut(205)
        }
    );
});


/**
 * epara el deslizamiento lento hacia los enlaces noel de ir arriba
 */
jQuery(document).ready(function($){
    linkInterno = $('a[href^="#"]');
    linkInterno.on('click',function(e) {
        e.preventDefault();
        var href = $(this).attr('href');
        $('html, body').animate({ scrollTop : $( href ).offset().top }, 'slow');
    });
});




