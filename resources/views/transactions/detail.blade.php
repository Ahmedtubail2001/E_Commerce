@extends('layouts.index')

@section('titelPage', 'Detail')

@section('content')
    <style>
        #example0 {
            margin-bottom: 975px;
            display: block;
        }
    </style>
    <div id="example0">

        <div class="row">
            <div class="col-sm-12">
                <h1 class="display-3">Report</h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td>Product Name</td>
                            <td>Product Count</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($UserInfo as $info)
                            <tr>
                                <td>{{ $info->productName }}</td>
                                <td>{{ $info->total }} </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
