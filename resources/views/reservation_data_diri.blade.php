@extends('layouts.layout_home')

@section('content')

@if (Session::has('alert-success'))
    <div class="alert alert-success">
        <ul>
            <li>{{ Session::get('alert-success') }}</li>
        </ul>
    </div>
@endif

@if (Session::has('alert-error'))
    <div class="alert alert-danger">
        <ul>
            <li>{{ Session::get('alert-error') }}</li>
        </ul>
    </div>
@endif
<!-- //////////////////////////////// -->
<div class="wheel-start3">
    <img src="{{ asset('images/bckgrnd.jpeg') }}" alt="" class="wheel-img">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 padd-lr0">
                <div class="wheel-start3-body clearfix marg-lg-t255 marg-lg-b75 marg-sm-t190 marg-xs-b30">
                    <h3>Reservation</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /////////////////////////////////// -->


    <!-- ////////////////////////////////////////// -->
    <div class="prosuct-wrap">
        <!-- ////////////////////////////////////////// -->
        <div class="container padd-lr0">
            <div class="col-lg-12  padd-lr0">
                <div class="wheel-start-form wheel-start-form2">
                    <form action="{{ route('pilihArmada') }}" method="post">
                        @csrf
                        <div class="clearfix">
                            <div class="wheel-date">
                                <span>Pilih Layanan</span>
                                <select class="selectpicker" name="layanan">
                                    @foreach ($data['rates'] as $rate)
                                        @if ($rate->type == $data['prev_data']['layanan'])
                                            <option value="{{ strtoupper($rate->type) }}" selected>{{ strtoupper($rate->type) }}</option>
                                        @else
                                            <option value="{{ strtoupper($rate->type) }}">{{ strtoupper($rate->type) }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="wheel-date">
                                <span>Keberangkatan</span>
                                <select class="selectpicker" name="keberangkatan">
                                    @foreach($data['pickupPlaces'] as $pickupPlace)
                                        @if ($pickupPlace->city == $data['prev_data']['keberangkatan'])
                                            <option value="{{ strtoupper($pickupPlace->city) }}" selected>{{ strtoupper($pickupPlace->city) }}</option>
                                        @else
                                            <option value="{{ strtoupper($pickupPlace->city) }}">{{ strtoupper($pickupPlace->city) }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="wheel-date">
                                <span>Tujuan</span>
                                <select class="selectpicker" name="tujuan">
                                    @foreach($data['destinations'] as $destination)
                                        @if ($destination->city == $data['prev_data']['tujuan'])
                                            <option value="{{ strtoupper($destination->city) }}" selected>{{ strtoupper($destination->city) }}</option>
                                        @else
                                            <option value="{{ strtoupper($destination->city) }}">{{ strtoupper($destination->city) }}</option>
                                        @endif
                                        
                                    @endforeach
                                </select>
                            </div>
                            <div class="wheel-date">
                                <span>Tanggal</span>
                                {{-- <label class="fa fa-calendar" for="input-val22"> --}}
                                <input type="date" value="{{ $data['prev_data']['date'] }}" name="date">
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
        <!-- ////////////////////////////////////////// -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="wheel-header text-center marg-lg-t85 marg-lg-b90  marg-md-t50">
                        {{-- <h5>Say Hello! </h5> --}}
                        <h3>Data Pemesan</span></h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 padd-lr0">
                    <div class="wheel-contact-form text-center marg-lg-b145">
                        <div class="form">
                            <form action="{{ route('booking.payment') }}" method="POST">
                                @csrf
                                <input type="hidden" name="tgl_peminjaman" value="{{ $data['prev_data']['date'] }}">
                                <input type="hidden" name="service_id" value="{{ $data['service_id'] }}">
                                @if (Auth::check())
                                    <input type="text" placeholder="Nama Pemesan" name="nama_pemesan" value="{{ Auth::user()->name }}" required>
                                    <input type="email" placeholder="Email" name="email" value="{{ Auth::user()->email }}" required>
                                    <input type="text" placeholder="Phone" name="phone" value="{{ Auth::user()->phone }}" required>
                                    <textarea placeholder="Address" name="address" required>{{ Auth::user()->address }}</textarea>
                                @else
                                    <input type="text" placeholder="Nama Pemesan" name="nama_pemesan" required>
                                    <input type="email" placeholder="Email" name="email" required>
                                    <input type="text" placeholder="Phone" name="phone" required>
                                    <textarea placeholder="Address" name="address" required></textarea>
                                @endif
                                <textarea placeholder="Pickup Address" name="pickup_address" required></textarea>
                                <button class="wheel-btn">Next</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ////////////////////////////////////////// -->

@endsection