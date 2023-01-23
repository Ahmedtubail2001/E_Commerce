<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Store;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function index()
    {
        $store = Store::all();
        $product = Product::all();
        return view('product.index', ['Products' => $product])->with('Stores', $store);
    }

    public function create()
    {
        $store = Store::all();
        return view('product.create')->with('Stores', $store);
    }

    public function store(Request $request)
    {
        $name = $request['product_name'];
        $description = $request['product_description'];
        $store_id = $request['product_store'];
        $base_price = $request['base_price'];
        $discount_price = $request['discount_price'];
        $product_flag = null;
        if ($request['product_price'] == true) {
            $product_flag = true;
        } else {
            $product_flag = false;
        }

        $imageName = time() . "_" . $request['image']->extension();
        $request['image']->move(public_path('images'), $imageName);

        $product = new Product();
        $product->name = $name;
        $product->description = $description;
        $product->store_id = $store_id;
        $product->base_price = $base_price;
        $product->discount_price = $discount_price;
        $product->flag = $product_flag;
        $product->logo = $imageName;
        $product->save();
        return redirect()->back();
    }

    public function display()
    {
        $product = Product::all();
        return view('product.displayProduct')->with('Products', $product);
    }

    public function edit($product_name)
    {
        $product = Product::where('name', $product_name)->first();
        $store = Store::all();
        return view('product.edit')->with('Products', $product)->with('Stores', $store);
    }

    public function update(Request $request, $product_name)
    {
        $name = $request['product_name'];
        $description = $request['product_description'];
        $store_id = $request['product_store'];
        $base_price = $request['base_price'];
        $discount_price = $request['discount_price'];
        $product_flag = null;
        if ($request['product_price'] == true) {
            $product_flag = true;
        } else {
            $product_flag = false;
        }

        $imageName = time() . "_" . $request['image']->extension();
        $request['image']->move(public_path('images'), $imageName);

        $product = Product::where('name', $product_name)
            ->update(['name' => $name, 'description' => $description, 'store_id' => $store_id,
                'base_price' => $base_price, 'discount_price' => $discount_price,
                'logo' => $imageName]);

        return redirect()->back()->with('message', 'Update Successfully!');
    }

    public function destroy($id)
    {
        $product = Product::find($id)->delete();
        return redirect()->back();
    }
}