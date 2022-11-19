<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PlayBoy | Trang chủ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link id="skin-default" rel="stylesheet" href="{{asset('assets/css/theme.css?ver=2.5.0')}}">
<link rel="stylesheet" href="{{asset('assets/css/dashlite.css?ver=2.5.0')}}">

    <link rel="stylesheet" href="{{ asset('css/base.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <script src="{{asset('assets/js/bundle.js?ver=2.5.0')}}"></script>
    <script src="{{asset('assets/js/scripts.js?ver=2.5.0')}}"></script>
    <script src="{{asset('assets/js/apps/messages.js?ver=2.5.0')}}"></script>
    @yield('lienKet-CSS-DauTrang')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.js"></script>
    @yield('lienKet-JS-DauTrang')
</head>

<body>
    @include('thanhCongCu')
    
    
    @yield('noiDung')

    @include('footer')

    <script src="{{ asset('js/index.js') }}"></script>
    @yield('lienKet-JS-CuoiTrang')

</body>

</html>