@extends('master')
@section('content')

    <div class="container">
        <h2>{{$house->name}}</h2>
        <p>{{$house->description}}</p>
        <h2>Một số hình ảnh căn nhà</h2>
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
                        <div class="room__details__desc">
                            <h2>Thông tin về căn nhà</h2>
                            <p>We’re halfway through the summer, but while plenty of people are kicking back and
                                enjoying their vacations, the social media development teams likely aren’t doing the
                                same. In the past two weeks alone, we’ve seen four big new updates that can directly
                                impact the social marketing campaigns of hotels, resorts, and other businesses in the
                                hospitality industry. Let’s take a close look at each one.</p>
                            <p>The new desktop version of the site is significantly improved, which will make it easier
                                for hotels and resorts to navigate the platform.</p>
                            <p>There is one big change though that we want to note, and that’s the more live video and
                                local moments (the latter of which are based on your location). These will be
                                prioritized in users’ feeds, so take advantage of this and create this content to
                                improve your reach and connect with more members of your target audience.</p>
                            <p>We’ve gotten yet another new feature for Instagram Stories, and this time it’s the Chat
                                sticker, which allows you to invite Story followers to join in on a new group chat.
                                Instagram is currently advertising this as a way to jumpstart big group conversations or
                                make plans.</p>
                        </div>
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
                                                <li><a style="width: 200px;" href="" class="btn btn-primary">Đặt thuê ngay</a></li>
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
                                                <div class="icon"><img
                                                            src="{{asset('images/house/facilities/fac-1.png')}}"
                                                            alt=""></div>
                                                <h6>Điều hòa</h6>
                                            </div>
                                            <div class="room__details__more__facilities__item">
                                                <div class="icon"><img
                                                            src="{{asset('images/house/facilities/fac-2.png')}}"
                                                            alt=""></div>
                                                <h6>TV</h6>
                                            </div>

                                        </div>
                                        <div class="col-lg-6">
                                            <div class="room__details__more__facilities__item">
                                                <div class="icon"><img
                                                            src="{{asset('images/house/facilities/fac-6.png')}}"
                                                            alt=""></div>
                                                <h6>An ninh 24/24</h6>
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

@endsection