<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebsiteController extends Controller
{

    public function index()
    {
        $stores = Store::all();

        if (!empty(Auth::user())) {
            if (Auth::user()->email == "ahmed.tubail200@gmail.com") {
                return response()->view('E-Commerce.admin', ['stores' => $stores]);

            }}
        return response()->view('E-Commerce.index', ['stores' => $stores]);

    }

    public function indexProduct($id)
    {
        $products = Product::where('store_id', $id)->paginate(9);

        if (!empty(Auth::user())) {
            if (Auth::user()->email == "ahmed.tubail200@gmail.com") {
                return view('E-Commerce.productAdmin')->with('products', $products);
            }
        }
        return view('E-Commerce.product')->with('products', $products);
    }

    public function searchProduct(Request $request)
    {
        $product_name = $request['name'];

        $products = Product::with('store')
            ->where('name', 'like', '%' . $product_name . '%')
            ->get();

        if (!empty(Auth::user())) {
            if (Auth::user()->email == "ahmed.tubail200@gmail.com") {
                return view('E-Commerce.searchProduct')->with('products', $products);
            }
        }
        return view('E-Commerce.searchProduct')->with('products', $products);
    }

}