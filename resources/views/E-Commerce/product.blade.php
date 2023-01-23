@extends('layouts.webSite')

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

                                <a href="{{ URL('transaction/store/' . $product->id) }}"
                                class="btn btn-light py-md-3 px-md-4 rounded-pill mb-2" 
                                style="margin-left: 50px;">
                                <i class="fa-plus-square-o"></i>
                            </a>
                    </div>
                </li>
            @endforeach

        </ul>
    </div>
@endsection
