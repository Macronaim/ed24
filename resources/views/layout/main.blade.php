<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('partials.head')
    <!-- head>
        <title>App Name - @yield('title')</title>
    </head -->
@show
@yield('content')
@include('partials.footer')

<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>


<script>
    var CONTACT = '',
        ACCUEIL = '1',
        AUDIT = '',
        IS_MOBILE = '',
        IS_TABLET = '',
        PATH_MODULE = 'page',
        PAGESEO = '',
        TEMOIGNAGE = '',
        URL = '',
        DELTA = '1';
</script>
<script>
    jQuery(document).ready(function() {
        //jQuery('#contact_5-element-9').show();

        var source = 0;;
    });
</script>


<script type="text/javascript" src="{{ asset('js/lazyload.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/classie.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.appear.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.sudoSlider.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/modernizr.custom.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.mousewheel.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.classyscroll.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.line.js') }}"></script>

<script type="text/javascript" src="{{ asset('js/theme.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/modules.min.js') }}"></script>


<script type='application/javascript'>
    var awstats_enable = 1;
</script>
<script data-type='application/javascript' data-name='awstat' defer data-src='/js/awstats_misc_tracker.js'></script>
<noscript><img src='/js/awstats_misc_tracker.js?nojs=y' height=0 width=0 style='border:0; display: none' alt=''></noscript>
<script type="text/javascript">
    var purechat_enable = 1;
</script>


<script>
    var langue_enable = 1;
</script>
<script>
    var catalogue_enable = 1;
</script>
<script>
    var consent_cookie = 1;
</script>
<script>
    var recaptcha_enable = 1;
</script>

<script data-name="youfindme" data-type="application/javascript" defer data-src="https://www.fdmanager.fr/elements/cookies.js"></script>
<script defer type="text/javascript" src="js/klaro/dist/config.js"></script>
<script defer data-config="klaroConfig" type="application/javascript" src="https://cdn.kiprotect.com/klaro/v0.7.11/klaro.js">
</script>
<link rel="stylesheet" href="{{ asset('js/klaro/dist/klaro.css') }}">

</body>
</html>