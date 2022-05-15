
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


    <script type="247ab951bf3df6fc7066e8e4-text/javascript">

$(function() {
var btn = $("#plate");
$("#find").click(function(e) {
        // getting the value that user typed
        e.preventDefault();
        var PlateReg=/^([0-9]){2}([a-zA-Z])(-|)([0-9]){3}(\.|)([0-9]){1,2}$/;
        var searchStr    = btn.val();
        var url = searchStr.replace(/[^a-zA-Z0-9]/g, "");

        if(searchStr === '' ||  !PlateReg.test(searchStr)){

            btn.val("");
            return false;
        }
        else window.location.href = "https://tracuubienso.com/oto/"+ url.toUpperCase()+"/";
    });
});


</script>

    <script type="application/ld+json">
	{
		"@context": "http://schema.org",
		"@type": "WebPage",
		"@id": "#",
		"name": "TraCuuBienSo",
		"url": "https://tracuubienso.com/",
		"description": "Tra cứu thông tin biển số (biển kiểm soát), xem thông tin về xe.",
		"license": "http://creativecommons.org/licenses/by-nc-sa/3.0/us/deed.en_US",
		"author": "TraCuuBienSo.com"
    }
</script>
    <script type="application/ld+json">
	{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "TraCuuBienSo",
        "contactPoint": {
            "@type": "ContactPoint",
            "email": "contact@tracuubienso.com",
    		"url": "https://www.facebook.com/tracuubienso",
            "contactType": "Customer service"
        }
    }
</script>


    <script async src='/cdn-cgi/challenge-platform/h/b/scripts/invisible.js?ts=1652533200'></script></head>
<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="https://tracuubienso.com/logotc.png" height="30" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/gui-thong-tin">Gửi thông tin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Giới thiệu</a>
                </li>

            </ul>
<!--
            <div class="search-main">
                <form class="form-inline my-2 my-lg-0">
                    <input id="searchbs" class="form-control search-input" name = "search" type="search" placeholder="Nhập biển kiểm soát" aria-label="Search"  pattern="^([0-9]){2}([a-zA-Z])(-|)([0-9]){3}(\.|)([0-9]){1,2}$" required>
                    <button id="search" class="btn btn-success my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
-->
        </div>
    </div></nav>


