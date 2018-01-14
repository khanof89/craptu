<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="1 {{ strtoupper($coin) }} = {{$data['price']}} {{ strtoupper($base) }}"/>

    <link rel="shortcut icon" href="/assets/images/favicon.ico">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{$data['price']}} {{ strtoupper($base) }} = 1 {{ strtoupper($coin) }} | Crypto Ticker</title>

    <meta property="og:title" content="Crypto currency price updates"/>
    <meta property="og:description" content="1 {{ strtoupper($coin) }} = {{$data['price']}} {{ strtoupper($base) }}"/>
    <meta property="og:url" content="http://craptu.com"/>
    <meta property="og:site_name" content="Crypto Currency Price Ticker"/>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="http://craptu.com/images/preview.png"/>

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="/assets/plugins/morris/morris.css">

    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/css/core.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/css/components.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/css/icons.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/css/pages.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/css/menu.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/css/responsive.css" rel="stylesheet" type="text/css"/>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/web.css') }}" rel="stylesheet">

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="/assets/js/modernizr.min.js"></script>
</head>
<body>

<!-- Navigation Bar-->
<header id="topnav">
    <div class="topbar-main">
        <div class="container">

            <!-- LOGO -->
            <div class="topbar-left">
                <a href="index.html" class="logo"><span>Crap<span>tu</span></span></a>
            </div>
            <!-- End Logo container-->


            <div class="menu-extras">
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>

        </div>
    </div>

    <div class="navbar-custom">
        <div class="container">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">
                    <li class="has-submenu">
                        <a href="#"><i class="zmdi zmdi-layers"></i> <span> Select Pair </span> </a>
                        <ul class="submenu megamenu">
                            <li>
                                <ul>
                                    <li><a href="/{{$exchange}}/btc/usd">BTC/USD</a></li>
                                    <li><a href="/{{$exchange}}/eth/usd">ETH/USD</a></li>
                                    <li><a href="/{{$exchange}}/eth/btc">ETH/BTC</a></li>
                                    <li><a href="/{{$exchange}}/ltc/usd">LTC/USD</a></li>
                                    <li><a href="/{{$exchange}}/ltc/BTC">LTC/BTC</a></li>
                                    <li><a href="/{{$exchange}}/iot/usd">IOTA/USD</a></li>
                                    <li><a href="/{{$exchange}}/iot/eth">IOTA/ETH</a></li>
                                    <li><a href="/{{$exchange}}/iot/btc">IOTA/BTC</a></li>
                                </ul>
                            </li>

                            <li>
                                <ul>
                                    <li><a href="/{{$exchange}}/etc/usd">ETC/USD</a></li>
                                    <li><a href="/{{$exchange}}/etc/btc">ETC/BTC</a></li>
                                    <li><a href="/{{$exchange}}/xrp/usd">XRP/USD</a>
                                    <li><a href="/{{$exchange}}/xrp/btc">XRP/BTC</a>
                                    <li><a href="/{{$exchange}}/eos/usd">EOS/USD</a>
                                    <li><a href="/{{$exchange}}/eos/eth">EOS ETH</a>
                                    <li><a href="/{{$exchange}}/eos/btc">EOS/BTC</a></li>
                                    <li><a href="/{{$exchange}}/san/usd">SAN/USD</a></li>
                                </ul>
                            </li>

                            <li>
                                <ul>
                                    <li><a href="/{{$exchange}}/san/eth">SAN/ETH</a></li>
                                    <li><a href="/{{$exchange}}/san/btc">SAN/BTC</a></li>
                                    <li><a href="/{{$exchange}}/omg/usd">OMG/USD</a></li>
                                    <li><a href="/{{$exchange}}/omg/usd">OMG/USD</a></li>
                                    <li><a href="/{{$exchange}}/omg/eth">OMG/ETH</a></li>
                                    <li><a href="/{{$exchange}}/omg/btc">OMG/BTC</a></li>
                                    <li><a href="/{{$exchange}}/snt/usd">SNT/USD</a></li>
                                    <li><a href="/{{$exchange}}/snt/eth">SNT/ETH</a></li>
                                </ul>
                            </li>

                            <li>
                                <ul>
                                    <li><a href="/{{$exchange}}/snt/btc">SNT/BTC</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    {{--<li class="has-submenu">
                        <a href="#"><i class="zmdi zmdi-collection-item"></i><span> Select Exchange </span> </a>
                        <ul class="submenu">
                            <li><a href="/bitfinex/{{$coin}}/{{$base}}">Bitfinex</a></li>
                            <li><a href="/bittrex/{{$coin}}/{{$base}}">Bittrex</a></li>
                        </ul>
                    </li>--}}

                </ul>
                <!-- End navigation menu  -->
            </div>
        </div>
    </div>
