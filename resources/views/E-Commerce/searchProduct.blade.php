@extends('layouts.webSiteAdmin')

@section('content')
    <div class="demo1 clearfix">
        <ul class="filter-container clearfix">
            @foreach ($products as $product)
                <li class="class1" style="margin: 50px;" >
                    <img style="width: 350px; height: 250px;" src="{{ asset('images/' . $product->logo) }}" alt="">

                    <div class="arr-content">
                        <p>{{ $product->name }}</p>
                                <h5><span class="low-price">{{ $product->base_price }}</span></h5>
                                <h5><span class="low-price">{{ $product->description }}</span></h5>
                                <h5><span class="low-price">{{ $product->discount_price }}</span></h5>
                    </div>
                </li>
            @endforeach

        </ul>
    </div>
@endsection
