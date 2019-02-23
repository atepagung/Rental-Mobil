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
        @if (isset($data['services']))
            <form action="{{ route('booking.dataDiri') }}" method="POST">
                @csrf
                <input type="hidden" name="layanan" value="{{ $data['prev_data']['layanan'] }}">
                <input type="hidden" name="keberangkatan" value="{{ $data['prev_data']['keberangkatan'] }}">
                <input type="hidden" name="tujuan" value="{{ $data['prev_data']['tujuan'] }}">
                <input type="hidden" name="date" value="{{ $data['prev_data']['date'] }}">
                @foreach ($data['services'] as $service)
                    <div class="container padd-lr0 xs-padd">
                        <div class="product-list clearfix">
                            <div class="row">
                                <div class="col-xs-12 padd-lr0 xs-padd">
                                    <div class="product-table">
                                        <div class="img-wrap product-cell">
                                            <img src="images/product1.png" alt="img" class="img-responsive">
                                        </div>
                                        <div class="text-wrap product-cell">
                                            <div class="title">{{ $service['service_class']['type'] }}</div>
                                            <div class="subtitle">{{ $service['service_class']['seat'] }} seat</div>
                                        </div>
                                        <div class="price-wrap product-cell">
                                            <span>Rp{{ number_format($service['cost'], 2, ',', '.') }}</span>/Day
                                        </div>
                                        <div class="btn-wrap product-cell">
                                            {{-- <a href="{{ route('booking.dataDiri', ['id' => $service['id']]) }}" class="wheel-btn">Select</a> --}}
                                            {{-- <input type="submit" value="{{ $service['id'] }}"> --}}
                                            <button name="service_id" value="{{ $service['id'] }}" class="wheel-btn">PILIH</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </form>
        @else
            
        @endif
    </div>

    <!-- ////////////////////////////////////////// -->

@endsection