@extends('master')
@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('images/bg_1.jpg') }});"
             data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate pb-0 text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">Trang chủ <i
                                    class="fa fa-chevron-right"></i></a></span> <span>Sửa<i
                                class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-3 bread">Sửa thông tin nhà</h1>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container mt-5 mb-5">
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="card">
                        <div class="card-header">
                            {{--                        <h4>?</h4>--}}
                            <h3>Cung cấp chi tiết về nhà của bạn</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{route('house.save',$house->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="">Chọn loại nhà của bạn</label>
                                    <select name="house_category" id="" class="form-control">
                                        <option value="Homestay">Homestay</option>
                                        <option value="Nhà ở">Nhà ở</option>
                                        <option value="Chung cư">Chung cư</option>
                                        <option value="Villa">Villa</option>
                                    </select>
                                </div>
                                <div class="form-grouup">
                                    <label for="">Hãy đặt tên cho ngôi nhà của bạn</label>
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{$house->name}}"
                                           required>
                                </div>
                                @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="">Kiểu cho thuê?</label>
                                    <select name="room_category" id="" class="form-control">
                                        <option value="Toàn bộ căn">Toàn bộ căn</option>
                                        <option value="Phòng đơn lẻ">Phòng đơn lẻ</option>
                                        <option value="Phòng ở ghép">Phòng ở ghép</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Phòng tắm?</label>
                                    <select name="bathroom_amount" id="" class="form-control">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Phòng ngủ?</label>
                                    <select name="bedroom_amount" id="" class="form-control">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Địa chỉ</label>
                                    <input class="form-control @error('address') is-invalid @enderror" type="text"
                                           name="address" id="" value="{{$house->address}}">
                                </div>
                                @error('address')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="">Giá</label>
                                    <input class="form-control @error('price') is-invalid @enderror" type="text"
                                           name="price" id="" value="{{$house->price}}">
                                </div>
                                @error('price')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                {{--                            them location map--}}
                                <div class="form-group">
                                    <label for="">Địa điểm trên bản đồ</label>
                                    <input class="form-control " type="text" name="location" id="" value="{{$house->location}}">
                                </div>


                                {{--                            end them location map--}}
                                <div class="form-group @error('description') is-invalid @enderror">
                                    <label for="">Mô tả chi tiết</label>
                                    <textarea class="form-control" name="description" id="" cols="30" rows="10">{{$house->description}}</textarea>
                                    <script>
                                        CKEDITOR.replace('description');
                                    </script>
                                </div>
                                @error('description')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group @error('image') is-invalid @enderror">
                                    <label for="">Ảnh</label>
                                    {{-- <div class="file-loading">
                                        <input id="image" name="image[]" type="file" multiple>
                                    </div> --}}
                                    <input id="image" name="image[]" type="file" class="file"
                                           data-browse-on-zone-click="true" multiple>
                                    <div id="file-errors"></div>
                                    @if (session('extension'))
                                        <div class="alert alert-danger">{{session('extension')}}</div>
                                    @endif

                                </div>
                                @error('image')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                <button class="btn-lg btn-success" style="float: right">Xác nhận</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        $("#image").fileinput({
            theme: "fas",
            uploadUrl: "/file-upload-batch/2",
            elErrorContainer: '#file-errors',
            allowedFileExtensions: ["jpg", "png", "jpeg"]
        });
    </script>
@endsection
