@extends('home.base')
@section('content')
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-4 mx-auto mt-5">
                    <div class="card">
                        <div class="card-header"> Register Here</div>
                        <div class="card-body">
                            <form action="" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="">Name</label>
                                    <input type="name" name="name" value="{{ old('name') }}" class="form-control">
                                    @error('name')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">Email</label>
                                    <input type="email" name="email" value="{{ old('email') }}" class="form-control">
                                    @error('email')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">Password</label>
                                    <input type="password" name="password"
                                        value="{{ old('password') }}"class="form-control">
                                    @error('email')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>


                                <div class="mb-3">
                                    <input type="submit" value=" Create an account " class="btn btn-success w-100">
                                </div>

                            </form>
                            <div class="row">
                                <a href="{{route('login')}}">Already registered?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
