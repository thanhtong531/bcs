@extends('admin.master')
@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Danh mục sản phẩm</h3>
                                @if ($errors->any())
                                    @foreach ($errors->all() as $error)
                                        <div class="alert alert-danger" role="alert">{{ $error }}</div>
                                    @endforeach
                                @endif
                                @if (session('thanhcong'))
                                    <div class="alert alert-success" role="alert">{{ session('thanhcong') }}</div>
                                @endif
                                @if (session('thatbai'))
                                    <div class="alert alert-danger" role="alert">{{ session('thatbai') }}</div>
                                @endif
                                @if (session('canhbao'))
                                    <div class="alert alert-warning" role="alert">{{ session('canhbao') }}</div>
                                @endif
                            </div><!-- .nk-block-head-content -->
                            <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle">
                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1"
                                        data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                    <div class="toggle-expand-content" data-content="pageMenu">
                                        <ul class="nk-block-tools g-3">
                                            <li>
                                                <div class="drodown">
                                                    <a href="#"
                                                        class="dropdown-toggle dropdown-indicator btn btn-outline-light btn-white"
                                                        data-toggle="dropdown">Trạng thái</a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><span>Đang hoạt động</span></a></li>
                                                            <li><a href="#"><span>Ngừng hoạt động</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nk-block-tools-opt">

                                                <a href="{{ route('admin.sanpham.them') }}"
                                                    class="btn btn-primary d-none d-md-inline-flex"><em
                                                        class="icon ni ni-plus"></em><span>Thêm</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="card card-bordered">
                            <div class="card-inner-group">
                                <div class="card-inner p-0">
                                    <div class="nk-tb-list">
                                        <div class="nk-tb-item nk-tb-head">
                                            <div class="nk-tb-col nk-tb-col-check">
                                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                                    <input type="checkbox" class="custom-control-input" id="pid">
                                                    <label class="custom-control-label" for="pid"></label>
                                                </div>
                                            </div>
                                            <div class="nk-tb-col tb-col-sm"><span>Hình</span></div>
                                            <div class="nk-tb-col"><span>Tên sản phẩm</span></div>
                                            <div class="nk-tb-col"><span>Số lượng</span></div>
                                            <div class="nk-tb-col"><span>Giá bán</span></div>
                                            <div class="nk-tb-col"><span>Tình trạng</span></div>
                                            <div class="nk-tb-col nk-tb-col-tools">
                                                <ul class="nk-tb-actions gx-1 my-n1">
                                                    <li class="mr-n1">
                                                        <div class="dropdown">
                                                            <a href="#"
                                                                class="dropdown-toggle btn btn-icon btn-trigger"
                                                                data-toggle="dropdown"><em
                                                                    class="icon ni ni-more-h"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="#"><em
                                                                                class="icon ni ni-trash"></em><span>Xóa tất
                                                                                cả</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div><!-- .nk-tb-item -->
                                        @foreach ($sanphams as $sanpham)
                                            <div class="nk-tb-item">
                                                <div class="nk-tb-col nk-tb-col-check">
                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                        <input type="checkbox" class="custom-control-input" id="pid1">
                                                        <label class="custom-control-label" for="pid1"></label>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-col tb-col-sm">
                                                    <span class="tb-product">
                                                        <img src="./images/product/{{ $sanpham->sp_hinh }}" alt=""
                                                            class="thumb">
                                                    </span>
                                                </div>
                                                <div class="nk-tb-col tb-col-sm">
                                                    <span class="tb-product">
                                                        <span class="title">{{ $sanpham->sp_ten }}</span>
                                                    </span>
                                                </div>
                                                <div class="nk-tb-col tb-col-sm">
                                                    <span class="tb-product">

                                                        <span class="title">{{ $sanpham->sp_soluong }}</span>
                                                    </span>
                                                </div>
                                                <div class="nk-tb-col tb-col-sm">
                                                    <span class="tb-product">
                                                        @if ($sanpham->sp_giamgia > 0)
                                                            <del>{{ number_format($sanpham->sp_giaban) }}</del>
                                                            <span>-</span>
                                                            <span class="title">{{ number_format($sanpham->sp_giamgia) }}
                                                            </span>
                                                        @else
                                                            <span class="title">{{ number_format($sanpham->sp_giaban) }}
                                                            </span>
                                                        @endif
                                                    </span>
                                                </div>
                                                <div class="nk-tb-col">
                                                    @if ($sanpham->sp_tinhtrang == 0)
                                                        <span class="dot bg-warning d-mb-none"></span>
                                                        <span
                                                            class="badge badge-sm badge-dot has-bg badge-warning d-none d-mb-inline-flex">Ngừng
                                                            hoạt động</span>
                                                    @else
                                                        <span class="dot bg-success d-mb-none"></span>
                                                        <span
                                                            class="badge badge-sm badge-dot has-bg badge-success d-none d-mb-inline-flex">Đang
                                                            hoạt động</span>
                                                    @endif
                                                </div>
                                                <div class="nk-tb-col nk-tb-col-tools">
                                                    <ul class="nk-tb-actions gx-1 my-n1">
                                                        <li class="mr-n1">
                                                            <div class="dropdown">
                                                                <a href="#"
                                                                    class="dropdown-toggle btn btn-icon btn-trigger"
                                                                    data-toggle="dropdown"><em
                                                                        class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a
                                                                                href="{{ route('admin.sanpham.sua', ['id' => 2]) }}"><em
                                                                                    class="icon ni ni-edit"></em><span>Sửa</span></a>
                                                                        </li>
                                                                        <li><a href="#"><em
                                                                                    class="icon ni ni-trash"></em><span>Xóa</span></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        @endforeach
                                        <!-- .nk-tb-item -->
                                    </div><!-- .nk-tb-list -->
                                </div>
                                <div class="card-inner">
                                    <div class="nk-block-between-md g-3">
                                        <div class="g">
                                            <ul class="pagination justify-content-center justify-content-md-start">
                                                <li
                                                    class="page-item {{ $sanphams->currentPage() == 1 ? ' disabled' : '' }}">
                                                    <a class="page-link" href="{{ $sanphams->previousPageUrl() }}"><em
                                                            class="icon ni ni-chevrons-left"></em></a>
                                                </li>
                                                @for ($i = 1; $i <= $sanphams->lastPage(); $i++)
                                                    <li
                                                        class="page-item {{ $sanphams->currentPage() == $i ? ' active' : '' }}">
                                                        <a class="page-link"
                                                            href="{{ $sanphams->url($i) }}">{{ $i }}</a>
                                                    </li>
                                                @endfor
                                                <li
                                                    class="page-item {{ $sanphams->currentPage() == $sanphams->lastPage() ? ' disabled' : '' }}">
                                                    <a class="page-link" href="{{ $sanphams->nextPageUrl() }}"><em
                                                            class="icon ni ni-chevrons-right"></em></a>
                                                </li>
                                            </ul><!-- .pagination -->
                                        </div>
                                        <div class="g">
                                        Hiển thị từ {{$sanphams->firstItem()}} đến {{$sanphams->lastItem()}} của {{$sanphams->total()}} sản phẩm
                                        </div>
                                    </div><!-- .nk-block-between -->
                                </div>
                            </div>
                        </div>
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>




    <script src="{{ asset('/assets/js/jquery-3.6.0.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#keyword").keyup(function() {
                var keyword = $(this).val();
                console.log(keyword);
                $.ajax({
                    type: "GET",
                    url: "loaithucuong/searchltu",
                    data: {
                        keyword: keyword,
                    },
                    datatype: "JSON",
                    success: function(data) {
                        $(".searchltu").html(data);
                    },
                })
            });
        });
    </script>
@endsection
