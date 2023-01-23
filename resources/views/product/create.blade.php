@extends('layouts.index')

@section('titelPage', 'Create')

@section('content')
    <style>
        #example0 {
            margin-bottom: 125px;
            display: block;
        }
    </style>
    <h1 style="margin-left: 400px; color: green">{{ session()->get('message') }}</h1>
    <div class="row">
        <div class="col-sm-8 offset-sm-2" id="example0">
            <h1 class="display-3">Add Product</h1>
            <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="product_name">Product Name:*</label>
                    <input type="text" class="form-control" name="product_name" id="product_name" required />
                </div>

                <div class="form-group">
                    <label for="product_description">Product Description:*</label>
                    <input type="text" class="form-control" name="product_description" id="product_description"
                        required />
                </div>

                <div class="form-group">
                    <label for="product_store">Product Store Name:*</label>
                    <input type="text" class="form-control" name="product_store" id="product_store" />
                    <select class="form-control" ria-label="Default select example" name="product_store" id="product_store">
                        <option selected>Open this select menu</option>
                        @foreach ($Stores as $store_name)
                            <option name="product_store" id="product_store">{{ $store_name->id }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="base_price">Product Base Price:*</label>
                    <input type="text" class="form-control" name="base_price" id="base_price" required />
                </div>

                <div class="form-group">
                    <label for="discount_price">Product Discount Price:*</label>
                    <input type="text" class="form-control" name="discount_price" id="discount_price" required />
                </div>

                <div class="form-group">
                    <label for="product_price">Flag For
                        Base/Discount Purchasing:*</label>
                    <br>
                    <input type="checkbox" name="product_price" id="product_price" />
                </div>

                <div>
                    <label for="value">Product Image:*</label>
                    <br>
                    <input type="file" name="image" id="imgInp" required />
                    <br>
                    <img style="width: 250px; height: 200px; display: block; margin-left: auto; margin-right: auto;"
                        id="imgOut" src="{{ asset('images/NoImage.png') }}" />
                </div>

                <button type="submit" class="btn btn-primary">Add Product</button>
            </form>
        </div>
    </div>
    </div>
@endsection
