@extends('layouts.index')

@section('titelPage', 'Edit')

@section('content')
    <div class="row">
        <style>
            #example0 {
                margin-bottom: 150px;
                display: block;
            }
        </style>
        <div class="col-sm-8 offset-sm-2" id="example0">
            <h1 class="display-3">Update Product</h1>
            <form action="{{ route('product.update', ['product' => $Products->name]) }}" method="post"
                enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="product_name">Product Name:*</label>
                    <input type="text" class="form-control" name="product_name" id="product_name"
                        value="{{ $Products->name }}" require />
                </div>

                <div class="form-group">
                    <label for="product_description">Product Description:*</label>
                    <input type="text" class="form-control" name="product_description" id="product_description"
                        value="{{ $Products->description }}" />
                </div>

                <div class="form-group">
                    <label for="product_store">Product Store Name:*</label>
                    <select class="form-control" ria-label="Default select example" name="product_store" id="product_store">
                        <option selected> {{ $Products->store_name }}</option>
                        @foreach ($Stores as $store)
                            <option name="product_store" id="product_store"
                                @if ($store->id == $Products->id) selected @endif>{{ $store->id }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="base_price">Product Base Price:*</label>
                    <input type="text" class="form-control" name="base_price" id="base_price"
                        value="{{ $Products->base_price }}" />
                </div>

                <div class="form-group">
                    <label for="discount_price">Product Discount Price:*</label>
                    <input type="text" class="form-control" name="discount_price" id="discount_price"
                        value="{{ $Products->discount_price }}" />
                </div>

                <div class="form-group">
                    <label for="product_price">Flag For
                        Base/Discount Purchasing:*</label>
                    <br>
                    <input type="checkbox" name="product_price" id="product_price"
                        @if ($Products->flag == 1) checked="checked" @endif />
                </div>

                <div>
                    <label for="value">Product Image:*</label>
                    <br>
                    <input type="file" name="image" id="imgInp" />
                    <br>
                    <img style="width: 250px; height: 200px; display: block; margin-left: auto; margin-right: auto;"
                        id="imgOut" src="{{ asset('images/' . $Products->logo) }}" />
                </div>
                <button type="submit" class="btn btn-primary">Update Product</button>
            </form>
        </div>
    </div>

@endsection
