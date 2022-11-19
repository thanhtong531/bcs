<section id="topbar">
    <div class="d-none d-md-flex d-lg-flex col-12 col-lg-auto me-lg-auto justify-content-end mb-2 mb-md-0 bg-dark">
        <div class="container">

            <ul class="d-flex justify-content-end">
                @if(auth()->guard('kh')->check() || auth()->guard('nv')->check())
                <li><a href="#" class="nav-link px-2 text-white">Kiểm tra đơn hàng</a></li>
                {{-- <li><a href="{{ route('khachhang.hoSo') }}" class="nav-link px-2 text-white">Hồ Sơ</a></li>
                <li><a href="{{ route('dangXuat') }}" class="nav-link px-2 text-white">Đăng xuất</a></li> --}}
                <li class="dropdown-show"><a href="#" class="nav-link px-2 text-white ">
                ( {{ auth()->guard('kh')->user() ? auth()->guard('kh')->user()->ten : auth()->guard('nv')->user()->ten }} ) </a>
                    <ul class="dropdown-hidden">
                        <li><a href="{{ route('khachhang.hoSo') }}" class="nav-link px-2 text-white">Hồ Sơ</a></li>
                        <li><a href="{{ route('dangXuat') }}" class="nav-link px-2 text-white">Đăng xuất</a></li>
                    </ul>
            </li>
                

                
                @else
                <li><a href="{{ route('dangNhap.get') }}" class="nav-link px-2 text-white">ĐĂNG NHẬP</a></li>
                <li><a href="{{ route('dangKy.get') }}" class="nav-link px-2 text-white">ĐĂNG KÝ</a></li>
                @endif
            </ul>

        </div>
    </div>
    <header class="p-3 text-white header position-relative">
        <div class="container">
            <div
                class="d-flex justify-content-center justify-content-lg-between align-items-center justify-content-md-between  gap-4">
                <a href="#!" class="mb-lg-0 text-white text-decoration-none logo">
                    <img src="images/infoShop/logo-removebg.png" alt="" width="100" style="object-fit: cover" />
                </a>
                <form class="position-relative form-search">
                    <input type="text" class="form-input" placeholder="Tìm kiếm sản phẩm..." />
                    <button class="search-icon">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                </form>

                <div class="text-end cart">
                    <!-- <div class="d-flex align-items-center  cart"> -->
                    <a href="#" class="text-decoration-none text-white icon-cart fs-md-1">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        <span class="quantity-cart">20</span>
                    </a>
                    <span class="d-lg-flex d-md-flex align-items-center fs-lg-5 fs-md-1 fw-bold contact">
                        <i class="fa fa-volume-control-phone icon-cart fs-md-1" aria-hidden="true"></i>
                        0342613187</span>
                </div>
            </div>
        </div>
        <nav class="nav-extend pt-3 nav-toggle">
            <div class="container">
                <div class="d-flex align-items-center flex-center">
                    <div class="dropdown me-3">
                        <a class="dropdown-toggle text-decoration-none text-white " href="#" role="button"
                            id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"> Danh mục </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </li>
                        </ul>
                    </div>
                    <ul class="nav d-flex align-items-center">
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center text-white gap-2 gap-2 fw-normal"
                                aria-current="page" href="#">
                                <img src="images/infoShop/coupon.png" alt="" width="30" height="30" class="nav-img" /> Mã Giảm
                                Giá</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center text-white gap-2 fw-normal" href="#">
                                <img src="images/infoShop/tintuc.png" alt="" width="30" height="30" class="nav-img" /> Tin
                                Tức</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center text-white fw-normal" href="#">
                                <img src="images/infoShop/flashsale.png" alt="" width="30" height="30" class="mr-2 nav-img" /> FL
                                <span class="flash-sale">⚡</span>SH SALE</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
</section>