<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Login</title>

    <link href="backend/css/bootstrap.min.css" rel="stylesheet">
    <link href="backend/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="backend/css/animate.css" rel="stylesheet">
    <link href="backend/css/style.css" rel="stylesheet">
    <link href="backend/css/cserr.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">KQ+</h1>

            </div>
            <h3>Welcome to KQ+</h3>
            <p>VUI LÒNG ĐĂNG NHẬP
                <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
            </p>
           
            <form class="m-t" role="form" method="POST" action="{{route('auth.login')}}">
                @csrf
                <div class="form-group">
                    <input 
                        type="text"   
                        name="email" 
                        class="form-control" 
                        placeholder="Username"
                        value="{{old('email')}}">
                </div>
                {{-- check required email  --}}
                @if ($errors->has('email'))
                    <span class="error-message">
                        *{{$errors->first('email')}}
                    </span>
                @endif
                <div class="form-group">
                    <input 
                        type="password" 
                        name="password"
                        class="form-control" 
                        placeholder="Password" 
                        >
                </div>
                @if ($errors->has('password'))
                    <span class="error-message">
                        *{{$errors->first('password')}}
                    </span>
                @endif
                <button type="submit" class="btn btn-primary block full-width m-b">Đăng Nhập</button>

                <a href="#"><small>Quên Mật Khẩu?</small></a>
                <p class="text-muted text-center"><small>Bạn chưa có tài khoản mới ?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="register.html">Tạo Tài Khoản </a>
            </form>
            <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="backend/js/jquery-3.1.1.min.js"></script>
    <script src="backend/js/bootstrap.min.js"></script>

</body>

</html>
