@extends('master')
@section('content')
<div class="container">
    <h2>{{$house->name}}</h2>
    <h2>Thông tin về căn nhà</h2>
    <p>{!!$house->description!!}</p>
    <h2>Một số hình ảnh căn nhà</h2>
</div>

<div id="carouselExampleIndicators" class="carousel slide container" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
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
<section class="room-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="room__details__content">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="room__details__facilities">
                                <h2>Thông tin : </h2>
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
                                            <li> Giá thành: {{$house->price}}</li>
                                            <li><a style="width: 200px;" href="" class="btn btn-primary">Đặt thuê
                                                    ngay</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="room__details__more__facilities">
                                <h2>Cơ sở vật chất</h2>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="room__details__more__facilities__item">
                                            <div class="icon"><img src="{{asset('images/house/facilities/fac-1.png')}}"
                                                    alt=""></div>
                                            <h6>Điều hòa</h6>
                                        </div>
                                        <div class="room__details__more__facilities__item">
                                            <div class="icon"><img src="{{asset('images/house/facilities/fac-2.png')}}"
                                                    alt=""></div>
                                            <h6>TV</h6>
                                        </div>

                                    </div>
                                    <div class="col-lg-6">
                                        <div class="room__details__more__facilities__item">
                                            <div class="icon"><img src="{{asset('images/house/facilities/fac-6.png')}}"
                                                    alt=""></div>
                                            <h6>An ninh 24/24</h6>
                                        </div>
                                        <div class="room__details__more__facilities__item">
                                            <div class="icon"><img src="{{asset('images/house/facilities/fac-4.png')}}"
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

@endsection
