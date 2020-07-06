@extends('master')
@section('content')
<div class="container">
    <h2>{{$house->name}}</h2>
    <h2>Thông tin về căn nhà</h2>
    <p>{!!$house->description!!}</p>
    <h2>Một số hình ảnh căn nhà</h2>
</div>

    <div class="container">
        <h2>{{$house->name}}</h2>
        <p>{{$house->description}}</p>
    </div>
    <div id="carouselExampleIndicators" class="carousel slide container" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://picsum.photos/id/11/1000/400" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://picsum.photos/id/115/1000/400" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://picsum.photos/id/111/1000/400" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://picsum.photos/id/112/1000/400" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://picsum.photos/id/113/1000/400" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://picsum.photos/id/114/1000/400" class="d-block w-100" alt="...">
            </div>
        </div>
        @endforeach
    </div>
    <section class="room-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="room__details__content">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="room__details__facilities">
                                    <h2>Information : </h2>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <ul>
                                                <li> {{$house->house_category}}</li>
                                                <li> {{$house->room_category}}</li>
                                                <li> Số lượng phòng ngủ {{$house->bedroom_amount}}</li>
                                                <li> Số lượng phòng tắm {{$house->bathroom_amount}}</li>

                                            </ul>
                                        </div>
                                        <div class="col-lg-6">
                                            <ul>
                                                <li> Price: {{$house->price}}</li>
                                                <li>Address: {{$house->address}}</li>
                                                <li><a style="width: 200px;" href="" class="btn btnbuy">Rent Now!</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="room__details__more__facilities">
                                    <h2>Infrastructure</h2>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="room__details__more__facilities__item">
                                                <div class="icon"><img
                                                            src="{{asset('images/house/facilities/fac-1.png')}}"
                                                            alt=""></div>
                                                <h6>Air condition</h6>
                                            </div>
                                            <div class="room__details__more__facilities__item">
                                                <div class="icon"><img
                                                            src="{{asset('images/house/facilities/fac-2.png')}}"
                                                            alt=""></div>
                                                <h6>Televison</h6>
                                            </div>


                                    </div>
                                    <div class="col-lg-6">
                                        <div class="room__details__more__facilities__item">
                                            <div class="icon"><img src="{{asset('images/house/facilities/fac-6.png')}}"
                                                    alt=""></div>
                                            <h6>An ninh 24/24</h6>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="room__details__more__facilities__item">
                                                <div class="icon"><img
                                                            src="{{asset('images/house/facilities/fac-6.png')}}"
                                                            alt=""></div>
                                                <h6>Security 24/24</h6>
                                            </div>
                                            <div class="room__details__more__facilities__item">
                                                <div class="icon"><img
                                                            src="{{asset('images/house/facilities/fac-4.png')}}"
                                                            alt=""></div>
                                                <h6>Wifi-Internet</h6>
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
    <br>
    <br>
    <br>

    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                    <span class="subheading btn btn-warning">See more</span>
                </div>
            </div>
            <br>
            <div class="row ftco-animate ">
                <div class="col-md-12">
                    <div class="row">
                        @foreach($bonusHouse as $item)
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="car__item">
                                    <div class="car__item__text">
                                        <div class="car__item__text__inner">
                                            <div class="label-date">2020</div>
                                            <h5 class="maxtext"><a href="{{route('house.details',["$item->id"])}}">{{$item->name}}</a>
                                            </h5>
                                            <ul>
                                                <li> {{$item->house_category}}</li>
                                                <li> {{$item->room_category}}</li>
                                            </ul>
                                        </div>
                                        <div class="car__item__price">
                                            <span><a href="" class="btn btn-success">For Sale</a></span>
                                            <h6>{{$item->price}}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{--            <div style="margin-top: 30px">{{$houses->links()}}</div>--}}
                </div>
            </div>

        </div>
    </section>
@endsection

