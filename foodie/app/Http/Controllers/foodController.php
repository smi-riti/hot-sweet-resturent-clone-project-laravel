<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\food;

class foodController extends Controller
{
    public function index(){
        $data["products"] = food::all();
        return view("admin.manageProduct",$data);
        
    }

    public function insertProduct(Request $req){
        if($req->ismethod("post")){
            $data = $req->validate([
                "title" => "required",
                "image" => "required",
                "price" => "required",
                "discount_price" => "required",
                "description" => "required",
                "status" => "required",
                "category" => "required",
                 "isVeg" => "required"
            ]);
            
            $data = food::create($data);
            return redirect()->route("home");
        }
        return view("admin.insertProduct");
    }

    public function store(Request $req){

    }
    public function edit(Request $req){

    }
    public function update(Request $req ,$id){

    }
    public function remveProduct(Request $req ){

    }

 
}
