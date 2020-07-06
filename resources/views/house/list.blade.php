@extends('master')
@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('images/bg_1.jpg')}});"
    data-stellar-background-ratio="0.5">
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
                <div class="row">
                    @foreach($houses as $house)
                    <div class="col-md-4" style="margin-top: 30px">
                        <a href="{{route('house.details', ["$house->id"])}}" class="search-place img"
                            style="background-image: url();">
                            <div class="desc">
                                <h3><span>{{$house->room_category}}</span></h3>
                                <span>{{$house->price}}</span>
                            </div>
                        </a>

                    </div>
                    @endforeach
                </div>
                <div style="margin-top: 30px">{{$houses->links()}}</div>x
            </div>
        </div>
    </div>
</section>
@endsection
