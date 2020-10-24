<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>@yield('title') One Click Democracy</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('img/logo-560.png') }}">

    <meta name="description" content="OCD is a social media platform focusing on empowering democracy, involving the people in public issues, and overseeing the representatives and government by directly reaching or reminding">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://oneclickdemocracy.com/">
    <meta property="og:title" content="@yield('title') One-Click Democracy">
    <meta property="og:description" content="OCD is a social media platform focusing on empowering democracy, involving the people in public issues, and overseeing the representatives and government by directly reaching or reminding">
    <meta property="og:image" content="https://oneclickdemocracy.com/img/meta_.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://oneclickdemocracy.com/">
    <meta property="twitter:title" content="@yield('title')  One-Click Democracy">
    <meta property="twitter:description" content="OCD is a social media platform focusing on empowering democracy, involving the people in public issues, and overseeing the representatives and government by directly reaching or reminding">
    <meta property="twitter:image" content="https://oneclickdemocracy.com/img/meta_.png">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&display=swap" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/fancybox/dist/jquery.fancybox.min.css') }}">

    <!-- CSS OCD Template -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">
</head>

<body>
    <!-- ========== HEADER ========== -->
    @include('layouts.modules.header')
    <!-- ========== END HEADER ========== -->

    <!-- ========== MAIN CONTENT ========== -->
    @yield('content')
    <!-- ========== END MAIN CONTENT ========== -->

    <!-- ========== FOOTER ========== -->
    @include('layouts.modules.footer')
    <!-- ========== END FOOTER ========== -->

    <!-- JS Global Compulsory -->
    <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-migrate/dist/jquery-migrate.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

    <!-- JS Implementing Plugins -->
    <script src="{{ asset('assets/vendor/hs-header/dist/hs-header.min.js') }}"></script>
    <!-- <script src="{{ asset('assets/vendor/hs-go-to/dist/hs-go-to.min.js') }}"></script> -->
    <script src="{{ asset('assets/vendor/hs-unfold/dist/hs-unfold.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/hs-show-animation/dist/hs-show-animation.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/hs-sticky-block/dist/hs-sticky-block.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/fancybox/dist/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/clipboard/dist/clipboard.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/hs-scroll-nav/dist/hs-scroll-nav.min.js') }}"></script>

    <!-- JS OCD -->
    <script src="{{ asset('assets/js/hs.core.js') }}"></script>
    <script src="{{ asset('assets/js/hs.fancybox.js') }}"></script>
    <script src="{{ asset('assets/js/hs.clipboard.js') }}"></script>

    <!-- JS Plugins Init. -->
    <script>
        $(document).on('ready', function() {
            // initialization of header
            var header = new HSHeader($('#header')).init();

            // initialization of mega menu
            var megaMenu = new HSMegaMenu($('.js-mega-menu')).init();

            // initialization of unfold
            var unfold = new HSUnfold('.js-hs-unfold-invoker').init();

            // initialization of fancybox
            $('.js-fancybox').each(function() {
                var fancybox = $.HSCore.components.HSFancyBox.init($(this));
            });

            // initialization of show animations
            $('.js-animation-link').each(function() {
                var showAnimation = new HSShowAnimation($(this)).init();
            });

            // initialization of sticky blocks
            $('.js-sticky-block').each(function() {
                var stickyBlock = new HSStickyBlock($(this)).init();
            });

            // initialization of scroll nav
            $('.js-scroll-nav').each(function() {
                var scrollNav = new HSScrollNav($(this)).init();
            });

            // initialization of clipboard
            $('.js-clipboard').each(function() {
                var clipboard = $.HSCore.components.HSClipboard.init(this);
            });
        });
    </script>

    <!-- IE Support -->
    <script>
        if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="assets/vendor/polifills.js"><\/script>');
    </script>
</body>

</html>