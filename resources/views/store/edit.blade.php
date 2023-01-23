@extends('layouts.index')

@section('titelPage', 'Edit')

@section('content')
    <style>
        #example0 {
           margin-bottom: 560px;
        }
    </style>
    <section class="content" id="example0">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Store</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="{{ route('store.update', $store->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title_en">Name</label>
                                    <input type="text" name="name" class="form-control" id="title_en"
                                        placeholder="Enter english title" value="{{ $store->name }}">
                                </div>
                                <div class="form-group">
                                    <label for="title_ar">Address</label>
                                    <input type="text" name="Address" class="form-control" id="title_ar"
                                        placeholder="Enter arabic title" value="{{ $store->address }}">
                                </div>
                                <div class="form-group">
                                    <label for="title_ar">Logo</label>
                                    <input type="text" name="logo" class="form-control" id="title_ar"
                                        placeholder="Enter arabic title" value="{{ $store->logo }}">
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
    </section>
@endsection
