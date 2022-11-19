<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
</head>

<body>
    <h2>[Thông Báo Xác Nhận Đổi Mật Khẩu]</h2>


    <h4>Bạn cần nhấn vào <a href="{{ route('datLaiMatKhau.get', $user) }}">link này</a> để xác nhận việc thay đổi mật
        khẩu của bạn</h4>

    <h4>Mã xác nhận hết hạn sau 2 phút! Bạn vui lòng nhập lại email để lấy lại mã xác nhận.</h4>

    <p>Cảm ơn!</p>
    <p>shopbcs./</p>
</body>

</html>