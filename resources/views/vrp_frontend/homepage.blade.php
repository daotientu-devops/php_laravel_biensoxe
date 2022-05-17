<!doctype html>
<html lang="vi">
<head>
    <title>Tra Cứu Thông Tin Xe Ôtô</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Thông tin về biển số xe oto, tra cứu biển số xe tai nạn, tra cứu thông tin chủ xe, kiểm tra biển kiểm soát nhanh chóng chính xác nhất.">
    <meta property="fb:admins" content="100009013142974"/>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" type="247ab951bf3df6fc7066e8e4-text/javascript"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="tcbs.css">
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
    <script async src='/cdn-cgi/challenge-platform/h/b/scripts/invisible.js?ts=1652533200'></script>
</head>
<body>
@include('vrp_frontend.layouts.partials.navigation')
<div class="container">
    <div class="content">
        <div class="content-container">
            <div class="row">
                <hr class="my-3">
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="card" style="margin-bottom:1em">
                        <div class="card-header"><i class="fa fa-car"></i> Tra cứu thông tin qua biển số</div>
                        <div class="card-body">
                            <form method="post">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control form-control-lg" id="plate" placeholder="29A99999" name="plate" aria-describedby="bsHelp">
                                        <div class="input-group-append">
                                            <button id="find" type="submit" class="btn btn-primary" style="border-top-right-radius: .25rem; border-bottom-right-radius:.25rem;">
                                                <i class="fa fa-search"></i> Tra Cứu <span id="load" class="spinner-border spinner-border-sm" role="status" aria-hidden="true" style="display: none;"></span></button>
                                        </div>
                                    </div>
                                    <small id="bsHelp" class="form-text text-muted">Hiện tại trang web chỉ hỗ trợ tìm theo biển số xe ôtô.</small>
                                </div>
                            </form>
                            <div id="results" style="display: none;"></div>
                        </div>
                    </div>
                    <div class="card" style="margin-bottom:2em">
                        <div class="card-header"><i class="fa fa-info-circle" aria-hidden="true"></i> Nguồn dữ liệu</div>
                        <div class="card-body">
                            Chúng tôi thu thập thông tin một cách khách quan, chính xác, từ những nguồn như người dùng đóng góp, báo chí, diễn đàn, group facebook (otofun, ký sự đường phố, HLX) hình ảnh, video đã được xác thực với mong muốn rằng người mua xe sẽ hiểu rõ hơn về chiếc xe mình đang chuẩn bị mua.</br>
                            Trang web hoàn toàn miễn phí và hoạt động phi lợi nhuận.
                        </div>
                    </div>
                    <div class="card" style="margin-bottom:1em">
                        <div class="card-header"><i class="fa fa-facebook-square" aria-hidden="true"></i> Comment</div>
                        <div class="card-body">
                            <div class="fb-comments" data-href="https://tracuubienso.com/" data-numposts="5"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    @include('vrp_frontend.blocks.statistic')
                    @include('vrp_frontend.blocks.affiliate_link')
                </div>
            </div>
            @include('vrp_frontend.blocks.search_recently')
        </div>
    </div>
</div>
@include('vrp_frontend.layouts.partials.footer')
<script src="/tcbs.js" type="247ab951bf3df6fc7066e8e4-text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous" type="247ab951bf3df6fc7066e8e4-text/javascript"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous" type="247ab951bf3df6fc7066e8e4-text/javascript"></script>
<script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="247ab951bf3df6fc7066e8e4-|49" defer=""></script>
<script type="text/javascript">
    (function () {
        window['__CF$cv$params'] = {r: '70b3eefeb9e93cb2', m: '0Rma.iupxvO.hR7LVCoFd8FJWiw3piz2Y83F8Qommug-1652534451-0-AcV1bYWDYbJ7V+KtcdDnZLurM4oYKr1iI5b/Buh+BIzZsCz+0B596DG8YZWi1L2Zg3rLA/Q7AMYLPm/bZQU7kr8m6KP7DxV0TPQNS7iqEq4tejJ/Xjdo6BGJZAW5b5GURw==', s: [0xa4f3eb853b, 0xcedb08a637], u: '/cdn-cgi/challenge-platform/h/b'}
    })();</script>
</body>
</html>
