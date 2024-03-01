<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dish;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class CustomerController extends Controller
{

    public $items = array();
    public $totalQty = 0;
    public $totalPrice = 0;

    public function index()
    {
        $chefs = User::with('dish')->where('role', 'chef')->get();
        return view('customer.index',['chefs' => $chefs]);
    }

    public function show($id)
    {

        // return Session::get('cart');
        $cartOrders = 0;
        if(Session::has('cart')) {
            $cartOrders = count(Session::get('cart'));
        }

        $chefs = User::with('dish')->where('id', $id)->get();
        return view('customer.chef-detail',['chefs' => $chefs[0], 'cartOrders' => $cartOrders]);
    }

    public function addToCart(Request $request, $id)
    {

        $dish = Dish::find($id);

        if(Session::has('cart') && count(Session::get('cart')) < 1){
            $request->session()->put('cart', [$dish]);
        } else {
            $request->session()->push('cart', $dish);
        }

        return redirect()->back();
    }

    public function cartCheckout() {

        $cartDishes = array();
        if(Session::has('cart')) {
            $cartDishes = Session::get('cart');
        }

        $total = array_reduce($cartDishes, function($carry, $item)
               {
                 return $carry + $item->price;
               });

        return view('customer.checkout-card', ['cartDishes' => $cartDishes, 'total' => $total]);
    }

    public function proceedCheckout() {
        return redirect()->back()->with('success', 'Order placed Successfully.');
    }
    
}
