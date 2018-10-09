<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>--}}
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">--}}
    <link rel="stylesheet" href="/css/min/inworker-header.css">
</head>
<body>
<div class="container-fluid1">
    @include("layouts.header")
            @yield("section")
    @include("layouts.footer")
</div>
</body>
</html>
<script>
    $(document).ready(function() {
        $('#invisible-img-icon').hide();
        $('.mini-search').hide();
        $(".calling-topnav").hide();
        var stickyNavTop = $('.float-header').offset().top;
        var stickyNav = function(){
            var scrollTop = $(window).scrollTop();
            if (scrollTop > stickyNavTop+7) {
                $('.float-header').addClass('sticky');
                $('#invisible-img-icon').show(200);
                $('.mini-search').fadeIn();
                $(".calling-topnav").fadeOut(200);
            } else {
                $('.float-header').removeClass('sticky');
                $('#invisible-img-icon').hide(200);
                $(".calling-topnav").hide();
                $('.mini-search').fadeOut();
            }};
        $(window).scroll(function() {
            stickyNav();
        });
        stickyNav();


        var callTopNav = function () {
            $("button[name='topnav-caller']").bind("click",function(){
                $(".calling-topnav").fadeIn(300);
                $(".mini-search").fadeOut(200);
            });
        }
        callTopNav();
    });
</script>