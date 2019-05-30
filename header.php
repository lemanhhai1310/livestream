<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Livestream</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <!--CSS-->
    <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/uikit-3.1.5/css/uikit.min.css">
    <link rel="stylesheet" href="css/layout.css">
    <!--JS-->
    <script src="assets/jquery/jquery-3.3.1.js"></script>
    <script src="assets/uikit-3.1.5/js/uikit.min.js"></script>
    <script src="assets/uikit-3.1.5/js/uikit-icons.min.js"></script>
    <script src="js/main.js"></script>
</head>
<body>
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function () {
        FB.init({
            xfbml: true,
            version: 'v3.2'
        });
    };

    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
     attribution=setup_tool
     page_id="2428809380682169"
     theme_color="#24892d">
</div>
<section id="root" class="uk-height-viewport uk-offcanvas-content">
<nav id="nav-main" class="uk-navbar-container uk-margin" uk-navbar uk-sticky="show-on-up: true; animation: uk-animation-slide-top;">

    <div class="uk-navbar-left">

        <a class="uk-navbar-item uk-logo" href="."><img src="imgs/logo1.png" alt=""></a>

        <ul class="uk-navbar-nav">
            <li class="uk-active">
                <a href="#">
                    <span class="uk-badge live uk-text-small uk-text-uppercase">live</span>
                    Đang diễn ra
                </a>
            </li>
            <li><a href="#">Lịch phát sóng</a></li>
            <li><a href="#">Xem highlight</a></li>
            <li><a href="#">Hướng dẫn</a></li>
            <li>
                <a href="#">
                    <span class="uk-badge ads uk-text-small uk-text-uppercase">ads</span>
                    FABET
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="uk-badge ads uk-text-small uk-text-uppercase">ads</span>
                    BET188
                </a>
            </li>
            <li><a href="#">FANPAGE</a></li>
        </ul>

    </div>

    <div class="uk-navbar-right">

        <ul class="uk-navbar-nav">
            <li class="user">
                <a href="#">
                    <div class="uk-grid-small user_info uk-flex-middle" uk-grid>
                        <div class="uk-width-auto">
                            <div class="uk-cover-container uk-border-circle">
                                <img src="https://scontent.fhan3-3.fna.fbcdn.net/v/t1.0-9/53397793_1028481614010994_3431479243719049216_n.jpg?_nc_cat=100&_nc_eui2=AeEiZzOj1Lpi6CPBoD6ZV0Nx3rCG5lAGTTYyQP4Eb1Fxlr5g_8bfwLNG1s1NUOck7dcckU8EEcpEdV7oSVHdzkMpjmjAgjXM0tff4kx1pGFwgg&_nc_oc=AQmn_OVWm8u5NAIu9o5e5y68aFNIrM_5PNxMxsVmkBK6uWbLAhhLzngCQTM1HlCx-Ss&_nc_ht=scontent.fhan3-3.fna&oh=7cd32b804e67d1bbb7d2ff664e77c276&oe=5D682899" alt="" uk-cover>
                                <canvas width="35" height="35"></canvas>
                            </div>
                        </div>
                        <div class="uk-width-expand">
                            <h5 class="name uk-margin-remove uk-text-bold">The Flash</h5>
                            <span>VIP 1</span>
                        </div>
                        <div class="uk-width-auto">
                            <span uk-icon="triangle-down"></span>
                        </div>
                    </div>
                </a>
                <div class="uk-navbar-dropdown uk-padding-remove box8" uk-dropdown="pos: bottom-right; mode: click">
                    <div class="user_acc">
                        <ul class="uk-list">
                            <li>Email: <b>hai.lemanh.1310@gmail.com</b></li>
                            <li>ID: <b>203</b></li>
                            <li>Số dư: <span>2,301,011</span> <img class="coin" src="imgs/coin.png" alt=""></li>
                        </ul>
                    </div>
                    <ul class="uk-nav uk-navbar-dropdown-nav uk-text-center user_menu">
                        <li><a href="#">Tài khoản</a></li>
                        <li class="uk-active"><a href="#">Nạp coin</a></li>
                        <li><a href="#">Chuyển coin</a></li>
                        <li><a href="#">Đăng xuất</a></li>
                    </ul>
                </div>
            </li>
        </ul>

    </div>

</nav>