<div class="container">
    <div class="content">
        <div class="content-container">
            <div class="row"><hr class="my-3"></div>
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
                                            <button id = "find" type="submit" class="btn btn-primary" style="border-top-right-radius: .25rem; border-bottom-right-radius:.25rem;">
                                                <i class="fa fa-search"></i> Tra Cứu <span id = "load" class="spinner-border spinner-border-sm" role="status" aria-hidden="true" style="display: none;"></span></button>
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
                    <div class="card" style="margin-bottom:1em">
                        <div class="card-header"><i class="fa fa-bar-chart" aria-hidden="true"></i> Thống kê </div>
                        <div class="card-body p-2">

                            <table class="table-sm table-borderless" width="100%" style="font-size: .9em;">

                                <tbody>
                                <tr>

                                    <td><i class="fa fa-search text-primary"></i> Lượt tìm kiếm</td>
                                    <td>15585317</td>
                                </tr>
                                <tr>

                                    <td><i class="fa fa-file text-success" ></i> Lượt đóng góp</td>
                                    <td>9928</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>                    <div class="card" style="margin-bottom:1em">
                        <div class="card-header"><i class="fa fa-bar-chart" aria-hidden="true"></i> Tìm kiếm gần đây </div>
                        <div class="card-body p-2">

                            <table class="table-sm table-striped" width="100%" style="font-size: .9em;">

                                <tbody><tr><td><a href="https://tracuubienso.com/oto/36A01838/" target="_blank"><img src="https://tracuubienso.com/oto/ngang/small/36A01838.png" class="img-fluid rounded" width ="50%"></a></td></tr><tr><td><a href="https://tracuubienso.com/oto/30F05654/" target="_blank"><img src="https://tracuubienso.com/oto/ngang/small/30F05654.png" class="img-fluid rounded" width ="50%"></a></td></tr><tr><td><a href="https://tracuubienso.com/oto/30F00654/" target="_blank"><img src="https://tracuubienso.com/oto/ngang/small/30F00654.png" class="img-fluid rounded" width ="50%"></a></td></tr><tr><td><a href="https://tracuubienso.com/oto/34A55039/" target="_blank"><img src="https://tracuubienso.com/oto/ngang/small/34A55039.png" class="img-fluid rounded" width ="50%"></a></td></tr><tr><td><a href="https://tracuubienso.com/oto/20E16377/" target="_blank"><img src="https://tracuubienso.com/oto/ngang/small/20E16377.png" class="img-fluid rounded" width ="50%"></a></td></tr></tbody>
                            </table>
                        </div>
                    </div>                    <div class="card" style="margin-bottom:1em">
                        <div class="card-header"><i class="fa fa-link" aria-hidden="true"></i> Liên kết</div>
                        <div class="card-body p-2">

                            <table class="table-sm table-striped" width="100%" style="font-size: .9em;">

                                <tbody>
                                <tr>

                                    <td><a href="gui-thong-tin" target="_blank">Gửi thông tin xe</a></td>

                                </tr>
                                <tr>

                                    <td><a href="#" target="_blank">Tra cứu số VIN</a></td>

                                </tr>
                                <tr>

                                    <td><a rel="nofollow" href="http://app.vr.org.vn/ptpublic/ThongTinPTPubLic.aspx" target="_blank">Tra Cứu Thông Tin Đăng Kiểm</a></td>

                                </tr>
                                <tr>

                                    <td><a rel="nofollow" href="https://gplx.gov.vn/" target="_blank">Tra cứu GPLX (Bằng lái xe)</a></td>

                                </tr>
                                <tr>

                                    <td><a rel="nofollow" href="https://m.me/tracuubienso" target="_blank">Tra cứu phạt nguội toàn quốc</a></td>

                                </tr>

                                </tr>
                                <tr>

                                    <td><a rel="nofollow" href="http://langmoi.vn/" target="_blank">Báo Làng Mới</a></td>

                                </tr>
                                <tr>
                                </tbody>
                            </table>
                        </div>
                    </div>


                </div>
            </div>
            <h1 class="main-title"><i class="fa fa-address-card"></i> Biển số được ghi nhận gần đây</h1>
            <div class="row recent-license-plate-row" style="margin-bottom:1em"><div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 recent-license-plate-col">
                    <div class="white-block">
                        <a href="https://tracuubienso.com/oto/30F05654/" target = "_blank"><img src="https://tracuubienso.com/oto/ngang/small/30F05654.png"  class="img-fluid rounded" title="Thông tin biển số xe 30F-056.54"><br>
                            Thông tin biển số 30F-056.54</a>
                    </div>
                </div><div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 recent-license-plate-col">
                    <div class="white-block">
                        <a href="https://tracuubienso.com/oto/49A45032/" target = "_blank"><img src="https://tracuubienso.com/oto/ngang/small/49A45032.png"  class="img-fluid rounded" title="Thông tin biển số xe 49A-450.32"><br>
                            Thông tin biển số 49A-450.32</a>
                    </div>
                </div><div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 recent-license-plate-col">
                    <div class="white-block">
                        <a href="https://tracuubienso.com/oto/34A55039/" target = "_blank"><img src="https://tracuubienso.com/oto/ngang/small/34A55039.png"  class="img-fluid rounded" title="Thông tin biển số xe 34A-550.39"><br>
                            Thông tin biển số 34A-550.39</a>
                    </div>
                </div><div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 recent-license-plate-col">
                    <div class="white-block">
                        <a href="https://tracuubienso.com/oto/68A22615/" target = "_blank"><img src="https://tracuubienso.com/oto/ngang/small/68A22615.png"  class="img-fluid rounded" title="Thông tin biển số xe 68A-226.15"><br>
                            Thông tin biển số 68A-226.15</a>
                    </div>
                </div><div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 recent-license-plate-col">
                    <div class="white-block">
                        <a href="https://tracuubienso.com/oto/99A37107/" target = "_blank"><img src="https://tracuubienso.com/oto/ngang/small/99A37107.png"  class="img-fluid rounded" title="Thông tin biển số xe 99A-371.07"><br>
                            Thông tin biển số 99A-371.07</a>
                    </div>
                </div><div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 recent-license-plate-col">
                    <div class="white-block">
                        <a href="https://tracuubienso.com/oto/17A24334/" target = "_blank"><img src="https://tracuubienso.com/oto/ngang/small/17A24334.png"  class="img-fluid rounded" title="Thông tin biển số xe 17A-243.34"><br>
                            Thông tin biển số 17A-243.34</a>
                    </div>
                </div><div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 recent-license-plate-col">
                    <div class="white-block">
                        <a href="https://tracuubienso.com/oto/34A55039/" target = "_blank"><img src="https://tracuubienso.com/oto/ngang/small/34A55039.png"  class="img-fluid rounded" title="Thông tin biển số xe 34A-550.39"><br>
                            Thông tin biển số 34A-550.39</a>
                    </div>
                </div><div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 recent-license-plate-col">
                    <div class="white-block">
                        <a href="https://tracuubienso.com/oto/34A55039/" target = "_blank"><img src="https://tracuubienso.com/oto/ngang/small/34A55039.png"  class="img-fluid rounded" title="Thông tin biển số xe 34A-550.39"><br>
                            Thông tin biển số 34A-550.39</a>
                    </div>
                </div><div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 recent-license-plate-col">
                    <div class="white-block">
                        <a href="https://tracuubienso.com/oto/30H72190/" target = "_blank"><img src="https://tracuubienso.com/oto/ngang/small/30H72190.png"  class="img-fluid rounded" title="Thông tin biển số xe 30H-721.90"><br>
                            Thông tin biển số 30H-721.90</a>
                    </div>
                </div><div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 recent-license-plate-col">
                    <div class="white-block">
                        <a href="https://tracuubienso.com/oto/98A50690/" target = "_blank"><img src="https://tracuubienso.com/oto/ngang/small/98A50690.png"  class="img-fluid rounded" title="Thông tin biển số xe 98A-506.90"><br>
                            Thông tin biển số 98A-506.90</a>
                    </div>
                </div><div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 recent-license-plate-col">
                    <div class="white-block">
                        <a href="https://tracuubienso.com/oto/51H92102/" target = "_blank"><img src="https://tracuubienso.com/oto/ngang/small/51H92102.png"  class="img-fluid rounded" title="Thông tin biển số xe 51H-921.02"><br>
                            Thông tin biển số 51H-921.02</a>
                    </div>
                </div><div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 recent-license-plate-col">
                    <div class="white-block">
                        <a href="https://tracuubienso.com/oto/51H92102/" target = "_blank"><img src="https://tracuubienso.com/oto/ngang/small/51H92102.png"  class="img-fluid rounded" title="Thông tin biển số xe 51H-921.02"><br>
                            Thông tin biển số 51H-921.02</a>
                    </div>
                </div><div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 recent-license-plate-col">
                    <div class="white-block">
                        <a href="https://tracuubienso.com/oto/36A77860/" target = "_blank"><img src="https://tracuubienso.com/oto/ngang/small/36A77860.png"  class="img-fluid rounded" title="Thông tin biển số xe 36A-778.60"><br>
                            Thông tin biển số 36A-778.60</a>
                    </div>
                </div><div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 recent-license-plate-col">
                    <div class="white-block">
                        <a href="https://tracuubienso.com/oto/36A77860/" target = "_blank"><img src="https://tracuubienso.com/oto/ngang/small/36A77860.png"  class="img-fluid rounded" title="Thông tin biển số xe 36A-778.60"><br>
                            Thông tin biển số 36A-778.60</a>
                    </div>
                </div><div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 recent-license-plate-col">
                    <div class="white-block">
                        <a href="https://tracuubienso.com/oto/60A30093/" target = "_blank"><img src="https://tracuubienso.com/oto/ngang/small/60A30093.png"  class="img-fluid rounded" title="Thông tin biển số xe 60A-300.93"><br>
                            Thông tin biển số 60A-300.93</a>
                    </div>
                </div><div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 recent-license-plate-col">
                    <div class="white-block">
                        <a href="https://tracuubienso.com/oto/51F58339/" target = "_blank"><img src="https://tracuubienso.com/oto/ngang/small/51F58339.png"  class="img-fluid rounded" title="Thông tin biển số xe 51F-583.39"><br>
                            Thông tin biển số 51F-583.39</a>
                    </div>
                </div>
            </div>        </div>


    </div>