</header>
<!-- End Navigation Bar-->


<div class="wrapper" id="app">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="col-lg-12 col-md-12">
                    <div class="card-box text-center">
                        <h3 class="m-t-0 m-b-30">1 {{strtoupper($coin)}}=</h3>
                        <h1 class="header-title-single m-t-0 m-b-30 price"><i
                                    class="fa fa-{{$data['symbol']}}"></i> {{$data['price']}} </h1>
                    </div>
                </div><!-- end col -->

                <div class="col-lg-4 col-md-6">
                    <div class="card-box text-center">
                        <h4 class="header-title m-t-0 m-b-30">24 hour high</h4>
                        <div class="widget-chart-1">
                            <h2 class="p-t-10 m-b-0"> {{$data['high']}} </h2>
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col-lg-4 col-md-6">
                    <div class="card-box text-center">
                        <h4 class="header-title m-t-0 m-b-30">24 hour low</h4>
                        <div class="widget-chart-1">
                            <h2 class="p-t-10 m-b-0"> {{$data['low']}} </h2>
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col-lg-4 col-md-6">
                    <div class="card-box text-center">
                        <h4 class="header-title m-t-0 m-b-30">Volume</h4>
                        <div class="widget-chart-1">
                            <h2 class="p-t-10 m-b-0"> {{$data['volume']}} </h2>
                        </div>
                    </div>
                </div><!-- end col -->
            </div>
            @if(\Auth::check())
                <div class="col-md-3">
                    <groups :initial-groups="{{ $groups }}" :user="{{ $user }}"></groups>
                </div>
            @else
                <div class="col-md-3">
                    <a href="/login" class="btn btn-success">Login to participate in chat</a>
                </div>
            @endif
        </div>
        <!-- end row -->

        <div class="row">

            <div class="col-lg-12">
                <div class="card-box">
                    <div class="dropdown pull-right">
                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"
                           aria-expanded="false">
                            <i class="zmdi zmdi-more-vert"></i>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/{{$exchange}}/{{$coin}}/{{$base}}">One day</a></li>
                            <li><a href="/{{$exchange}}/{{$coin}}/{{$base}}/week">Week</a></li>
                            <li><a href="/{{$exchange}}/{{$coin}}/{{$base}}/month">Month</a></li>
                            <li><a href="/{{$exchange}}/{{$coin}}/{{$base}}/year">Year</a></li>
                        </ul>
                    </div>
                    <h4 class="header-title m-t-0">Price trends</h4>
                    <div id="morris-line-example" style="height: 280px;"></div>
                </div>
            </div><!-- end col -->
        </div>
        <!-- end row -->

        <!-- Footer -->
        <footer class="footer text-right">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        2016 - 2017 © Craptu.
                    </div>
                    <div class="col-xs-6">
                        <ul class="pull-right list-inline m-b-0">
                            <li>
                                <a href="#">About</a>
                            </li>
                            <li>
                                <a href="#">Help</a>
                            </li>
                            <li>
                                <a href="#">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->

    </div>
    <!-- end container -->

</div>


<!-- jQuery  -->
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/detect.js"></script>
<script src="/assets/js/fastclick.js"></script>

