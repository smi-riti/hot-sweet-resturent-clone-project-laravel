@extends('home.base')

@section('content')

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

<div class="container">
    @foreach ($categories as $cat)
    

<div class="container mt-3 my-3">
    <div class="row">
        <div class="col-12">
            <h2 class="text-capitalize">{{$cat->cat_title}}</h2>
        </div>
    </div>
    <div class="row">
                @foreach ($cat->products as $item)
    

        <div class="col-3">
            <div class="card my-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <a href=""><img src="{{asset('storage/'.$item->image)}}" width="80" height="auto" style="object-fit: cover" alt=""></a>

                        </div>
                        <div class="col-8">
                            <span class="float-end">
                                
                                @if ($item->isVeg)
                            <img width='32' height='32' src="https://img.icons8.com/color/48/vegetarian-food-symbol.png" alt="vegetarian-food-symbol"/>
                            @else
                            <img width="32" height="32" src="https://img.icons8.com/color/48/non-vegetarian-food-symbol.png" alt="non-vegetarian-food-symbol"/>
                            
                        @endif
                                    
                                
                            </span>
                            <h5 class="text-capitalize">{{$item->title}}</h5>
                            <h5 class="text-danger">Rs.{{$item->discount_price}} <del class="small">{{$item->price}}</del></h5>
                            <a href="{{route('addToCart',$item->id)}}" class="btn btn-primary rounded-0 w-100">Add to Cart<i class="bi bi-cart-plus-fill"></i></a>
                        </div>
                    </div>


                </div>

            </div>
        </div>
        @endforeach
    </div>
</div>
<hr>
@endforeach 
</div>
@endsection