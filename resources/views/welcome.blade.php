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
                <a href="/" class="logo"><span>Crap<span>tu</span></span></a>
            </div>
            <!-- End Logo container-->


            <div class="menu-extras">

                {{--<ul class="nav navbar-nav navbar-right pull-right">
                    <li class="dropdown user-box">
                        <a href="" class="dropdown-toggle waves-effect waves-light profile " data-toggle="dropdown"
                           aria-expanded="true">
                            <img src="/assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle user-img">
                            <div class="user-status away"><i class="zmdi zmdi-dot-circle"></i></div>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a href="javascript:void(0)"><i class="ti-user m-r-5"></i> Profile</a></li>
                            <li><a href="javascript:void(0)"><i class="ti-settings m-r-5"></i> Settings</a></li>
                            <li><a href="javascript:void(0)"><i class="ti-lock m-r-5"></i> Lock screen</a></li>
                            <li><a href="javascript:void(0)"><i class="ti-power-off m-r-5"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>--}}
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

    {{--<div class="navbar-custom">
        <div class="container">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">
                    <li>
                        <a href="index.html"><i class="zmdi zmdi-view-dashboard"></i> <span> Dashboard </span> </a>
                    </li>
                    <li class="has-submenu">
                        <a href="#"><i class="zmdi zmdi-invert-colors"></i> <span> User Interface </span> </a>
                        <ul class="submenu megamenu">
                            <li>
                                <ul>
                                    <li><a href="ui-buttons.html">Buttons</a></li>
                                    <li><a href="ui-cards.html">Cards</a></li>
                                    <li><a href="ui-draggable-cards.html">Draggable Cards</a></li>
                                    <li><a href="ui-typography.html">Typography </a></li>
                                    <li><a href="ui-checkbox-radio.html">Checkboxs-Radios</a></li>
                                    <li><a href="ui-material-icons.html">Material Design Icons</a></li>
                                    <li><a href="ui-font-awesome-icons.html">Font Awesome</a></li>
                                    <li><a href="ui-themify-icons.html">Themify Icons</a></li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li><a href="ui-dripicons.html">Dripicons</a></li>
                                    <li><a href="ui-modals.html">Modals</a></li>
                                    <li><a href="ui-notification.html">Notification</a></li>
                                    <li><a href="ui-range-slider.html">Range Slider</a></li>
                                    <li><a href="ui-components.html">Components</a>
                                    <li><a href="ui-sweetalert.html">Sweet Alert</a>
                                    <li><a href="ui-treeview.html">Tree view</a>
                                    <li><a href="ui-widgets.html">Widgets</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#"><i class="zmdi zmdi-collection-text"></i><span> Forms </span> </a>
                        <ul class="submenu">
                            <li><a href="form-elements.html">General Elements</a></li>
                            <li><a href="form-advanced.html">Advanced Form</a></li>
                            <li><a href="form-validation.html">Form Validation</a></li>
                            <li><a href="form-wizard.html">Form Wizard</a></li>
                            <li><a href="form-fileupload.html">Form Uploads</a></li>
                            <li><a href="form-wysiwig.html">Wysiwig Editors</a></li>
                            <li><a href="form-xeditable.html">X-editable</a></li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#"><i class="zmdi zmdi-view-list"></i> <span> Tables </span> </a>
                        <ul class="submenu">
                            <li><a href="tables-basic.html">Basic Tables</a></li>
                            <li><a href="tables-datatable.html">Data Table</a></li>
                            <li><a href="tables-responsive.html">Responsive Table</a></li>
                            <li><a href="tables-editable.html">Editable Table</a></li>
                            <li><a href="tables-tablesaw.html">Tablesaw Table</a></li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#"><i class="zmdi zmdi-chart"></i><span> Charts </span> </a>
                        <ul class="submenu">
                            <li><a href="chart-flot.html">Flot Chart</a></li>
                            <li><a href="chart-morris.html">Morris Chart</a></li>
                            <li><a href="chart-chartist.html">Chartist Charts</a></li>
                            <li><a href="chart-chartjs.html">Chartjs Chart</a></li>
                            <li><a href="chart-other.html">Other Chart</a></li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#"><i class="zmdi zmdi-collection-item"></i><span> Pages </span> </a>
                        <ul class="submenu">
                            <li><a href="page-starter.html">Starter Page</a></li>
                            <li><a href="page-login.html">Login</a></li>
                            <li><a href="page-register.html">Register</a></li>
                            <li><a href="page-recoverpw.html">Recover Password</a></li>
                            <li><a href="page-lock-screen.html">Lock Screen</a></li>
                            <li><a href="page-confirm-mail.html">Confirm Mail</a></li>
                            <li><a href="page-404.html">Error 404</a></li>
                            <li><a href="page-500.html">Error 500</a></li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#"><i class="zmdi zmdi-layers"></i><span>Extra Pages </span> </a>
                        <ul class="submenu megamenu">
                            <li>
                                <ul>
                                    <li><a href="extras-projects.html">Projects</a></li>
                                    <li><a href="extras-tour.html">Tour</a></li>
                                    <li><a href="extras-taskboard.html">Taskboard</a></li>
                                    <li><a href="extras-inbox.html">Mail</a></li>
                                    <li><a href="extras-taskdetail.html">Task Detail</a></li>
                                    <li><a href="extras-maps.html">Maps</a></li>
                                    <li><a href="extras-calendar.html" >Calendar</a></li>
                                    <li><a href="extras-contact.html">Contact list</a></li>
                                    <li><a href="extras-pricing.html">Pricing</a></li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li><a href="extras-timeline.html">Timeline</a></li>
                                    <li><a href="extras-invoice.html">Invoice</a></li>
                                    <li><a href="extras-profile.html">Profile</a></li>
                                    <li><a href="extras-faq.html">FAQ</a></li>
                                    <li><a href="extras-gallery.html">Gallery</a></li>
                                    <li><a href="extras-email-template.html">Email template</a></li>
                                    <li><a href="extras-maintenance.html">Maintenance</a></li>
                                    <li><a href="extras-comingsoon.html">Coming soon</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                </ul>
                <!-- End navigation menu  -->
            </div>
        </div>
    </div>--}}
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
                    {{--<div class="dropdown pull-right">
                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"
                           aria-expanded="false">
                            <i class="zmdi zmdi-more-vert"></i>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </div>--}}
                    <h4 class="header-title m-t-0">Price trends</h4>
                    <div id="morris-line-example" style="height: 280px;"></div>
                </div>
            </div><!-- end col -->
        </div>
        <!-- end row -->

        <div class="col-md-2 text-center">
            <div class="card-box">
                <a href="/{{$exchange}}/btc/usd" class="btn-lg btn-primary">BTC/USD</a>
            </div>
        </div>

        <div class="col-md-2 text-center">
            <div class="card-box">
                <a href="/{{$exchange}}/eth/usd" class="btn-lg btn-primary">ETH/USD</a>
            </div>
        </div>

        <div class="col-md-2 text-center">
            <div class="card-box">
                <a href="/{{$exchange}}/eth/btc" class="btn-lg btn-primary">ETH/BTC</a>
            </div>
        </div>

        <div class="col-md-2 text-center">
            <div class="card-box">
                <a href="/{{$exchange}}/ltc/usd" class="btn-lg btn-primary">LTC/USD</a>
            </div>
        </div>

        <div class="col-md-2 text-center">
            <div class="card-box">
                <a href="/{{$exchange}}/ltc/btc" class="btn-lg btn-primary">LTC/BTC</a>
            </div>
        </div>

        <div class="col-md-2 text-center">
            <div class="card-box">
                <a href="/{{$exchange}}/iot/usd" class="btn-lg btn-primary">IOTA/USD</a>
            </div>
        </div>

        <div class="col-md-2 text-center">
            <div class="card-box">
                <a href="/{{$exchange}}/iot/eth" class="btn-lg btn-primary">IOTA/ETH</a>
            </div>
        </div>

        <div class="col-md-2 text-center">
            <div class="card-box">
                <a href="/{{$exchange}}/iot/btc" class="btn-lg btn-primary">IOTA/BTC</a>
            </div>
        </div>

        <div class="col-md-2 text-center">
            <div class="card-box">
                <a href="/{{$exchange}}/etc/usd" class="btn-lg btn-primary">ETC/USD</a>
            </div>
        </div>

        <div class="col-md-2 text-center">
            <div class="card-box">
                <a href="/{{$exchange}}/eth/btc" class="btn-lg btn-primary">ETC/BTC</a>
            </div>
        </div>

        <div class="col-md-2 text-center">
            <div class="card-box">
                <a href="/{{$exchange}}/rrt/usd" class="btn-lg btn-primary">RRT/USD</a>
            </div>
        </div>

        <div class="col-md-2 text-center">
            <div class="card-box">
                <a href="/{{$exchange}}/rrt/btc" class="btn-lg btn-primary">RRT/BTC</a>
            </div>
        </div>

        <div class="col-md-2 text-center">
            <div class="card-box">
                <a href="/{{$exchange}}/xrp/usd" class="btn-lg btn-primary">XRP/USD</a>
            </div>
        </div>

        <div class="col-md-2 text-center">
            <div class="card-box">
                <a href="/{{$exchange}}/xrp/btc" class="btn-lg btn-primary">XRP/BTC</a>
            </div>
        </div>

        <div class="col-md-2 text-center">
            <div class="card-box">
                <a href="/{{$exchange}}/eos/usd" class="btn-lg btn-primary">EOS/USD</a>
            </div>
        </div>

        <div class="col-md-2 text-center">
            <div class="card-box">
                <a href="/{{$exchange}}/eos/eth" class="btn-lg btn-primary">EOS/ETH</a>
            </div>
        </div>

        <div class="col-md-2 text-center">
            <div class="card-box">
                <a href="/{{$exchange}}/eos/btc" class="btn-lg btn-primary">EOS/BTC</a>
            </div>
        </div>

        <div class="col-md-2 text-center">
            <div class="card-box">
                <a href="/{{$exchange}}/san/usd" class="btn-lg btn-primary">SAN/USD</a>
            </div>
        </div>

        <div class="col-md-2 text-center">
            <div class="card-box">
                <a href="/{{$exchange}}/san/eth" class="btn-lg btn-primary">SAN/ETH</a>
            </div>
        </div>

        <div class="col-md-2 text-center">
            <div class="card-box">
                <a href="/{{$exchange}}/san/btc" class="btn-lg btn-primary">SAN/BTC</a>
            </div>
        </div>

        <div class="col-md-2 text-center">
            <div class="card-box">
                <a href="/{{$exchange}}/omg/usd" class="btn-lg btn-primary">OMG/USD</a>
            </div>
        </div>

        <div class="col-md-2 text-center">
            <div class="card-box">
                <a href="/{{$exchange}}/omg/eth" class="btn-lg btn-primary">OMG/ETH</a>
            </div>
        </div>

        <div class="col-md-2 text-center">
            <div class="card-box">
                <a href="/{{$exchange}}/omg/btc" class="btn-lg btn-primary">OMG/BTC</a>
            </div>
        </div>

        <div class="col-md-2 text-center">
            <div class="card-box">
                <a href="/{{$exchange}}/snt/usd" class="btn-lg btn-primary">SNT/USD</a>
            </div>
        </div>

        <div class="col-md-2 text-center">
            <div class="card-box">
                <a href="/{{$exchange}}/snt/eth" class="btn-lg btn-primary">SNT/ETH</a>
            </div>
        </div>

        <div class="col-md-2 text-center">
            <div class="card-box">
                <a href="/{{$exchange}}/snt/btc" class="btn-lg btn-primary">SNT/BTC</a>
            </div>
        </div>

        <!-- Footer -->
        <footer class="footer text-right">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        2016 - 2017 © Adminto.
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

<script>

    var parsed = '';
    var results = [];
    var url = $(location).attr('href');
    var base = url.split('/').reverse()[0];
    var coin = url.split('/').reverse()[1];
    var exchange = url.split('/').reverse()[2];
    console.log(base + ' - ' + coin + '-' + exchange);

    $.get('/graph/' + exchange + '/' + coin + '/' + base, function (data) {
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