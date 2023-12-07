<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel || {{env("APP_NAME")}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="navbar navbar-expand-lg bg-dark ">
        <div class="container ">


            <a href="" class="navbar-brand ms-5 text-white"><img src="https://www.hotandsweets.in/assets/logo-light.png" height="auto" width="100px"  alt="">Admin Panel</a>


            <div class="navbar-nav ">
               
                <a  href="" class="nav-item nav-link text-white  ms-3 mt-3 ">Logout</a>

            </div>


        </div>
    </div>
    <div class="navbar navbar-expand-lg bg-secondary py-0 small ">
        <div class="container ">


        


            <div class="navbar-nav ">
                <a  href="{{route('admin.dashboard')}}" class="nav-item nav-link text-white  ms-5 mt-3 ">Home</a>
                <a href="{{route('admin.category')}}"  class="nav-item nav-link text-white  ms-3 mt-3 ">Mange category</a>
                
                <a href="{{route('admin.product.index')}}"  class="nav-item nav-link text-white  ms-3 mt-3 ">Mange Product</a>
                <a  href="{{route('admin.product.insert')}}" class="nav-item nav-link text-white  ms-3 mt-3 ">Insert Product</a>
           

            </div>


        </div>
    </div>


    @section('content')
    @show
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>