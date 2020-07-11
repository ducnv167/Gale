@extends('master')
@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('images/bg_1.jpg') }});"
             data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate pb-0 text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Host <i
                                    class="fa fa-chevron-right"></i></a></span> <span>Rental <i
                                class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-3 bread">Rental</h1>
                </div>
            </div>
        </div>
    </section>
    <div>
        <div class="container">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name House</th>
                    <th scope="col">Arrival Date</th>
                    <th scope="col">Departure Date</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $key=> $order)

                    <tr>
                        <th scope="row">{{++$key}}</th>
                        <td>{{$order->house->name}}</td>
                        <td>{{\Carbon\Carbon::create($order->arrival_date)->toFormattedDateString()}}</td>
                        <td>{{\Carbon\Carbon::create($order->departure_date)->toFormattedDateString()}}</td>
                        <td>Done</td>
                        <input type="text" hidden
                               value="{{$date= \Carbon\Carbon::create($order->arrival_date)->diffInDays($currentDate) }}">
                        @if( $date>1)
                            <td><a href="{{route('order.delete',$order->id)}}" class="btn btn-warning"
                                   onclick="return confirm('Are you  sure?')">Cancel</a></td>
                        @else
                            <td></td>
                        @endif
                        <td>
                            <div class="btn" data-toggle="modal" data-target="#myReview">Review</div>
                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>
    </div>
    <div class="modal fade" id="myReview" role="dialog">
        <div class="modal-dialog modal-dialog modal-lg">
            <div class="container modal-content" style="background: #f7f7f7">
                <form class="container" style="margin: 20px" action="">
                    <h2 style="text-align: center">Review</h2>
                    <div>
                        <h3>Star Rating</h3>
                        <span class="fa fa-star star-1"></span>
                        <span class="fa fa-star star-2"></span>
                        <span class="fa fa-star star-3"></span>
                        <span class="fa fa-star star-4"></span>
                        <span class="fa fa-star star-5"></span>
                        <br>
                        <button
                            class="result-rating btn btn-success"
                            style="width: 130px; background: #24A148" disabled>
                            Rating
                        </button>
                    </div>
                    <hr>
                    <div class="form-group @error('description') is-invalid @enderror">
                        <h3>Description</h3>
                        <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
                        <script>
                            CKEDITOR.replace('description');
                        </script>
                    </div>
                    <hr>
                    <input type="submit" class="btn-primary">
                </form>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('.star-5').hover(function () {
                $('.star-5, .star-4, .star-3, .star-2, .star-1').addClass('checked');
                $('.result-rating').text('Excellent')
            });
            $('.star-4').hover(function () {
                $('.star-5').removeClass('checked');
                $('.star-4, .star-3, .star-2, .star-1').addClass('checked');
                $('.result-rating').text('Good')
            }).click(function () {

            });
            $('.star-3').hover(function () {
                $('.star-5, .star-4').removeClass('checked');
                $('.star-3, .star-2, .star-1').addClass('checked');
                $('.result-rating').text('Ok')
            }).click(function () {

            });
            $('.star-2').hover(function () {
                $('.star-5, .star-4, .star-3').removeClass('checked');
                $('.star-2, .star-1').addClass('checked');
                $('.result-rating').text('Poor')
            }).click(function () {

            });
            $('.star-1').hover(function () {
                $('.star-5, .star-4, .star-3, .star-2').removeClass('checked');
                $('.star-1').addClass('checked');
                $('.result-rating').text('Very bad')
            }).click(function () {

            });

        })
    </script>
@endsection
