@extends('home.base')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h2>My Cart({{ $count = count($order->orderItem) }})</h2>

            </div>
            @if ($count)
                
           
            <div class="col-8">
                @php
                    $total_price = $total_discount_price = $net_payble = $delivery_charge = 0;
                @endphp

                @foreach ($order->orderItem as $item)
                    {{-- {{$order->orderItem}} --}}
                    <div class="card mb-2">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-2">
                                    <img src="{{ asset('storage/' . $item->product->image) }}" class="w-100" alt="">
                                </div>
                                <div class="col-10">
                                    <h2 class="text-capitalize h3">{{ $item->product->title }}</h2>
                                    <h5>₹{{ $item->product->discount_price * $item->qty }} <del
                                            class="text-muted fs-6">₹{{ $item->product->price * $item->qty }}</del></h5>
                                    <div class="col-4">
                                        <a href="{{ route('removeFromCart', $item->product->id) }}"
                                            class="btn btn-danger btn-sm">-</a>
                                        <span>{{ $item->qty }}</span>
                                        <a href="{{ route('addToCart', $item->product->id) }}"
                                            class="btn btn-success btn-sm">+</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @php
                        $total_price += $item->product->price * $item->qty;
                        $total_discount_price += $item->product->discount_price * $item->qty;
                    @endphp
                @endforeach
            </div>

            <div class="col-4">
                <div class="list-group border border-4">
                    <span class="list-group-item list-group-item-action border border-4 fw-medium fs-5">Total Price :
                        <span class="float-end">₹{{ $total_price }}</span>
                    </span>
                    <span class="list-group-item list-group-item-action  border border-4 fw-medium fs-5">Discount:
                        <span class="float-end">₹{{ $total_price - $total_discount_price }}</span>
                    </span>
                    <span class="list-group-item list-group-item-action border border-4 fw-medium fs-5">Tax (Gst 18%):
                        <span class="float-end">₹{{ $gst = $total_discount_price * 0.18 }}</span>
                    </span>
                    @php
                        $net_payble = $total_discount_price + $gst;

                        $delivery_charge = $net_payble >= 500 ? 50 : 0;
                    @endphp

                    <span class="list-group-item list-group-item-action border border-4 fw-medium fs-5">Delivery Charge:
                        <span class="float-end">

                            @if ($delivery_charge)
                                {{ $delivery_charge }}
                            @else
                                <h5>Free</h5>
                            @endif

                        </span>

                    </span>
                    <span
                        class="list-group-item list-group-item-action border border-4 fw-semibold fs-4 bg-success text-white">Net
                        Payble Amount:
                        <span class="float-end">{{ $net_payble + $delivery_charge }}</span>
                    </span>
                </div>
                <div class="mt-4 d-flex gap-1">
                    <div class="col">
                        <a href="" class="btn btn-dark w-100 btn-lg">Add More</a>
                    </div>
                    <div class="col">
                        <a href="{{route('checkOut')}}" class="btn btn-primary w-100 btn-lg">Proceed</a>
                    </div>
                </div>
            </div>

            @else
            <h1 class="display-3 text-secondry fw-bold">Cart is Empty</h1>
            <a href="{{route('home.index')}}" class="btn btn-lg btn-dark w-25 mt-4">Shop Now</a>
            @endif
        </div>
    </div>
@endsection
