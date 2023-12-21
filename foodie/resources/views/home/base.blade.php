<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{env("APP_NAME")}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
      
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
      
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
</head>

<body>
    <div class="navbar navbar-expand-lg bg-dark ">
        <div class="container ">

            <div class="col-3">
                <a href="" class="navbar-brand"><img src="https://www.hotandsweets.in/assets/logo-light.png" height="auto" width="100px" class="ms-5 me-5" alt=""></a>
            </div>
            <div class="col-7 ">
                <div class="navbar-nav ">
                    <a href="{{route('home.index')}}" class="nav-item nav-link text-white  ms-5 mt-3 ">Home</a>

                    @auth
                        <a href="" class="nav-item nav-link text-white  ms-3 mt-3 text-capitalize">{{auth()->user()->name}}</a>
                        <a href="{{route('logout')}}" class="nav-item nav-link text-white  ms-3 mt-3 ">Logout</a>
                    @endauth
                    @guest
                    <a href="{{route('login')}}" class="nav-item nav-link text-white  ms-3 mt-3 ">Login</a>
                    <a href="{{route('signup')}}" class="nav-item nav-link text-white  ms-3 mt-3 me-5 ">Register</a>
                    @endguest
       
                    <a href="" class="nav-item nav-link text-white  ms-3 mt-3 ">Download App</a>
                </div>
            </div>
            <div class="col-2">

                <div class="navbar-nav">
                    <a href="{{route('cart')}}" class="nav-item nav-link text-white ms-5 me-5">
                        <img width="64" height="64" src="https://img.icons8.com/external-solidglyph-m-oki-orlando/64/FFFFFF/external-Cart-pharmacy-solidglyph-m-oki-orlando.png" alt="external-Cart-pharmacy-solidglyph-m-oki-orlando" />
                    </a>
                </div>
            </div>
        </div>
    </div>
@section('content')
@show
 
<script>
    toastr.options = {
        "closeButton":true,
    }
    @if(session('error'))
        toastr.error("{{session('error')}}")
    @endif
    @if(session('success'))
        toastr.success("{{session('success')}}")
    @endif

</script>
</body>

</html>