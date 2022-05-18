@extends('vrp_frontend.layouts.default')
@section('content')
<div class="container">
    <div class="content">
        <div class="content-container">
            <div class="row"><hr class="my-3"></div>
            <div class="row">
                <div class="col-md-8">
                    <div class="card" style="margin-bottom:1em">
                        <div class="card-header"><i class="fa fa-car"></i> Đóng góp thông tin xe oto qua biển số</div>
                        <div class="card-body">
                            <form action="post" id="bsxe" class="needs-validation" novalidate>
                                <div class="form-group row">
                                    <label for="bienso" class="col-sm-2 col-form-label">Biển số xe: *</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="bienso" name="bienso" placeholder="30A-123.45" pattern="^([0-9]){2}([a-zA-Z])(-|)([0-9]){3}(\.|)([0-9]){1,2}$" required>
                                        <div class="invalid-feedback">Vui lòng nhập biển số dạng 29A-123.45, 59F-1234 hoặc 30F1234 </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="url" class="col-sm-2 col-form-label">Hãng xe: *</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="brand" name="brand" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="url" class="col-sm-2 col-form-label">Đường dẫn chi tiết: </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="url" name="url" placeholder="" aria-describedby="urlHelp" required>
                                        <small id="urlHelp" class="form-text text-muted">Có thể điền link trang web, bài báo, bài đăng Facebook để website xác nhận.</small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="imgurl" class="col-sm-2 col-form-label">Hình ảnh: *</label>
                                    <div class="col-sm-10">
                                        <input type="url" class="form-control" id="imgurl" name="imgurl" placeholder="">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block" id="subm">
                                    <div class="text-center">
                                        <span id="load" class="spinner-border spinner-border-sm" role="status" aria-hidden="true" style="display: none; width: 1.5rem; height: 1.5rem;"></span> Gửi thông tin
                                    </div>
                                </button>
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
        </div>
    </div>
</div>
@endsection
