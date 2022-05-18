@include('vrp_frontend.layouts.default')
@section('content')
<div class="container">
    <div class="content">
        <div class="content-container">
            <div class="row">
                <hr class="my-3">
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="card" style="margin-bottom:1em">
                        <div class="card-header"><i class="fa fa-car"></i> Tra biển số</div>
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
@endsection
