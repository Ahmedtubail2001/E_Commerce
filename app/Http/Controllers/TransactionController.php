<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function store($id)
    {
        $product = Product::with('store')->where('id', $id)->first();

        $transaction = new Transaction();
        $transaction->product_id = $product->id;
        $transaction->productPrice = $product->base_price;
        $transaction->productName = $product->name;

        $transaction->save();

        return redirect()->back();
    }
    public function index()
    {
        $transaction = Transaction::all();
        return view('transactions.index')->with('transaction', $transaction);
    }

    public function report()
    {
        $user_info = DB::table('transactions')->select
        ('productName', DB::raw('count(*) as total'))->groupBy('productName')->get();
        return view('transactions.detail')->with('UserInfo', $user_info);
    }
}