<script src="/assets/js/jquery.slimscroll.js"></script>
<script src="/assets/js/jquery.blockUI.js"></script>
<script src="/assets/js/waves.js"></script>
<script src="/assets/js/wow.min.js"></script>
<script src="/assets/js/jquery.nicescroll.js"></script>
<script src="/assets/js/jquery.scrollTo.min.js"></script>

<!-- KNOB JS -->
<!--[if IE]>
<script type="text/javascript" src="/assets/plugins/jquery-knob/excanvas.js"></script>
<![endif]-->
<script src="/assets/plugins/jquery-knob/jquery.knob.js"></script>

<!--Morris Chart-->
<script src="/assets/plugins/morris/morris.min.js"></script>
<script src="/assets/plugins/raphael/raphael-min.js"></script>

<!-- Dashboard init -->
{{--<script src="/assets/pages/jquery.dashboard.js"></script>--}}

<!-- App js -->
<script src="/assets/js/jquery.core.js"></script>
<script src="/assets/js/jquery.app.js"></script>

<script>var userIsLoggedIn = {{ Auth::check() }};</script>
<script>
    var parsed = '';
    var results = [];
    var url = $(location).attr('href');
    var split = url.split('/');
    var endpoint = '';
    if (split.length == 7) {
        var month = url.split('/').reverse()[0];
        var base = url.split('/').reverse()[1];
        var coin = url.split('/').reverse()[2];
        var exchange = url.split('/').reverse()[3];
        endpoint = '/graph/' + exchange + '/' + coin + '/' + base + '/' + month;
    } else {
        var base = url.split('/').reverse()[0];
        var coin = url.split('/').reverse()[1];
        var exchange = url.split('/').reverse()[2];
        endpoint = '/graph/' + exchange + '/' + coin + '/' + base;
    }

    $.get(endpoint, function (data) {
            parsed = JSON.parse(data);

            $.each(parsed, function (index, value) {
                results.push({'y': value.created_at, 'a': value.price});
            });

            !function ($) {
                "use strict";

                var Dashboard1 = function () {
                    this.$realData = []
                };

                //creates line chart
                Dashboard1.prototype.createLineChart = function (element, data, xkey, ykeys, labels, opacity, Pfillcolor, Pstockcolor, lineColors) {
                    Morris.Line({
                        element: element,
                        data: data,
                        xkey: xkey,
                        ykeys: ykeys,
                        labels: labels,
                        fillOpacity: opacity,
                        pointFillColors: Pfillcolor,
                        pointStrokeColors: Pstockcolor,
                        behaveLikeLine: true,
                        gridLineColor: '#eef0f2',
                        hideHover: 'auto',
                        resize: true, //defaulted to true
                        pointSize: 0,
                        lineColors: lineColors
                    });
                },
                    Dashboard1.prototype.init = function () {
                        this.createLineChart('morris-line-example', results, 'y', ['a'], ['Price'], ['0.9'], ['#ffffff'], ['#999999'], ['#10c469', '#188ae2']);
                    },
                    //init
                    $.Dashboard1 = new Dashboard1, $.Dashboard1.Constructor = Dashboard1
            }(window.jQuery),

                //initializing
                function ($) {
                    "use strict";
                    $.Dashboard1.init();
                }(window.jQuery);
        }
    );

    setInterval(function () {
        $.get('/{{$exchange}}/{{$coin}}/{{$base}}', function (data) {
            var parsed = JSON.parse(data);
            var symbol = parsed.symbol;
            var price = parsed.price;
            var coin = parsed.coin;
            var base = parsed.base;
            document.title = price + ' ' + base + ' = 1 ' + coin + ' | Crypto Ticker';
            var html = "<i class=\"fa fa-" + symbol + "\"></i>" + price + "</i>";
            $('.price').html(html);
        })
    }, 30 * 1000); // 60 * 1000 milsec
</script>

<script src="{{ asset('js/app.js') }}"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-111716963-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'UA-111716963-1');
</script>
</body>
</html>