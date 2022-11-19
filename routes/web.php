<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sanpham\SanphamController;
use App\Http\Controllers\XacThuc\TaiKhoanController;
use App\Http\Controllers\danhmucdulieu\NSXController;
use App\Http\Controllers\XacThuc\XacThucFBGController;

use App\Http\Controllers\danhmucdulieu\DonViController;
use App\Http\Controllers\KhachHang\KhachHangController;
use App\Http\Controllers\XacThuc\QuenMatKhauController;
use App\Http\Controllers\danhmucdulieu\LoaiSPController;
use App\Http\Controllers\danhmucdulieu\DanhMucSPController;
use App\Http\Controllers\danhmucdulieu\VanChuyenController;
use App\Http\Controllers\danhmucdulieu\PhuongThucTTController;

// dang nhap khach hang
Route::get('/', [TaiKhoanController::class, 'trangChu'])->name('trangChu'); 
Route::get('dangNhap', [TaiKhoanController::class, 'dangNhap'])->name('dangNhap.get');
Route::post('dangNhap', [TaiKhoanController::class, 'dangNhapPost'])->name('dangNhap.post'); 
Route::get('dangKy', [TaiKhoanController::class, 'dangKy'])->name('dangKy.get');
Route::post('dangKy', [TaiKhoanController::class, 'dangKyPost'])->name('dangKy.post'); 
Route::get('dangXuat', [TaiKhoanController::class, 'dangXuat'])->name('dangXuat');

// dang nhap bang email/facebook
Route::get('/auth/{provider}', [XacThucFBGController::class, 'dieuHuongDenNCC']);
Route::get('/auth/{provide}/callback', [XacThucFBGController::class, 'xulyCacLoaiDangNhap']);

// kich hoat khach hang
Route::get('nguoiDung/kichHoat/{token}', [TaiKhoanController::class, 'kichHoatKhachHang'])->name('nguoiDung.kichHoat');

Route::get('quenMatKhau', [QuenMatKhauController::class, 'quenMatKhau'])->name('quenMatKhau.get');
Route::post('quenMatKhau', [QuenMatKhauController::class, 'quenMatKhauPost'])->name('quenMatKhau.post'); 
Route::get('datLaiMatKhau/{token}', [QuenMatKhauController::class, 'datLaiMatKhau'])->name('datLaiMatKhau.get');
Route::post('datLaiMatKhau', [QuenMatKhauController::class, 'datLaiMatKhauPost'])->name('datLaiMatKhau.post');
Route::post('datLaiMatKhauBangDienThoai', [QuenMatKhauController::class, 'datLaiMatKhauBangDienThoai'])->name('datLaiMatKhauBangDienThoai.post');

// xu ly khach hang
Route::prefix('khachhang')->namespace('KhachHang')->name('khachhang.')->group(function () {
    Route::get('/hoSo', [KhachHangController::class, 'hoSo'])->name('hoSo');
    Route::get('/capNhatHoSo', [KhachHangController::class, 'capNhatHoSo'])->name('capNhatHoSo');
});

// xu ly admin
Route::prefix('admin')->namespace('Admin')->name('admin.')->group(function (){
    // Route::get('/',[TaiKhoanController::class, 'trangChuQuanLy'])->name('trangChuQuanLy');
    
    Route::get('/', function(){
        return view("admin.index");
    });

    Route::prefix('caidat')->namespace('Caidat')->name('caidat.')->group(function () {
        Route::prefix('bangqc')->namespace('Bangqc')->name('bangqc.')->group(function () {
            Route::GET('hienthi', function () {
                return view('admin.caidat.bangqc.hienthi');
            })->name('hienthi');
        });
    });

    Route::prefix('sanpham')->namespace('Sanpham')->name('sanpham.')->group(function () {
        Route::GET('hienthi', [SanphamController::class, 'index'])->name('hienthi');
        Route::GET('them', [SanphamController::class, 'create'])->name('them');
        Route::GET('sua/{id}', [SanphamController::class, 'edit'])->name('sua');
    }); 
    Route::prefix('danhmucdulieu')->namespace('Danhmucdulieu')->name('danhmucdulieu.')->group(function (){
        Route::prefix('danhmucsp')->namespace('Danhmucsp')->name('danhmucsp.')->group(function (){
            Route::GET('hienthi',[DanhMucSPController::class,'index'])->name('hienthi');
            Route::POST('them',[DanhMucSPController::class,'create'])->name('them');
            Route::GET('xoa/{id}',[DanhMucSPController::class,'destroy'])->name('xoa');
        });
        Route::prefix('loaisanpham')->namespace('Loaisanpham')->name('loaisanpham.')->group(function (){
            Route::GET('hienthi',[LoaiSPController::class,'index'])->name('hienthi');
            Route::POST('them',[LoaiSPController::class,'create'])->name('them');
            Route::GET('xoa/{id}',[LoaiSPController::class,'destroy'])->name('xoa');
        });
        Route::prefix('donvi')->namespace('Donvi')->name('donvi.')->group(function (){
            Route::GET('hienthi',[DonViController::class,'index'])->name('hienthi');
            Route::POST('them',[DonViController::class,'create'])->name('them');
            Route::GET('xoa/{id}',[DonViController::class,'destroy'])->name('xoa');
        });
        Route::prefix('nhasanxuat')->namespace('Nhasanxuat')->name('nhasanxuat.')->group(function (){
            Route::GET('hienthi',[NSXController::class,'index'])->name('hienthi');
            Route::POST('them',[NSXController::class,'create'])->name('them');
            Route::GET('xoa/{id}',[NSXController::class,'destroy'])->name('xoa');
        });
        Route::prefix('vanchuyen')->namespace('Vanchuyen')->name('vanchuyen.')->group(function (){
            Route::GET('hienthi',[VanChuyenController::class,'index'])->name('hienthi');
            Route::POST('them',[VanChuyenController::class,'create'])->name('them');
            Route::GET('xoa/{id}',[VanChuyenController::class,'destroy'])->name('xoa');
        });
        Route::prefix('phuongthucthanhtoan')->namespace('Phuongthucthanhtoan')->name('phuongthucthanhtoan.')->group(function (){
            Route::GET('hienthi',[PhuongThucTTController::class,'index'])->name('hienthi');
            Route::POST('them',[PhuongThucTTController::class,'create'])->name('them');
            Route::GET('xoa/{id}',[PhuongThucTTController::class,'destroy'])->name('xoa');
        });
    });
});
