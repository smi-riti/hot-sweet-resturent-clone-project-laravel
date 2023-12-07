<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{env("APP_NAME")}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>

<body>
   @include("header")

    <div class="container">
        <div class="col-6 mx-auto mt-3">
            <img src="https://www.hotandsweets.in/assets/images/slider/hot-and-sweets-oepn-hotandsweets.jpg" alt="">
        </div>
    </div>
    <div class="container ">

        <div class="alert alert-success">
            <h5 class="text-success fw-2 fs-5"><i class="bi bi-check-all"></i>Hot & Sweets now more delicious.</h5>
            <h5 class="text-success fw-2 fs-5"><i class="bi bi-check-all"></i>Now we are accepting advance orde</h5>
            <h5 class="text-success fw-2 fs-5"><i class="bi bi-check-all"></i>Refer & Earn Program.</h5>
        </div>


    </div>
    <div class="container   gap-5 px-5">
        <a href="" class="btn fw-4 fs-2 text-white  rounded-4 text-center py-3 px-5 ms-5" style=" background-color:#1e3b5a ">Register Now!</a>
        <a href="" class="btn fw-4 fs-2 text-white  rounded-4 text-center py-2 px-5 " style="margin-left:25%;"><img src="	https://www.hotandsweets.in/assets/images/download.png" alt=""> </a>

    </div>

    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <h2>Dishes</h2>
            </div>
        </div>
        <div class="row">

            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <a href=""><img src="https://www.hotandsweets.in/assets/images/food/bundiya-500gm--hotandsweets.jpg" width="80" height="auto" alt=""></a>

                            </div>
                            <div class="col-8">
                                <h5 class="small">dish name</h5>
                                <h5 class="text-danger">dish Price</h5>
                                <a href="" class="btn btn-primary w-100">Buy<i class="bi bi-cart-plus-fill"></i></a>
                            </div>
                        </div>


                    </div>

                </div>
            </div>

        </div>
    </div>
</body>

</html>