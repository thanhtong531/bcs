<html>

<head>
    <title>Activation Email - Allaravel.com</title>
</head>

<body>
    <h2>[Thông Báo Xác Nhận Mật Khẩu]</h2>
    <h4>
        Chào mừng {{ $user->ten }} đã đăng ký thành viên tại shopbcs. Bạn hãy click vào đường <a
            href="{{ $user->lienketkichhoat }}">link này</a> để hoàn tất việc đăng ký.

    </h4>
    <h4>Mã xác nhận hết hạn sau 2 phút! Bạn vui lòng đăng nhập lại để lấy mã xác nhận.</h4>

    <p>Cảm ơn!</p>
    <p>shopbcs./</p>

</body>

</html>