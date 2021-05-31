// Button onclick

function product()
{
    window.location.replace('san-pham/');
}

function service()
{
    window.location.replace('dich-vu/');
}


// Back To Top Button

var body = document.body,
    html = document.documentElement;

    var height = Math.max( body.scrollHeight, body.offsetHeight, html.clientHeight, html.scrollHeight, html.offsetHeight );

if ($('#back-to-top').length) {
    
    var scrollTrigger = height - 300, // px
        backToTop = function () {
            var scrollTop = $(window).scrollTop() + $(window).height();
            if (scrollTop > scrollTrigger) {
                $('#back-to-top').addClass('show');
            } else {
                $('#back-to-top').removeClass('show');
            }
        };
    backToTop();
    $(window).on('scroll', function () {
        backToTop();
    });
    $('#back-to-top').on('click', function (e) {
        e.preventDefault();
        $('html,body').animate({
            scrollTop: 0
        }, 700);
    });
}
