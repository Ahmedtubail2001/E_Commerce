@extends('layouts.index')

@section('titelPage', 'Index')

@section('content')
    <h1 style="margin-left: 400px; color: green">{{ session()->get('message') }}</h1>
    <div class="row" id="example0">
        <style>
            #example0 {
                margin-bottom: 515px;
                display: block;
            }
        </style>
        <div class="col-sm-12">
            <h1 class="display-3">Products</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <td>Product Name</td>
                        <td>Product Description</td>
                        <td>Product Store</td>
                        <td>Product Base Price</td>
                        <td>Product Discount Price</td>
                        <td>Flag</td>
                        <td>Product Image</td>
                        <td colspan="2">Actions</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Products as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }} </td>
                            <td>{{ $product->store_id }} </td>
                            <td style="color: green">{{ $product->base_price }}$ </td>
                            <td style="color: red">{{ $product->discount_price }}$ </td>
                            @if ($product->flag == 1)
                                <td>With Discount</td>
                            @else
                                <td>Without Discount</td>
                            @endif
                            <td><img style="width: 100px; height: 70px;" src="{{ asset('images/' . $product->logo) }}"></td>
                            <td>
                                <a href="{{ route('product.edit', ['product' => $product->name]) }}"
                                    class="btn btn-primary">Edit</a>
                            </td>
                            <td>
                                <form action="{{ route('product.destroy', ['product' => $product->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
