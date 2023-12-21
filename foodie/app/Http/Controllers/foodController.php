<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\food;
use App\Models\Category;

class foodController extends Controller
{
    public function index(){
        $data["products"] = food::all();
        return view("admin.manageProduct",$data);
        
    }

    public function insertProduct(Request $req){
        $data['categories']=Category::all();
        
        return view("admin.insertProduct", $data);
    }

    public function store(Request $req){
       
            $data = $req->validate([
                "title" => "required",
                "image" => "required",
                "price" => "required",
                "discount_price" => "required",
                "description" => "required",
                
                "category_id" => "required",
                 "isVeg" => "required"
            ]);

            //image work

            $filename = $req->file('image')->getClientOriginalName();
           
             $path = $req->file('image')->storeAs('public',$filename);
             $data['image']=$filename;
             //dd($data);
            food::create($data);
            return redirect()->route("admin.product.index")->with("msg","product inserted successfully");
        

    }
    public function edit(Request $req){

    }
    public function update(Request $req ,$id){

    }
    public function remveProduct(Request $req ){

    }

 
}
