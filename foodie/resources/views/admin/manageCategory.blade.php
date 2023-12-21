@extends('admin.adminBase')

@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <h2 class="display-6">Manage Category({{ count($category) }})</h2>
                <div class="row">
                    <div class="col-9">
                        <table class="table table-bordered table-hover table-striped">
                            <thead class="bg-danger">
                                <tr>
                                    <th>id</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>

                            </thead>
                            <tbody>

                                @foreach ($category as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->cat_title }}</td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <form action="{{ route('admin.category.delete') }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                                    <input type="submit" value="X" class="btn btn-danger">
                                                </form>
                                                <a href="#rock{{ $loop->index }}" class="btn btn-info"
                                                    data-bs-toggle="modal">Edit</a>

                                                <!-- modal -->

                                                <div class="modal fade" id="rock{{ $loop->index }}">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">Edit {{ $item->cat_title }} Category
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <form
                                                                            action="{{ route('admin.category.update', $item->id) }}"
                                                                            method="post">
                                                                            @csrf
                                                                            <div class="mb-3">
                                                                                <label for="">Title</label>
                                                                                <input type="text" name="cat_title"
                                                                                    value="{{ $item->cat_title }}"
                                                                                    class="form-control">
                                                                                @error('cat_title')
                                                                                    <p class="text-danger small">
                                                                                        {{ $message }}</p>
                                                                                @enderror

                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <input type="submit"
                                                                                    value="Update Category "
                                                                                    class="btn btn-success">
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>

                    <div class="col-3">
                        <div class="card">
                            <div class="card-body">
                                <form action="" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="">Title</label>
                                        <input type="text" name="cat_title" value="{{ old('cat_title') }}"
                                            class="form-control">
                                        @error('cat_title')
                                            <p class="text-danger small">{{ $message }}</p>
                                        @enderror

                                    </div>
                                    <div class="mb-3">
                                        <input type="submit" value="Create Category " class="btn btn-success">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
