<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{env("APP_NAME")}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

@include("header")
<div class="container mt-5">
        <div class="col-4 mx-auto shadow">
            <div class="card">
                <div class="card-header">
                    Insert New Result

                </div>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="">Dish_Name</label>
                            <input type="text" name="dish_name"  class="form-control">
                            @error("dish_name")
                            <p class="text-danger">{{($message)}}</p>
                            @enderror
                           
                        </div>
                        <!-- <div class="mb-3">
                            <label for="">Dish_Image</label>
                            <input type="file" name="image"  class="form-control">
                            @error("image")
                            <p class="text-danger">{{($message)}}</p>
                            @enderror
                        </div> -->
                        
                        <div class="mb-3">
                            <label for="">Price</label>
                            <input type="text" name="price"  class="form-control">
                            @error("price")
                            <p class="text-danger">{{($message)}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Cat_Title</label>
                            <input type="text" name="cat_title"  class="form-control">
                            @error("cat_title")
                            <p class="text-danger">{{($message)}}</p>
                            @enderror
                           
                        </div>

                        <div class="mb-3">
                            <label for="">NonVeg</label>
                            <input type="checkbox" name="veg_or_nonveg" value="1" class="form-check-input" id="" >
                           
                        </div>
                        
                        <div class="mb-3">
                            
                            <input type="submit" name="submit"  class="btn btn-success w-100">
                           
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>