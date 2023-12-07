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
                        <td>{{$item->isVeg}}</td>
                        <td>{{$item->discount_price}} <del>{{$item->price}}</del></td>
                        <td>{{$item->description}}</td>
                        <td>{{$item->image}}</td>
                        <td>{{$item->status}}</td>
                        <td>{{$item->category}}</td>
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