<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\food;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;


class OrderController extends Controller
{
    public function addToCart(Request $req ,$id){
        //dd($pid);
        $product = food::find($id);
        //dd($product);
        $user = Auth::user();
        // dd($user);
        if($product){
             $order = Order::where([["status",false],["user_id", $user->id]])->first();
            

            if($order){
                $orderItem  = OrderItem::where("status",false)->where("food_id",$id)->first();
                if($orderItem){
                    //if orderitem already in a cart
                    $orderItem->qty += 1;
                    $orderItem->save();
                }
                else{
                    $oi = new OrderItem();
                    $oi->status = false;
                    $oi->food_id = $id;
                    $oi->order_id = $order->id;
                    $oi->save();
                }
            }
            else{
                //if order not exsist in cart
                $o = new Order();
                $o->user_id = $user->id;
                $o->status = false;
                $o->save();
            }
        

            return redirect()->route('cart')->with('success','product added or updated on a cart successfully');
        }
        else{
            return redirect()->route('home.index')->with("error","product not found");
         }
    }
    public function removeFromCart(Request $req ,$id){
        //dd($pid);
        $product = food::find($id);
        //dd($product);
        $user = Auth::user();
        // dd($user);
        if($product){
             $order = Order::where([["status",false],["user_id", $user->id]])->first();
            

            if($order){
                $orderItem  = OrderItem::where("status",false)->where("food_id",$id)->first();
                if($orderItem){
                    //if orderitem already in a cart
                   if($orderItem->qty > 1){
                    $orderItem->qty -= 1;
                   $orderItem->save();
                   
                   }
                   else{
                    $orderItem->delete();
                   }
                }
               
            }
            

            return redirect()->route('cart')->with('success','product updated on a cart successfully');
        }
        else{
            return redirect()->route('home.index')->with("error","product not found");
         }
    }

    public function cart(){
        $data['order'] = Order::where([["user_id",Auth::id()],["status",false]])->first();

        return view("home.cart",$data);
    }
    public function checkOut(){
        

        return view("home.checkOut");
    }

}
