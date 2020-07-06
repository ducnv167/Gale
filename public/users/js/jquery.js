$(document).ready(function () {
    $('div .nav-link').click(function() {
        $('.login-register').attr('href', 'users/css/style.css')
    });
    $('#carouselExampleSlidesOnly, .ftco-section').hover(function () {
        $('.login-register').attr('href', '')
    })
});
