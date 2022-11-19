@extends('boCuc')

@section('lienKet-CSS-DauTrang')
<link rel="stylesheet" href="{{ asset('css/khachHang.css') }}" />
@endsection

@section('lienKet-JS-DauTrang')
<script src='https://www.google.com/recaptcha/api.js?hl=vi'></script>
@endsection

@section('noiDung')
<div class="grid khungHienThi">
    <div class="wrapper">
        <div class="info">
            <div class="info__welcome">
                <h5 class="info___welcome-heading">Xin chào, Thanh Tòng</h5>
                <ul class="info__list">
                    <li><a class="info__list-item-link active" href="">Thông tin chung</a></li>
                    <li><a class="info__list-item-link" href="">Số địa chỉ</a></li>
                    <li><a class="info__list-item-link" href="">Đơn hàng của tôi</a></li>
                    <li><a class="info__list-item-link" href="">Đơn hàng đã hủy</a></li>
                    <li><a class="info__list-item-link" href="">Đăng xuất</a></li>
                </ul>
            </div>

            <div class="info__general">

                <div class="container mb-4">
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="card h-100">
                                <div class="card-header bg-white">
                                    <h2 class="text-danger">Hồ Sơ Của Tôi</h2>
                                    <p>Quản lý thông tin hồ sơ để bảo mật tài khoản</p>
                                </div>
                                <div class="card-body">

                                        @if (Session::has('dangKyThanhCong'))
                                        <div class="alert alert-danger mb-4" role="alert">
                                            {{ Session::get('dangKyThanhCong') }}
                                        </div>
                                        @endif

                                        <form accept-charset='UTF-8' action="{{ route('dangKy.get') }}"
                                            class='formDangKy' method='post'>
                                            @csrf

                                            <div class="form-group row">
                                            <label for="ten" class="col-md-2 text-md-right col-form-label">Tên Người Dùng:</label>
                                            
                                                <div class="col-md-6">
                                                    <input type="text" id="ten" class="form-control" name="ten"
                                                        value="{{auth()->guard('kh')->user()->ten}}" placeholder="Tên người dùng"
                                                        autofocus>
                                                    @if ($errors->has('ten'))
                                                    <span class="text-danger">{{ $errors->first('ten') }}</span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                            <label for="gioitinh" class="col-md-2 col-form-label text-md-right">Giới Tính:</label>
                                                <div class="col-md-6">
                                                    <select class="mt-3 form-select" id="gioitinh" name="gioitinh">
                                                        <option value="Nam">Nam</option>
                                                        <option value="Nữ">Nữ</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="ngaysinh" class="col-md-2 col-form-label text-md-right">Ngày Sinh:</label>
                                                <div class="col-md-6">
                                                    <input type="date" placeholder="mm/dd/yyyy" id="ngaysinh" name="ngaysinh"
                                                    value="{{auth()->guard('kh')->user()->ngaysinh}}"
                                                        class="mt-3 form-control" />
                                                </div>
                                                
                                                <div class="col-md-2 offset-1">
                                                    <input type="file" id="lsp_hinh" style="display: none">
                                                    <label class="form-label" for="lsp_hinh">chọn hình sản phẩm</label>
                                                    <div class="upload-zone small bg-lighter my-2">
                                                        <div class="dz-message">
                                                            <span class="dz-message-text image-cover ">Kéo và thả file</span>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>

                                            <div class="form-group row">
                                            <label for="sdt" class="col-md-2 col-form-label text-md-right">Số Điện Thoại:</label>
                                                <div class="col-md-6">
                                                    <input type="sdt" placeholder="Số điện thoại" id="sdt" name="sdt"
                                                    value="{{auth()->guard('kh')->user()->sdt}}"
                                                        class="mt-3 form-control" />
                                                    @if ($errors->has('sdt') && $errors->has('formDangKy'))
                                                    <span class="text-danger">{{ $errors->first('sdt') }}</span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                            <label for="email" class="col-md-2 col-form-label text-md-right">Email:</label>
                                                <div class="col-md-6">
                                                    <input type="email" placeholder="Email" id="email" name="email"
                                                    value="{{auth()->guard('kh')->user()->email}}"
                                                        class="mt-3 form-control" />
                                                    @if ($errors->has('email') && $errors->has('formDangKy'))
                                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-md-6 offset-md-4">
                                                    <button class="w-25 mt-3 btn btn-success" type='submit'>Cập Nhật</button>
                                                </div>
                                            </div>

                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="info__sale">
            <h3>Bạn chưa mua sản phẩm nào</h3>
        </div>
    </div>
</div>
@endsection

@section('lienKet-JS-CuoiTrang')
<script src="{{ asset('js/auth/dangNhap.js') }}"></script>

@endsection