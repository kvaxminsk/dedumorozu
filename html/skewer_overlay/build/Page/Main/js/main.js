$(document).ready(function(){

    $('.to-form').click(function(){
        $.scrollTo('.b-formbox', 1000);
        return false;
    });

    $.scrollUp({
        scrollName: 'scrollUp', //  ID элемента
        topDistance: '300', // расстояние после которого появится кнопка (px)
        topSpeed: 700, // скорость переноса (миллисекунды)
        animation: 'fade', // вид анимации: fade, slide, none
        animationInSpeed: 200, // скорость разгона анимации (миллисекунды)
        animationOutSpeed: 200, // скорость торможения анимации (миллисекунды)
        scrollText: '',
        activeOverlay: false
    });

    $('body').append('<div id="scrollDown"></div>');

    $('#scrollDown').click(function(){
        var offset = $(window).scrollTop() + $(window).height();
        if (offset > $(window).scrollTop()) {
            $('body').animate({scrollTop: offset})
        }
    });

    $(window).scroll(function() {

        if (($(window).height() + $(window).scrollTop() + 200) > $(document).height()) {
            $('#scrollDown').hide();
        }
        else {
            $('#scrollDown').show();
        }
    });

    $('.js_init_timepicker').timepicker({ 'timeFormat': 'H:i' });

    if ( typeof $.datepicker !== 'undefined' ) {
        $.datepicker.setDefaults({
            showOn: 'focus',
            buttonImageOnly: true,
            buttonImage: '/skewer_build/libs/datepicker/images/calendar.jpg',
            dateFormat: 'dd.mm.yy'  //ЗДЕСЬ ЗАДАЕТСЯ ФОРМАТ ДЛЯ КАЛЕНДАРЯ ФОРМЫ
        });

        $('.js_init_datepicker').datepicker();
    }
});