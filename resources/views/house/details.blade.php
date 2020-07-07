@extends('master')
@section('content')


    <section class="ftco-section ftco-property-details">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="property-details">
                        <div id="carouselExampleIndicators" class="carousel slide container" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                            </ol>
                            <div class="carousel-inner">
                                @foreach ($house->houseDetails as $key => $item)
                                    <div class="carousel-item @if ($key == 0)
                                    {{"active"}}
                                    @endif">
                                        <img src="{{ asset('storage/' . $item->filename) }}" class="d-block w-100" alt="image">
                                    </div>
                                @endforeach
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>

{{--                        <div class="img" style="background-image: url(images/work-1.jpg);">--}}
{{--                            <a href="https://vimeo.com/45830194" class="img-video popup-vimeo d-flex align-items-center justify-content-center">--}}
{{--                                <span class="fa fa-play"></span>--}}
{{--                            </a>--}}
{{--                        </div>--}}
                        <br>
                        <div class="text">
                            <span class="subheading">{{$house->house_category}}</span>
                            <h2>{{$house->name}}</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 pills">
                    <div class="bd-example bd-example-tabs">
                        <div class="d-flex">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-description" aria-expanded="true">Features</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill" href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer" aria-expanded="true">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-review-tab" data-toggle="pill" href="#pills-review" role="tab" aria-controls="pills-review" aria-expanded="true">Review</a>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
                                <div class="row">
                                    <div class="col-md-4">
                                        <ul class="features">
                                            <li class="check"><span class="fa fa-check-circle"></span>Area: {{$house->address}}</li>
                                            <li class="check"><span class="fa fa-check-circle"></span>Bed Rooms: {{$house->bedroom_amount}}</li>
                                            <li class="check"><span class="fa fa-check-circle"></span>Bath Rooms: {{$house->bathroom_amount}}</li>
                                            <li class="check"><span class="fa fa-check-circle"></span>Room Type: {{$house->room_category}}</li>
                                            <li class="check"><span class="fa fa-check-circle"></span>Garage: 2</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="features">
                                            <li class="check"><span class="fa fa-check-circle"></span>Price: {{$house->price}}/month</li>
                                            <li class="check"><span class="fa fa-check-circle"></span>Year Build: 2020</li>
                                            <li class="check"><span class="fa fa-check-circle"></span>Water</li>
                                            <li class="check"><span class="fa fa-check-circle"></span>Stories: 2</li>
                                            <li class="check"><span class="fa fa-check-circle"></span>Security: 24/24</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <a class="btn btn-info" href="">Rent Now!</a>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-manufacturer" role="tabpanel" aria-labelledby="pills-manufacturer-tab">
                                {!! $house->description!!}
                            </div>

                            <div class="tab-pane fade" id="pills-review" role="tabpanel" aria-labelledby="pills-review-tab">
                                <div class="row">
                                    <div class="col-md-7">
                                        <h3 class="head">23 Reviews</h3>
                                        <div class="review d-flex">
                                            <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                                            <div class="desc">
                                                <h4>
                                                    <span class="text-left">Jacob Webb</span>
                                                    <span class="text-right">14 March 2018</span>
                                                </h4>
                                                <p class="star">
									   				<span>
									   					<i class="fa fa-star"></i>
									   					<i class="fa fa-star"></i>
									   					<i class="fa fa-star"></i>
									   					<i class="fa fa-star"></i>
									   					<i class="fa fa-star"></i>
								   					</span>
                                                    <span class="text-right"><a href="#" class="reply"><i class="fa fa-reply"></i></a></span>
                                                </p>
                                                <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
                                            </div>
                                        </div>
                                        <div class="review d-flex">
                                            <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                                            <div class="desc">
                                                <h4>
                                                    <span class="text-left">Jacob Webb</span>
                                                    <span class="text-right">14 March 2018</span>
                                                </h4>
                                                <p class="star">
									   				<span>
									   					<i class="fa fa-star"></i>
									   					<i class="fa fa-star"></i>
									   					<i class="fa fa-star"></i>
									   					<i class="fa fa-star"></i>
									   					<i class="fa fa-star"></i>
								   					</span>
                                                    <span class="text-right"><a href="#" class="reply"><i class="fa fa-reply"></i></a></span>
                                                </p>
                                                <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
                                            </div>
                                        </div>
                                        <div class="review d-flex">
                                            <div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
                                            <div class="desc">
                                                <h4>
                                                    <span class="text-left">Jacob Webb</span>
                                                    <span class="text-right">14 March 2018</span>
                                                </h4>
                                                <p class="star">
									   				<span>
									   					<i class="fa fa-star"></i>
									   					<i class="fa fa-star"></i>
									   					<i class="fa fa-star"></i>
									   					<i class="fa fa-star"></i>
									   					<i class="fa fa-star"></i>
								   					</span>
                                                    <span class="text-right"><a href="#" class="reply"><i class="fa fa-reply"></i></a></span>
                                                </p>
                                                <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="rating-wrap">
                                            <h3 class="head">Give a Review</h3>
                                            <div class="wrap">
                                                <p class="star">
									   				<span>
									   					<i class="fa fa-star"></i>
									   					<i class="fa fa-star"></i>
									   					<i class="fa fa-star"></i>
									   					<i class="fa fa-star"></i>
									   					<i class="fa fa-star"></i>
									   					(98%)
								   					</span>
                                                    <span>20 Reviews</span>
                                                </p>
                                                <p class="star">
									   				<span>
									   					<i class="fa fa-star"></i>
									   					<i class="fa fa-star"></i>
									   					<i class="fa fa-star"></i>
									   					<i class="fa fa-star"></i>
									   					<i class="fa fa-star"></i>
									   					(85%)
								   					</span>
                                                    <span>10 Reviews</span>
                                                </p>
                                                <p class="star">
									   				<span>
									   					<i class="fa fa-star"></i>
									   					<i class="fa fa-star"></i>
									   					<i class="fa fa-star"></i>
									   					<i class="fa fa-star"></i>
									   					<i class="fa fa-star"></i>
									   					(70%)
								   					</span>
                                                    <span>5 Reviews</span>
                                                </p>
                                                <p class="star">
									   				<span>
									   					<i class="fa fa-star"></i>
									   					<i class="fa fa-star"></i>
									   					<i class="fa fa-star"></i>
									   					<i class="fa fa-star"></i>
									   					<i class="fa fa-star"></i>
									   					(10%)
								   					</span>
                                                    <span>0 Reviews</span>
                                                </p>
                                                <p class="star">
									   				<span>
									   					<i class="fa fa-star"></i>
									   					<i class="fa fa-star"></i>
									   					<i class="fa fa-star"></i>
									   					<i class="fa fa-star"></i>
									   					<i class="fa fa-star"></i>
									   					(0%)
								   					</span>
                                                    <span>0 Reviews</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

