(function ($) {
    $(function () {

        $('.button-collapse').sideNav({draggable: true});
        $('.parallax').parallax();
        $('.modal').modal();

        $('.scrollspy').scrollSpy({
            scrollOffset: 64
        });

        Materialize.scrollFire([
            {
                selector: '.sf-one',
                offset: 100,
                callback: function (el) {
                    Materialize.fadeInImage($(el));
                }
            },
            {
                selector: '.sf-two',
                offset: 200,
                callback: function (el) {
                    Materialize.fadeInImage($(el));
                }
            },
            {
                selector: '.sf-three',
                offset: 320,
                callback: function (el) {
                    Materialize.fadeInImage($(el));
                }
            },
            {
                selector: '.sf-four',
                offset: 360,
                callback: function (el) {
                    Materialize.fadeInImage($(el));
                }
            },
            {
                selector: '.sf-five',
                offset: 400,
                callback: function (el) {
                    Materialize.fadeInImage($(el));
                }
            },
            {
                selector: '.sf-six',
                offset: 400,
                callback: function (el) {
                    Materialize.fadeInImage($(el));
                }
            }
        ]);

    });
})(jQuery);

var scrollEvent = function () {
    var top = document.body.scrollTop;
    if (top >= 400) {
        if ($('nav .brand-logo img.brand-a').css('display') == 'inline') {
            $('nav .brand-logo img.brand-a').hide();
            $('nav .brand-logo img.brand-b').show();
            Materialize.fadeInImage($('nav .brand-logo img.brand-b'));
        }
    } else {
        if ($('nav .brand-logo img.brand-a').css('display') == 'none') {
            $('nav .brand-logo img.brand-b').hide();
            $('nav .brand-logo img.brand-a').show();
            Materialize.fadeInImage($('nav .brand-logo img.brand-a'));
        }
    }
};