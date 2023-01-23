@extends('layouts.index')

@section('titelPage', 'Create')

@section('content')
    <style>
        #example0 {
            margin-bottom: 500px;
            display: block;
        }
    </style>
    <form action="{{ route('store.store') }}" method="POST" id="example0" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="input1" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="input1">
        </div>
        <div class="form-group">
            <label for="input2" class="form-label">Address</label>
            <input type="text" class="form-control" id="input2" name="Address">
        </div>
        <div>
            <label for="value">Product Image:*</label>
            <br>
            <input type="file" name="image" id="imgInp" required />
            <br>
            <img style="width: 250px; height: 200px; display: block; margin-left: auto; margin-right: auto;" id="imgOut"
                src="{{ asset('images/NoImage.png') }}" />
        </div>

          <button type="submit" class="btn btn-primary">Create</button>

    </form>
@endsection
