<!doctype html>
<html lang="vi">
<head>
    <title>Tra Cứu Thông Tin Xe Ôtô</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Thông tin về biển số xe oto, tra cứu biển số xe tai nạn, tra cứu thông tin chủ xe, kiểm tra biển kiểm soát nhanh chóng chính xác nhất.">
    <meta property="fb:admins" content="100009013142974"/>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" type="text/javascript"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script type="text/javascript">
        $(function () {
            var btn = $("#plate");
            $("#find").click(function (e) {
                // getting the value that user typed
                e.preventDefault();
                var PlateReg = /^([0-9]){2}([a-zA-Z])(-|)([0-9]){3}(\.|)([0-9]){1,2}$/;
                var searchStr = btn.val();
                var url = searchStr.replace(/[^a-zA-Z0-9]/g, "");
                if (searchStr === '' || !PlateReg.test(searchStr)) {
                    btn.val("");
                    return false;
                } else window.location.href = "https://tracuubienso.com/oto/" + url.toUpperCase() + "/";
            });
        });
    </script>
</head>
<body>
@include('frontend.layouts.partials.navigation')
@yield('content')
@include('frontend.layouts.partials.footer')
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous" type="text/javascript"></script>
<script type="text/javascript">
    (function () {
        window['__CF$cv$params'] = {r: '70b3eefeb9e93cb2', m: '0Rma.iupxvO.hR7LVCoFd8FJWiw3piz2Y83F8Qommug-1652534451-0-AcV1bYWDYbJ7V+KtcdDnZLurM4oYKr1iI5b/Buh+BIzZsCz+0B596DG8YZWi1L2Zg3rLA/Q7AMYLPm/bZQU7kr8m6KP7DxV0TPQNS7iqEq4tejJ/Xjdo6BGJZAW5b5GURw==', s: [0xa4f3eb853b, 0xcedb08a637], u: '/cdn-cgi/challenge-platform/h/b'}
    })();</script>
</body>
</html>
