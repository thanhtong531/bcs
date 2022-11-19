@extends('boCuc')

@section('noiDung')
@include('menu')

@include('sanpham.flashSale');

<div class="ads my-4">
    <div class="container">
        <img src="https://theme.hstatic.net/1000343028/1000824661/14/banner.jpg?v=337" alt="">
    </div>
</div>

@include('sanpham.danhMucPhoBien');
@include('sanpham.sanPhamThuongHieu');

<section id="order">
    <div class="container">
        <img src="https://theme.hstatic.net/1000343028/1000824661/14/banner-bottom.png?v=396" alt="">
    </div>
</section>
@endsection