@extends('master')
@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('images/bg_1.jpg') }});"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate pb-0 text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                class="fa fa-chevron-right"></i></a></span> <span>Rental <i
                            class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-3 bread">Rental</h1>
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
                        <h5>What kind of place are you listing ?</h5>
                        <p>Provide personal details and how we can reach you.</p>
                    </div>
                    <div class="card-body">
                        <form action="">
                            <div class="form-group">
                                <label for="">FIRST, CHOOSE YOUR PROPERTY TYPE</label>
                                <select name="" id="" class="form-control">
                                    <option value="Homestay">Homstay</option>
                                    <option value="Detached house">Detached house</option>
                                    <option value="Apartment">Apartment</option>
                                    <option value="Villa">Villa</option>
                                </select>
                            </div>
                            <div class="form-grouup">
                                <label for="">GUESTS WILL SEE THE NAME OF YOUR HOUSE</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">RENTAL TYPE ?</label>
                                <select name="" id="" class="form-control">
                                    <option value="Entire place">Entire place</option>
                                    <option value="Private room">Private room</option>
                                    <option value="Shared room">Shared rom</option>
                                </select>
                            </div>
                            <button class="btn-lg btn-success" style="float: right">Next</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
