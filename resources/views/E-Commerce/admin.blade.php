@extends('layouts.webSiteAdmin')

@section('content')
    <!-- Slider -->
    <div class="slider heightski">
        <div class="fullwidthbanner-container">
            <div class="fullwidthbanner" id="intro">
                <ul>
                    <!-- First SLIDE -->
                    <li data-transition="random" data-slotamount="10" data-masterspeed="300">
                        <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
                        <img src="{{ asset('publicWebsite/upload/revolution/lap.jfif') }}" data-fullwidthcentering="on"
                            alt="slide">
                        <!-- THE CAPTIONS IN THIS SLDIE -->

                        <div class="caption lfl" data-x="center" data-y="280" data-speed="400" data-start="1800"
                            data-easing="easeOutExpo" data-end="7200" data-endspeed="300" data-endeasing="easeInSine">
                            <img src="{{ asset('publicWebsite/upload/revolution/s-border.png') }}" alt="Image 1">
                        </div>
                    </li>
                    <!-- second SLIDE -->
                    <li data-transition="random" data-slotamount="10" data-masterspeed="300">
                        <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
                        <img src="{{ asset('publicWebsite/upload/revolution/lap2.jfif') }}" data-fullwidthcentering="on"
                            alt="slide">
                        <!-- THE CAPTIONS IN THIS SLDIE -->
                        <div class="caption lfl" data-x="center" data-y="280" data-speed="400" data-start="1800"
                            data-easing="easeOutExpo" data-end="7200" data-endspeed="300" data-endeasing="easeInSine">
                            <img src="{{ asset('publicWebsite/upload/revolution/s-border.png') }}" alt="Image 1">
                        </div>
                    </li>

                    <!-- third SLIDE -->
                    <li data-transition="random" data-slotamount="10" data-masterspeed="300">
                        <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
                        <img src="{{ asset('publicWebsite/upload/revolution/lap3.jfif') }}" data-fullwidthcentering="on"
                            alt="slide">
                        <!-- THE CAPTIONS IN THIS SLDIE -->


                        <div class="caption lfl" data-x="730" data-y="460" data-speed="400" data-start="1800"
                            data-easing="easeOutExpo" data-end="7200" data-endspeed="300" data-endeasing="easeInSine">
                            <img src="{{ asset('publicWebsite/upload/revolution/s-border2.png') }}" alt="Image 1">
                        </div>

                    </li>

                </ul>

            </div>
        </div>
    </div>
    </div>
    <!-- End SLider -->

    <!-- content
       ================================================== -->
    <div id="content">
        <!-- End Collection -->
        <!-- our work portfolio -->
        <div class="arrivals">
            <div class="container">
                <div class="filters">
                    <div class="demo1 clearfix">
                        <ul class="filter-container clearfix">
                            @foreach ($stores as $store)
                                <a href="{{ URL('website/product/' . $store->id) }}">
                                    <li class="class1">
                                        <img style="width: 350px; height: 250px;"
                                            src="{{ asset('images/' . $store->logo) }}" alt="">
                                        <div class="arr-content">
                                                <h4><span class="#">{{ $store->address }}</span></h4>
                                                <h4><span class="#">{{ $store->name }}</span></h4>
                                        </div>
                                    </li>
                                </a>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- End Filters -->
            </div>
        </div>
        <!-- end our work portfolio -->
    </div>
    <!-- End content -->
@endsection
