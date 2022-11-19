<section class="nav-left">
    <div class="container">
        <div class="nav-container">
            <ul class="nav flex-column nav-lefts">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Active</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    @if (session('thongBaoChaoMung'))
                    <div class="alert alert-success thongbao" role="alert">
                        {{ session('thongBaoChaoMung') }}
                    </div>
                    @endif
                </li>
            </ul>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://theme.hstatic.net/1000343028/1000824661/14/slider_5.jpg?v=337"
                            class="d-block w-100" alt="..." />
                    </div>
                    <div class="carousel-item">
                        <img src="https://theme.hstatic.net/1000343028/1000824661/14/slider_8.jpg?v=337"
                            class="d-block w-100" alt="..." />
                    </div>
                    <div class="carousel-item">
                        <img src="https://theme.hstatic.net/1000343028/1000824661/14/slider_2.jpg?v=337"
                            class="d-block w-100" alt="..." />
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Trước</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Tiếp</span>
                </button>
            </div>
        </div>
    </div>
</section>