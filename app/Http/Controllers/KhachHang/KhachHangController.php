<?php

namespace App\Http\Controllers\KhachHang;

use Exception;
use Carbon\Carbon;
use App\Models\khachhang;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Session\Session ;

class KhachHangController extends Controller
{
    function hoSo(){
        return view('khachhang.hoSo', ['kh' => Auth::guard('kh')->user()]);
    }

    function capNhatHoSo(){
        return view('khachhang.hoSo');
    }
}
