<?php

use App\Http\Controllers\foodController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



//home routes
Route::get("/", [HomeController::class, "index"])->name("home.index");

//admin routes
Route::prefix("admin")->group(function () {
    Route::get("/", [AdminController::class, "dashboard"])->name("admin.dashboard");

    Route::controller(CategoryController::class)->group(function () {
        Route::prefix("category")->group(function(){
            Route::match(["get", "post"], "/", "manageCategory")->name("admin.category");
            Route::post("/{id}/update", "updateCategory")->name("admin.category.update");
            Route::delete("/delete", "deleteCategory")->name("admin.category.delete");
        });
       
    });
    Route::controller(foodController::class)->group(function () {
        Route::prefix("product")->group(function(){
            Route::get("/",  "index")->name("admin.product.index");
            Route::get("/create",  "insertProduct")->name("admin.product.insert");
            Route::post("/create",  "store")->name("admin.product.store");
            Route::get("/edit/{id}",  "edit")->name("admin.product.edit");
            Route::post("/edit/{id}",  "update")->name("admin.product.update");
            Route::delete("/delete/{id}",  "removeProduct")->name("admin.product.remove");
        });
       

        
    });
});

