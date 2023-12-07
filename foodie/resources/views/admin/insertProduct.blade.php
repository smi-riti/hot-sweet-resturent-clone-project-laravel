@extends('admin.adminBase')
@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-6 mx-auto ">
            <div class="card">
                <div class="card-header">
                   <h1>Insert  Product</h1> 

                </div>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="">Title</label>
                            <input type="text" name="title" value="{{old('title')}}"  class="form-control">
                            @error("title")
                            <p class="text-danger">{{($message)}}</p>
                            @enderror
                           
                        </div>
                        <div class="mb-3">
                            <label for="">Image</label>
                            <input type="file" name="image"  value="{{old('image')}}" class="form-control">
                            @error("image")
                            <p class="text-danger">{{($message)}}</p>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="">Price</label>
                            <input type="text" name="price"  value="{{old('price')}}"  class="form-control">
                            @error("price")
                            <p class="text-danger">{{($message)}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Discount Price</label>
                            <input type="text" name="discount_price"  value="{{old('discount_price')}}"  class="form-control">
                            @error("discount_price")
                            <p class="text-danger">{{($message)}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">description</label>
                            <input type="text" name="description" value="{{old('description')}}" class="form-control">
                            @error("description")
                            <p class="text-danger">{{($message)}}</p>
                            @enderror
                           
                        </div>
                        <div class="mb-3">
                            <label for="">category</label>
                            <input type="text" name="category" value="{{old('category')}}" class="form-control">
                            @error("category")
                            <p class="text-danger">{{($message)}}</p>
                            @enderror
                           
                        </div>

                        <div class="mb-3 d-flex  gap-2">
                           
                            <input type="checkbox" name="isVeg" value="{{old('isVeg')}}" class="form-check-input" id="" >Veg
                            <input type="checkbox" name="isVeg" value="{{old('isVeg')}}" class="form-check-input" id="" >Nonveg
                            @error("isveg")
                            <p class="text-danger">{{($message)}}</p>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            
                            <input type="submit" name="submit"  class="btn btn-success w-100">
                           
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
@endsection