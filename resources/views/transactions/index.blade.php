@extends('layouts.index')

@section('titelPage', 'Create')

@section('content')
    <style>
        #example0 {
            margin-bottom: 750px;
            display: block;
        }
    </style>
    <div>
        <div class="row">
            <div class="col-sm-12" id="example0">
                <h1 class="display-3">Payment Transaction</h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td>Product Name</td>
                            <td>Product Price</td>
                            <td>Time of Operation</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transaction as $transaction)
                            <tr>
                                <td>{{ $transaction->productName }}</td>
                                <td>{{ $transaction->productPrice }} </td>
                                <td>{{ $transaction->created_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endsection
