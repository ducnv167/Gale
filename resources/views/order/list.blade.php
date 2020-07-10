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
    <div >
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
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>
    </div>
@endsection
