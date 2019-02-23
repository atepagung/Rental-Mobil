@extends('layouts.layout_home')

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="wheel-start wheel-start2">
    <img src="{{ asset('/images/bckgrnd.jpeg') }}" alt="" class="wheel-img">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container padd-lr0">
        <div class="col-lg-12  padd-lr0">
            <div class="wheel-start-form wheel-start-form2 marg-lg-t310   marg-md-t0">
                <form action="{{ route('pilihArmada') }}" method="post">
                    @csrf
                    <div class="clearfix">
                        <div class="wheel-date">
                            <span>Pilih Layanan</span>
                            <select class="selectpicker" name="layanan">
                                @foreach ($rates as $rate)
                                    <option value="{{ strtoupper($rate->type) }}">{{ strtoupper($rate->type) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="wheel-date">
                            <span>Keberangkatan</span>
                            <select class="selectpicker" name="keberangkatan">
                                @foreach($pickupPlaces as $pickupPlace)
                                    <option value="{{ strtoupper($pickupPlace->city) }}">{{ strtoupper($pickupPlace->city) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="wheel-date">
                            <span>Tujuan</span>
                            <select class="selectpicker" name="tujuan">
                                @foreach($destinations as $destination)
                                    <option value="{{ strtoupper($destination->city) }}">{{ strtoupper($destination->city) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="wheel-date">
                            <span>Tanggal</span>
                            {{-- <label class="fa fa-calendar" for="input-val22"> --}}
                            <input type="date" value="" name="date">
                            {{-- </label> --}}
                        </div>
                        <button class="wheel-btn btn-block" id='input-val27'>CARI ARMADA</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-12">
            <header class="wheel-header text-center marg-lg-t80 ">
                <h1></h1>
                <h5></h5>
            </header>
        </div>
    </div>
    
</div>
<!-- ////////////////////////////////////////// -->
<div class="wheel-four-block-body">
    <div class="container-fluid padd-lr0">
        <div class="row">
            <div class="col-lg-3 col-sm-6 padd-lr0 wheel-bg7">
                <div class="wheel-four-block">
                    <img src="{{ asset('/wheel/images/ico4.png') }}" alt="">
                    <h5>Most Affordable</h5>
                    <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6  padd-lr0 wheel-bg8">
                <div class="wheel-four-block">
                    <img src="{{ asset('/wheel/images/ico2a.png') }}" alt="">
                    <h5>Best Rated Service</h5>
                    <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 padd-lr0 wheel-bg9">
                <div class="wheel-four-block">
                    <img src="{{ asset('/wheel/images/ico1.png') }}" alt="">
                    <h5>Exclusive Discounts</h5>
                    <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 padd-lr0 wheel-bg10">
                <div class="wheel-four-block">
                    <img src="{{ asset('/wheel/images/ico5.png') }}" alt="">
                    <h5>Easy Booking & Searching</h5>
                    <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ////////////////////////////////////////// -->
<div class="wheel-bg2">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="wheel-header wheel-testi-header text-center marg-lg-t155 marg-lg-b65 marg-md-t50  marg-md-b50">
                    <h3>Our Mission is <span>Client’s</span> Satisfaction</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="wheel-testimonial text-center">
                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                    <div class="wheel-testimonial-info">
                        <span>Anthony Marshal</span>
                        <img src="{{ asset('/wheel/images/l1.png') }}" alt="">
                        <p> C.E.O. & Co-Founder</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 padd-lr0  marg-lg-b150  marg-md-b50">
                <div class="wheel-testimonial-item">
                    <i class="fa fa-users"></i>
                    <span data-to="753" data-speed="10000"></span><b>+</b>
                    <p>Dedicated Employees</p>
                </div>
                <div class="wheel-testimonial-item">
                    <i class="fa fa-thumbs-o-up"></i>
                    <span data-to="9053" data-speed="5000"></span><b>+</b>
                    <p>Satisfied Customers</p>
                </div>
                <div class="wheel-testimonial-item">
                    <i class="fa  fa-car"></i>
                    <span data-to="529" data-speed="6000"></span><b>+</b>
                    <p>100% Fit Veihicles</p>
                </div>
                <div class="wheel-testimonial-item">
                    <i class="fa fa-trophy"></i>
                    <span data-to="111" data-speed="1000"></span><b>+</b>
                    <p>Int. Awards Achieved</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ////////////////////////////////////////// -->
<div class="container padd-lr0">
    <div class="row">
        <div class="col-xs-12">
            <header class="wheel-header text-center marg-lg-t140 marg-lg-b95  marg-md-t50 marg-md-b50">
                <h5>We have a Great  </h5>
                <h3>collection of <span> vehicles</span></h3>
            </header>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 ">
            <div class="wheel-collection-slider marg-lg-b140  marg-md-b50">
                <div class="swiper-container  " data-autoplay="0" data-touch="1" data-mouse="0" data-xs-slides="1" data-sm-slides="1" data-md-slides="1" data-lg-slides="1" data-add-slides="1" data-slides-per-view="responsive" data-loop="1" data-speed="1000">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="row">
                                <div class="col-md-5 padd-lr0">
                                    <div class="wheel-collection-info wheel-collection-info2">
                                        <div class="wheel-collection-text">
                                            <h4>2016 Nissan Juke</h4>
                                            <span>Luxury Sports Car</span>
                                            <h5><b>$79 <sup>00</sup></b>/Day</h5>
                                            <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsu nec sagittis sem nibh id elit. </p>
                                            <ul>
                                                <li><i class="fa fa-suitcase"></i><span>2 Bags</span></li>
                                                <li><i class="fa fa-user"></i><span>2 Passengers</span></li>
                                                <li><i class="fa fa-tachometer"></i><span>5.6/100 MPG</span></li>
                                            </ul>
                                            <a href="" class="wheel-btn">View All rental Car</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 padd-lr0">
                                    <div class="wheel-collection-img wheel-collection-img2"><img src="{{ asset('/wheel/images/hiace.jpg') }}" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row">
                                <div class="col-md-5 padd-lr0">
                                    <div class="wheel-collection-info wheel-collection-info2">
                                        <div class="wheel-collection-text">
                                            <h4>2016 Nissan Juke</h4>
                                            <span>Luxury Sports Car</span>
                                            <h5><b>$79 <sup>00</sup></b>/Day</h5>
                                            <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsu nec sagittis sem nibh id elit. </p>
                                            <ul>
                                                <li><i class="fa fa-suitcase"></i><span>2 Bags</span></li>
                                                <li><i class="fa fa-user"></i><span>2 Passengers</span></li>
                                                <li><i class="fa fa-tachometer"></i><span>5.6/100 MPG</span></li>
                                            </ul>
                                            <a href="" class="wheel-btn">View All rental Car</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 padd-lr0">
                                    <div class="wheel-collection-img wheel-collection-img2"><img src="{{ asset('/wheel/images/hiace.jpg') }}" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row">
                                <div class="col-md-5 padd-lr0">
                                    <div class="wheel-collection-info wheel-collection-info2">
                                        <div class="wheel-collection-text">
                                            <h4>2016 Nissan Juke</h4>
                                            <span>Luxury Sports Car</span>
                                            <h5><b>$79 <sup>00</sup></b>/Day</h5>
                                            <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsu nec sagittis sem nibh id elit. </p>
                                            <ul>
                                                <li><i class="fa fa-suitcase"></i><span>2 Bags</span></li>
                                                <li><i class="fa fa-user"></i><span>2 Passengers</span></li>
                                                <li><i class="fa fa-tachometer"></i><span>5.6/100 MPG</span></li>
                                            </ul>
                                            <a href="" class="wheel-btn">View All rental Car</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 padd-lr0">
                                    <div class="wheel-collection-img wheel-collection-img2"><img src="{{ asset('/wheel/images/hiace.jpg') }}" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination"></div>
                </div>
                <div class="swiper-outer-left fa fa-angle-left"></div>
                <div class="swiper-outer-right fa fa-angle-right"></div>
            </div>
        </div>
    </div>
</div>
<!-- //////////////////////////////////////////-->
<div class="wheel-bg2">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="wheel-header text-center marg-lg-t140 marg-lg-b90  marg-md-t50">
                    <h5>How it works </h5>
                    <h3>Easy Process for<span> You</span></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 padd-l0  padd-md-lr15">
                <div class="wheel-works text-center marg-lg-b150 marg-md-b50 ">
                    <div class="wheel-works-ico"><img src="{{ asset('/wheel/images/ico6.png') }}" alt=""></div>
                    <h5>Make Plans</h5>
                    <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="wheel-works text-center marg-lg-b150 marg-md-b50 ">
                    <div class="wheel-works-ico"><img src="{{ asset('/wheel/images/ico7.png') }}" alt=""></div>
                    <h5>Find a Car</h5>
                    <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis</p>
                </div>
            </div>
            <div class="col-md-4 padd-r0 padd-md-lr15">
                <div class="wheel-works text-center marg-lg-b150 marg-md-b50 ">
                    <div class="wheel-works-ico"><img src="{{ asset('/wheel/images/ico8.png') }}" alt=""></div>
                    <h5>Enjoy the trip</h5>
                    <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ////////////////////////////////////////// -->

<!-- ////////////////////////////////////////// -->
<div class="wheel-app-body">
    <img src="{{ asset('/wheel/images/bg6.jpg') }}" alt="" class="wheel-img">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="wheel-app-img marg-lg-t90 marg-md-t50"><img src="{{ asset('/wheel/images/i19.png') }}" alt="" ></div>
            </div>
            <div class="col-md-8">
                <div class="wheel-app-text  marg-lg-t140 marg-md-b50 marg-md-t50">
                    <header class="wheel-header text-center">
                        <h5>The App is Here </h5>
                        <h3>Now It’s easier then <span>ever</span></h3>
                    </header>
                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.</p>
                    <div class="wheel-app  text-center">
                        <a href=""><img src="{{ asset('/wheel/images/ico9.png') }}" alt=""></a>
                        <a href=""><img src="{{ asset('/wheel/images/ico10.png') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ////////////////////////////////////////// -->

@endsection