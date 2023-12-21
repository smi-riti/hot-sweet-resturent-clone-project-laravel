@extends('home.base')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h2></h2>

            </div>
            <div class="container">
                <div class="row">



                    <div class="col-8">
                        <h1>Checkout </h1>
                        <div class="card">
                            <div class="card-header">
                                Add Adress
                            </div>
                            <div class="card-body">
                                <form action="" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="mb-3 col">
                                            <label for="">full Name</label>
                                            <input type="text" name="full_name" class="form-control"
                                                value="{{ old('full_name') }}">
                                            @error('full_name')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror

                                        </div>
                                        <div class="mb-3 col">
                                            <label for="">Contact No.<span class="text-danger">*</span></label>
                                            <input type="text" name="alt_contact" placeholder="eg.0000000000"
                                                class="form-control" value="{{ old('alt_contact') }}">
                                            @error('alt_contact')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="mb-3 col">
                                            <label for="">Type</label>
                                            <select type="text" name="type" class="form-select">
                                                <option value="">Select Adress Type</option>
                                                <option value="o">Office</option>
                                                <option value="h">Home</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3 col">
                                            <label for="">Street<span class="text-danger">*</span></label>
                                            <input type="text" placeholder="e.g MG road" name="street-name"
                                                class="form-control" value="{{ old('street_name') }}">
                                            @error('street_name')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="mb-3 col">
                                            <label for="">Area/Village<span class="text-danger">*</span></label>
                                            <input type="text" name="area"
                                                placeholder = "e.g Shiv nagar"class="form-control"
                                                value="{{ old('area') }}">
                                            @error('area')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="mb-3 col">
                                            <label for="">Landmark<span class="text-danger">*</span></label>
                                            <input type="text" name="landmark" placeholder="e.g near shiv mandir"
                                                class="form-control" value="{{ old('landmark') }}">
                                            @error('landmark')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="mb-3 col">
                                            <label for="">City<span class="text-danger">*</span></label>
                                            <input type="text" name="city" placeholder="e.g Patna"
                                                class="form-control" value="">
                                            @error('city')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="mb-3 col">
                                            <label for="">State<span class="text-danger">*</span></label>
                                            <input type="text" name="state" placeholder="Bihar" class="form-control"
                                                value="{{ old('state') }}">
                                            @error('state')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="mb-3 col">
                                            <label for="">pincode <span class="text-danger">*</span></label>
                                            <input type="text" name="pincode" placeholder="000000" class="form-control"
                                                value="{{ old('pincode') }}">
                                            @error('pincode')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <input type="submit" class="btn btn-primary w-100" name="save_Adress"
                                            Value="Save Adress">
                                    </div>
                                </form>


                            </div>
                        </div>

                    </div>

                    <div class="col-4">
                        <h2>Saved Adress</h2>
                        <form action="" method="post">
                            @csrf
                            <div class="grid">

                                <label class="card">
                                    {{-- <input name="address_id" class="radio" type="radio" value="" checked>  --}}

                                    <span class="plan-details">
                                        <span class="">Full Name</span>
                                        <span class="">street-name, Area, landmark,</span>
                                        <span class="">city,state,pincode</span>
                                        <span>type</span>
                                        <span>contact</span>
                                        {{-- <a href=""
                                            class="badge bg-danger text-white text-decoration-none ms-auto">Delete</a> --}}
                                    </span>



                                </label>


                            </div>
                        </form>

                        <div class="d-flex justify-content-between mt-2">
                            <a href="" class="btn btn-dark ">Go back</a>
                            <input type="submit" class="btn btn-primary btn-lg" name="make_payment"
                                value="Make Payment">
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
