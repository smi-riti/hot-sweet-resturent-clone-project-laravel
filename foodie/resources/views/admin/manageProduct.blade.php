@extends('admin.adminBase')

@section('content')
<div class="container">
    <div class="row mt-4">
        <div class="col-12">
            <h2 class="display-6">Manage Product</h2>

            <table class="table table-bordered table-hover table-striped">
                <thead class="bg-danger">
                    <tr>
                        <th>id</th>
                        <th>title</th>
                        <th>isVeg</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Category</th>
                        <th>Action</th>
                    </tr>

                </thead>
                <tbody>
                    @foreach ($products as $item)

                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->title}}</td>
                        <td>@if ($item->isVeg)
                            <img width='48' height='48' src="https://img.icons8.com/color/48/vegetarian-food-symbol.png" alt="vegetarian-food-symbol"/>
                            @else
                            <img width="48" height="48" src="https://img.icons8.com/color/48/non-vegetarian-food-symbol.png" alt="non-vegetarian-food-symbol"/>
                            
                        @endif</td>
                        <td>{{$item->discount_price}} <del>{{$item->price}}</del></td>
                        <td>{{$item->description}}</td>
                        <td><img src="{{asset("storage/" . $item->image)}}" width="80px" height="auto" alt=""></td>
                        <td>{{$item->status}}</td>
                        <td>{{$item->category->cat_title}}</td>
                        <td>
                            <div class="btn-group">
                                <a href="" class="btn btn-danger">X</a>
                                <a href="" class="btn btn-primary">Edit</a>
                            </div>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection