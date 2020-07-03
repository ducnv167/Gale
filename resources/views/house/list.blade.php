@extends('master')
@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('images/bg_1.jpg')}});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate pb-0 text-center">
                    <h1 class="mb-3 bread">List House</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                    <span class="subheading">What we offer</span>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
{{--                    <div class="carousel-properties owl-carousel">--}}
{{--                        <div class="item">--}}
{{--                            <div class="property-wrap ftco-animate">--}}
{{--                                <a href="#" class="img" style="background-image: url({{asset('images/bg_1.jpg')}});">--}}
{{--                                    <div class="rent-sale">--}}
{{--                                        <span class="sale">Sale</span>--}}
{{--                                    </div>--}}
{{--                                    <p class="price"><span class="orig-price">$300,000</span></p>--}}
{{--                                </a>--}}
{{--                                <div class="text">--}}
{{--                                    <ul class="property_list">--}}
{{--                                        <li><span class="flaticon-bed"></span>3</li>--}}
{{--                                        <li><span class="flaticon-bathtub"></span>2</li>--}}
{{--                                        <li><span class="flaticon-floor-plan"></span>1,878 sqft</li>--}}
{{--                                    </ul>--}}
{{--                                    <h3><a href="#">The Blue Sky Home</a></h3>--}}
{{--                                    <span class="location">Oakland</span>--}}
{{--                                    <a href="#" class="d-flex align-items-center justify-content-center btn-custom">--}}
{{--                                        <span class="fa fa-link"></span>--}}
{{--                                    </a>--}}
{{--                                    <div class="list-team d-flex align-items-center mt-2 pt-2 border-top">--}}
{{--                                        <div class="d-flex align-items-center">--}}
{{--                                            <div class="img" style="background-image: url({{asset('images/bg_1.jpg')}});"></div>--}}
{{--                                            <h3 class="ml-2">John Dorf</h3>--}}
{{--                                        </div>--}}
{{--                                        <span class="text-right">2 weeks ago</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

                    <div class="row">
                        @foreach($houses as $house)
                        <div class="col-md-4" style="margin-top: 30px">
                            <a href="#" class="search-place img" style="background-image: url({{$house->image}});">
                                <div class="desc">
                                    <h3><span>{{$house->room_category}}</span></h3>
                                    <span>{{$house->price}}</span>
                                </div>
                            </a>
                        </div>
                        @endforeach

                    </div>
                    <div style="margin-top: 30px">{{$houses->links()}}</div>
            </div>
        </div>
        </div>
    </section>

@endsection



