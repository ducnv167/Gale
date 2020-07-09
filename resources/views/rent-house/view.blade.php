<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="{{asset('users/css/style.css')}}">

</head>
<body>
<nav class="navbar navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">
            <img src="{{asset('images/logo-via-logohub.png')}}" width="300" height="50" class="d-inline-block align-top"
                 alt="" loading="lazy">
        </a>
        <h2 style="text-shadow: 5px 5px 5px green;color: black">Booking</h2>
    </div>
</nav>
<br>
<br>
<div class="container">
    <div>
        <div class="row">
            <div class="col-md-6">
                @if(!\Illuminate\Support\Facades\Auth::user())
                    <div class="w3-card-4" style="margin-top: 50px">

                        <div style="background-image: url({{ asset('images/anh1.jpg') }});">
                            <h3 style="margin-left: 40px;padding-top: 50px">Sign in or Register under</h3>
                            <p style="margin: 40px">Sign up to experience a great booking site and receive more
                                promotions.
                            </p>
                            <a style="margin-left: 40px;margin-bottom: 50px" href="" class="btn btn-success">Sign
                                in</a>
                        </div>
                    </div>
                @endif
                <div style="margin-top: 50px">
                    <h2>Booking information</h2>
                </div>
                <div style="margin-top: 50px">
                    <h2>Your information</h2>
                    <br>
                    @if(\Illuminate\Support\Facades\Auth::user())
                        <form id="registerForm" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group1">
                                <label class="label-custom" for="name"><i
                                            class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="nameInput"
                                       value="{{\Illuminate\Support\Facades\Auth::user()->name}}" minlength="3"
                                       readonly/>
                            </div>
                            <div role="alert" id="nameError">
                                <strong></strong>
                            </div>
                            <div class="form-group1">
                                <label class="label-custom" for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="number" name="email" id="emailInput"
                                       value="{{\Illuminate\Support\Facades\Auth::user()->phone}}"
                                       placeholder="Your Email" readonly/>
                            </div>
                            <div class="form-group1">
                                <label class="label-custom" for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="emailInput"
                                       value="{{\Illuminate\Support\Facades\Auth::user()->email}}"
                                       placeholder="Your Email" readonly/>
                            </div>
                        </form>
                    @else
                        <form action="{{route('rent.storeUser')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group1">
                                <label class="label-custom" for="name"><i
                                            class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="nameInput" value="{{old('name')}}"
                                       placeholder="Your Name" minlength="3" required/>
                            </div>
                            <div role="alert" id="nameError">
                                <strong></strong>
                            </div>
                            <div class="form-group1">
                                <label class="label-custom" for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="emailInput" value="{{old('email')}}"
                                       placeholder="Your Email" required/>
                            </div>
                            <div role="alert" id="emailError">
                                <strong></strong>
                            </div>
                            <div class="form-group1">
                                <label class="label-custom" for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" value="{{old('password')}}" name="password"
                                       id="passwordInput" placeholder="Password" minlength="6" required/>
                            </div>
                            <div role="alert" id="passwordError">
                                <strong></strong>
                            </div>
                            <div class="form-group1">
                                <label class="label-custom" for="re-pass"><i
                                            class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="repeatPassword" id="repeatPasswordInput"
                                       placeholder="Repeat your password" minlength="6" required/>
                            </div>
                            <div role="alert" id="repeatPasswordError">
                                <strong></strong>
                            </div>
                            <div class="form-group1">
                                <label class="label-custom" for="pass"><i class="fas fa-phone"></i></label>
                                <input type="number" value="{{old('phone')}}" name="phone" id="phoneInput"
                                       placeholder="Phone" required/>
                            </div>
                            <div role="alert" id="phoneError">
                                <strong></strong>
                            </div>
                            <div class="form-group">
                                <input type="file" class="form-control-file" name="image" id="imageInput">
                            </div>
                            <div role="alert" id="imageError">
                                <strong></strong>
                            </div>
                            <div class="form-group1 form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit"
                                       value="Register" required/>
                            </div>
                        </form>
                    @endif
                </div>
                    @if(\Illuminate\Support\Facades\Auth::user())
                        <form action="{{route('rent.store')}}" method="post">
                        @csrf
                        <input type="hidden" name="user_id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}">
                        <input type="hidden" name="house_id" value="{{$house->id}}">
                        <input type="hidden" name="total_price" value="{{$num*$house->price}}">
                        <input type="hidden" name="arrival_date" value="{{$arrivalDate}}">
                        <input type="hidden" name="departure_date" value="{{$departureDate}}">
                        <input type="submit" class=" btn btn-outline-success" style="width: 100px;background: linear-gradient(to bottom, #ff9933 0%, #ff5050 100%);
" value="Rent now!">
                    </form>
                @endif
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-4">
                <div class="w3-card-4" style="position: sticky; top: 200px;height: auto">
                    <div class="mx-3 py-2 ">
                        <div>
                            <div class="row">
                                <div class="col-7">
                                    <h3>{{$house->name}}</h3>
                                    <p>{{$house->address}}</p>
                                </div>
                                <div class="col-5">
                                    <img src="{{asset('storage/' . $house->houseDetails()->first()->filename)}}" alt="">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h4 style="font-weight: bold">{{$house->bathroom_amount}} bathroom</h4>
                            <h4 style="font-weight: bold"> {{$house->bedroom_amount}} bedroom</h4>
                        </div>
                        <hr>
                        <div>
                            <table>
                                <tr>
                                    <td class="col-12">
                                        {{$arrivalDate}} {{$departureDate}}
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="col-8">
                                        <h4>Price</h4>
                                    </td>
                                    <td class="col-4">
                                        <h4>{{$house->price}}</h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-8">
                                        <h4>Total</h4>
                                    </td>
                                    <td class="col-4">
                                        <h4>9999999</h4>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <hr>
                        <div>
                            <h3 style="color: #fd7e14;font-weight: bold">Waring</h3>
                            <h4>For example: Booking with a total amount of 100 USD, check-in at 2:00 pm on August 31st
                                and check-out on September 1st. The guest will be refunded 100 USD if cancel within 48
                                hours of booking succeeded; 100 USD minus a service fee (if) if cancel after 48 hours of
                                booking succeeded and latest before 1:59 pm of August 30th; 50% of the total booking
                                amount minus the first night and fees if cancel from 2:00 pm on August 30th to 1:59 pm
                                on August 31st</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer style="height: 100px">
</footer>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
</html>
