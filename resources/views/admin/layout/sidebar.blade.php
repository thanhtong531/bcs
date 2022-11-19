            <!-- sidebar @s -->
            <div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
                <div class="nk-sidebar-element nk-sidebar-head">
                    <div class="nk-sidebar-brand">
                        <a href="html/index.html" class="logo-link nk-sidebar-logo">
                            <img class="logo-light logo-img" src="{{asset('/images/logo.png')}}" srcset="./images/logo2x.png 2x" alt="logo">
                            <img class="logo-dark logo-img" src="{{asset('/images/logo-dark.png')}}" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                            <img class="logo-small logo-img logo-img-small" src="{{asset('/images/logo-small.png')}}" srcset="./images/logo-small2x.png 2x" alt="logo-small">
                        </a>
                    </div>
                    <div class="nk-menu-trigger mr-n2">
                        <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
                        <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                    </div>
                </div><!-- .nk-sidebar-element -->
                <div class="nk-sidebar-element">
                    <div class="nk-sidebar-content">
                        <div class="nk-sidebar-menu" data-simplebar>
                            <ul class="nk-menu">
                                <li class="nk-menu-item">
                                    <a href="html/ecommerce/index.html" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-dashboard-fill"></em></span>
                                        <span class="nk-menu-text">Điều khiển</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon"><em class="icon ni ni-tile-thumb-fill"></em></span>
                                        <span class="nk-menu-text">Danh mục dữ liệu</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="{{route('admin.danhmucdulieu.danhmucsp.hienthi')}}" class="nk-menu-link"><span class="nk-menu-text">Danh mục SP</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="{{route('admin.danhmucdulieu.loaisanpham.hienthi')}}" class="nk-menu-link"><span class="nk-menu-text">Loại SP</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="{{route('admin.danhmucdulieu.donvi.hienthi')}}" class="nk-menu-link"><span class="nk-menu-text">Đơn vị</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="{{route('admin.danhmucdulieu.nhasanxuat.hienthi')}}" class="nk-menu-link"><span class="nk-menu-text">Nhà sản xuất</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="{{route('admin.danhmucdulieu.vanchuyen.hienthi')}}" class="nk-menu-link"><span class="nk-menu-text">Vận chuyển</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="{{route('admin.danhmucdulieu.phuongthucthanhtoan.hienthi')}}" class="nk-menu-link"><span class="nk-menu-text">Phương thức TT</span></a>
                                        </li>
                                    </ul><!-- .nk-menu-sub -->
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon"><em class="icon ni ni-tile-thumb-fill"></em></span>
                                        <span class="nk-menu-text">Sản phẩm</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="{{route('admin.sanpham.hienthi')}}" class="nk-menu-link"><span class="nk-menu-text">Danh sách sản phẩm</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="{{route('admin.sanpham.them')}}" class="nk-menu-link"><span class="nk-menu-text">Thêm sản phẩm</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/project-list.html" class="nk-menu-link"><span class="nk-menu-text">Thuộc tính</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="html/project-list.html" class="nk-menu-link"><span class="nk-menu-text">Khuyến mãi</span></a>
                                        </li>
                                    </ul><!-- .nk-menu-sub -->
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="html/ecommerce/customers.html" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
                                        <span class="nk-menu-text">Customers</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="html/ecommerce/supports.html" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-chat-fill"></em></span>
                                        <span class="nk-menu-text">Supports</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="html/ecommerce/settings.html" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-opt-alt-fill"></em></span>
                                        <span class="nk-menu-text">Settings</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="html/ecommerce/integration.html" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-server-fill"></em></span>
                                        <span class="nk-menu-text">Integration</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-heading">
                                    <h6 class="overline-title text-primary-alt">Return to</h6>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="html/index.html" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-dashlite-alt"></em></span>
                                        <span class="nk-menu-text">Main Dashboard</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="html/components.html" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-layers-fill"></em></span>
                                        <span class="nk-menu-text">All Components</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                            </ul><!-- .nk-menu -->
                        </div><!-- .nk-sidebar-menu -->
                    </div><!-- .nk-sidebar-content -->
                </div><!-- .nk-sidebar-element -->
            </div>
            <!-- sidebar @e -->