{{--    <div class="container">--}}
{{--    <h2>{{$house->name}}</h2>--}}
{{--    <h2>Thông tin về căn nhà</h2>--}}
{{--    <p>{!!$house->description!!}</p>--}}
{{--    <h2>Một số hình ảnh căn nhà</h2>--}}
{{--</div>--}}

{{--<section class="room-details spad">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-12">--}}
{{--                <div class="room__details__content">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-lg-6 col-md-6 col-sm-6">--}}
{{--                            <div class="room__details__facilities">--}}
{{--                                <h2>Thông tin : </h2>--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-lg-6">--}}
{{--                                        <ul>--}}
{{--                                            <li> {{$house->house_category}}</li>--}}
{{--                                            <li> {{$house->room_category}}</li>--}}
{{--                                            <li> Số lượng phòng ngủ {{$house->bedroom_amount}}</li>--}}
{{--                                            <li> Số lượng phòng tắm {{$house->bathroom_amount}}</li>--}}

{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-6">--}}
{{--                                        <ul>--}}
{{--                                            <li> Giá thành: {{$house->price}}</li>--}}
{{--                                            <li><a style="width: 200px;" href="" class="btn btn-primary">Đặt thuê--}}
{{--                                                    ngay</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-6 col-md-6 col-sm-6">--}}
{{--                            <div class="room__details__more__facilities">--}}
{{--                                <h2>Cơ sở vật chất</h2>--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-lg-6">--}}
{{--                                        <div class="room__details__more__facilities__item">--}}
{{--                                            <div class="icon"><img src="{{asset('images/house/facilities/fac-1.png')}}"--}}
{{--                                                    alt=""></div>--}}
{{--                                            <h6>Điều hòa</h6>--}}
{{--                                        </div>--}}
{{--                                        <div class="room__details__more__facilities__item">--}}
{{--                                            <div class="icon"><img src="{{asset('images/house/facilities/fac-2.png')}}"--}}
{{--                                                    alt=""></div>--}}
{{--                                            <h6>TV</h6>--}}
{{--                                        </div>--}}

{{--                                    </div>--}}
{{--                                    <div class="col-lg-6">--}}
{{--                                        <div class="room__details__more__facilities__item">--}}
{{--                                            <div class="icon"><img src="{{asset('images/house/facilities/fac-6.png')}}"--}}
{{--                                                    alt=""></div>--}}
{{--                                            <h6>An ninh 24/24</h6>--}}
{{--                                        </div>--}}
{{--                                        <div class="room__details__more__facilities__item">--}}
{{--                                            <div class="icon"><img src="{{asset('images/house/facilities/fac-4.png')}}"--}}
{{--                                                    alt=""></div>--}}
{{--                                            <h6>Wifi-Internet</h6>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}

@endsection
