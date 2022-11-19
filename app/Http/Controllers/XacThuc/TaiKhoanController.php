<?php

namespace App\Http\Controllers\XacThuc;

use App\Models\nhanvien;
use App\Models\khachhang;
use Illuminate\Http\Request;
use App\Classes\DichVuKichHoat;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Session\Session ;

class TaiKhoanController extends Controller
{
    protected $dvKichHoat;
    public function __construct(DichVuKichHoat $dvKichHoat)
    {
        $this->dvKichHoat = $dvKichHoat;
    }
    public function dangNhap()
    {
        return view('xacthuc.taiKhoan');
    }  
      
    public function dangKy()
    {
        return view('xacthuc.dangKy');
    }
    public function trangChuQuanLy()
    {
        if(Auth::guard('nv')->check()){
            return view('admin.index');
        }
        return redirect("dangNhap")->with('loiDangNhap', 'Bạn vui lòng đăng nhập để sử dụng hệ thống!');
    }
    
    public function dangNhapPost(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'email|exists:khachhang',
        ], [
            'email.email' => "Tên đăng nhập không hợp lệ",
            'email.exists' => 'Người dùng không tồn tại!',
            ]);
        
        $nhoToi = $request->has('nhotoi') ? true : false;
        $xacThuc = $request->only('email', 'password');
        $user = false;
        if($validator->fails()){
            $user = khachhang::where('sdt', $request->email)->first();
            if($user){
                if (Auth::guard('kh')->attempt(['sdt' => $request->email, 'password' => $request->password], $nhoToi)) {
                    return redirect()->intended('/')->with('thongBaoChaoMung','Chúc mừng bạn bạn đến với shopbcs!');
                }
                else return redirect("dangNhap")->with(['loiDangNhap' => 'Mật khẩu đăng nhập không hợp lệ!']);
            }
            else if($user = nhanvien::where('sdt', $request->email)->first()){
                if (auth()->guard('nv')->attempt(['sdt' => $request->email, 'password' => $request->password], $nhoToi)) {
                    return redirect()->intended('/admin')->with('thongBaoChaoMung', 'Chúc mừng Admin đã đăng nhập thành công!');
                }
                else return redirect("dangNhap")->with(['loiDangNhap' => 'Mật khẩu đăng nhập không hợp lệ!']);
            }
            else if($user = nhanvien::where('email', $request->email)->first()){
                if (auth()->guard('nv')->attempt($xacThuc, $nhoToi)) {
                    return redirect()->intended('/admin')->with('thongBaoChaoMung','Chúc mừng Admin đã đăng nhập thành công!');
                }
                else return redirect("dangNhap")->with(['loiDangNhap' => 'Mật khẩu đăng nhập không hợp lệ!']);
            }
            else {
                $validator->errors()->add('formDangNhap', 'formDangNhap');
                return back()->withErrors($validator)->withInput();
            }
        }
        if(!$user){
            $user = khachhang::where('email', $request->email)->first();
        }
        if (!$user->kichhoat) {
            if(!$this->dvKichHoat->guiEmailKichHoat($user)){
                return back()->with('dangNhapThanhCong', 'Link xác thực đã được gửi đến email '.$request->email.' Link xác thực sẽ hết hiệu lực trong 2 phút.');
            }
            auth()->logout();
            return back()->with('dangNhapThanhCong', 'Bạn cần xác thực tài khoản, chúng tôi đã gửi mã xác thực vào email '.$request->email.', hãy kiểm tra và làm theo hướng dẫn.');
        }

        if (Auth::guard('kh')->attempt($xacThuc, $nhoToi)) {
            return redirect()->intended('/')->with('thongBaoChaoMung','Chúc mừng bạn đã đăng nhập thành công!');
        }
        return redirect("dangNhap")->with(['loiDangNhap' => 'Thông tin đăng không hợp lệ!']);
    }
      
    public function dangKyPost(Request $request)
    {  
        $thongBao = [
            'sdt.unique' => "Số điện thoại đã được đăng ký!",
            'email.required' => 'Địa chỉ email là được yêu cầu!',
            'email.unique' => 'Email đã được đăng ký!',
            'g-recaptcha-response.required' => "Captcha là được yêu cầu.",
            'g-recaptcha-response.recaptcha' => "Tôi không phải là người máy.",
            ];

        if (auth()->guard('nv')->check()) {
            $validator = Validator::make($request->all(), [
                'sdt' => 'unique:nhanvien',
                'email' => 'required|unique:nhanvien',
                'g-recaptcha-response'=>'required|recaptcha',
            ], $thongBao);
        }
        else if ($request->email){
            $validator = Validator::make($request->all(), [
                'sdt' => 'unique:khachhang',
                'email' => 'unique:khachhang',
                'g-recaptcha-response'=>'required|recaptcha',
            ], $thongBao);
        }else {
            $validator = Validator::make($request->all(), [
                'sdt' => 'unique:khachhang',
                'g-recaptcha-response'=>'required|recaptcha',
            ], $thongBao);
        }
        if($validator->fails()) {
            $validator->errors()->add('formDangKy', 'formDangKy');
            return back()->withErrors($validator)->withInput();
        }   
        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        if(auth()->guard('nv')->check()){
            $data['kichhoat'] = true;
            $user = nhanvien::create($data);
            return redirect()->intended('/admin')->with('thongBaoChaoMung','Thêm tài khoản thành công!');
        }
        else $user = khachhang::create($data);

        if ($request->email) {
            if (!$this->dvKichHoat->guiEmailKichHoat($user)) {
                return back()->with('dangNhapThanhCong', 'Không thể gửi email xác thực, bạn vui lòng đăng nhập để kích hoạt tài khoản!.');
            }
            return redirect('dangNhap')->with('dangNhapThanhCong', 'Chúng tôi đã gửi cho bạn email xác thực, bạn vui lòng kiểm tra email và thực hiện xác thực theo hướng dẫn.');
        }else {
            $user->kichhoat = true;
            $user->save();
            Auth::guard('kh')->login($user);
            return redirect()->intended('/')->with('thongBaoChaoMung', 'Đăng ký tài khoản thành công!');
        }
    }
    
    public function trangChu()
    {
        if(Auth::guard('kh')->check()){
            return view('index');
        }
        else if(Auth::guard('nv')->check()){
            return view('admin.index');
        }
  
        return redirect("dangNhap")->with('loiDangNhap', 'Bạn vui lòng đăng nhập để sử dụng hệ thống!');
    }
    
    public function dangXuat() {
        //Session::flush();
        if(Auth::guard('kh')->check()){
            Auth::guard('kh')->logout();
        }
        else auth()->guard('nv')->logout();
  
        return Redirect('dangNhap');
    }

    public function kichHoatKhachHang($token)
    {
        if(!$this->dvKichHoat->thoiGianMaXacThuc($token)){
            return redirect('/dangNhap')->with(['loiDangNhap' => 'Link xác thực đã hết hạn, bạn vui lòng đăng nhập lại để nhận mã xác nhận!']);
        }
        if ($user = $this->dvKichHoat->kichHoatKhachHang($token)) {
            auth()->guard('kh')->login($user);
            return redirect('/')->with('thongBaoChaoMung','Xác thực, đăng nhập thành công!');
        }
        return redirect('/dangNhap')->with(['loiDangNhap' => 'Lỗi xảy ra trong quá trình xác thực! bạn vui lòng đăng nhập lại']);
    }
    
}