</div>


<footer class="site-footer section block bg-1" style="font-size: .9em;">
    <hr class="my-4">
    <div class="container pb-3" style="padding-top: 0px;">
        <div class="row gap-y text-center text-md-left">
            <div class="col-md-6 mr-auto"><p style="color: rgb(255, 87, 34);">TraCuuBienSo.com</p><p style="font-size: 15px;">Hỗ trợ kiểm tra tình trạng xe thông qua biển số</p></div>
            <div class="col-md-2">
                <nav class="nav flex-column">
                    <a target="_blank" href="/" class="nav-item py-2">Trang chủ</a>
                    <a target="_blank" href="#" class="nav-item py-2">Điều khoản dịch vụ</a>
                </nav>
            </div>
            <div class="col-md-2"><nav class="nav flex-column">
                    <a target="_blank" href="https://www.facebook.com/tracuubienso" class="nav-item py-2">Facebook Fanpage</a>
                    <a target="_blank" href="mailto:contact@tracuubienso.com" class="nav-item py-2">contact@tracuubienso.com</a></nav>
            </div>
        </div>
        <hr class="mt-4">
        <div class="row small align-items-center"><div class="col-md-4">
                <p class="mt-2 mb-md-0 color-2 text-center text-md-left" style="font-size: 13px;">© 2019 TCBS. All Rights Reserved</p></div>

            <div class="col-md-8">
                <nav class="nav justify-content-center justify-content-md-end">
                    <a href="https://facebook.com/tracuubienso" target="_blank" class="btn btn-circle btn-sm btn-2 mr-3 op-4"><i class="fa fa-facebook"></i></a>
                </nav>
            </div>
        </div>
    </div>
</footer>
<script src="/tcbs.js" type="247ab951bf3df6fc7066e8e4-text/javascript"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous" type="247ab951bf3df6fc7066e8e4-text/javascript"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous" type="247ab951bf3df6fc7066e8e4-text/javascript"></script>


<script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="247ab951bf3df6fc7066e8e4-|49" defer=""></script><script type="text/javascript">(function(){window['__CF$cv$params']={r:'70b3eefeb9e93cb2',m:'0Rma.iupxvO.hR7LVCoFd8FJWiw3piz2Y83F8Qommug-1652534451-0-AcV1bYWDYbJ7V+KtcdDnZLurM4oYKr1iI5b/Buh+BIzZsCz+0B596DG8YZWi1L2Zg3rLA/Q7AMYLPm/bZQU7kr8m6KP7DxV0TPQNS7iqEq4tejJ/Xjdo6BGJZAW5b5GURw==',s:[0xa4f3eb853b,0xcedb08a637],u:'/cdn-cgi/challenge-platform/h/b'}})();</script></body>
</html>
