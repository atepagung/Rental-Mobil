<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PickupPlace;
use App\Destination;
use App\Service;
use App\ServiceClass;
use App\Rate;
use App\Booking;
use App\Unit;
use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function pilihArmada(Request $request)
    {
    	//dd($request->all());
    	$validatedData = $request->validate([
            'layanan' => 'required',
            'keberangkatan' => 'required',
            'tujuan' => 'required',
            'date' => 'required',
        ]);

        $pickupPlaceId = PickupPlace::where('city', strtoupper($request->keberangkatan))->first()->id;
        $destinationId = Destination::where('city', strtoupper($request->tujuan))->first()->id;
        $rateID = Rate::where('type', strtoupper($request->layanan))->first()->id;
        $service = Service::with('service_class')->where(['pickup_place_id' => $pickupPlaceId, 'destination_id' => $destinationId, 'rate_id' => $rateID])->get();

        $prev_data = [
            'layanan' => $request->layanan,
            'keberangkatan' => $request->keberangkatan,
            'tujuan' => $request->tujuan,
            'date' => $request->date,
        ];

        $pickupPlaces = PickupPlace::all();
        $destinations = Destination::all();
        $rates = Rate::all();

        $data = array();
        $data['prev_data'] = $prev_data;
        $data['pickupPlaces'] = $pickupPlaces;
        $data['destinations'] = $destinations;
        $data['rates'] = $rates;

        if ($service->isEmpty()) {
            $errors = "Layanan tidak tersedia!";
            return view('reservation_service', ['data' => $data])->withErrors($errors);
        }

        $data['services'] = [];

        foreach ($service as $serv) {
            $tgl_pengembalian = date("Y-m-d", strtotime("+".($serv->minimum_days - 1)." day", strtotime($request->date)));
            if ($serv->service_class->type == "VIP") {
                $booksVIP = Booking::whereDate('tgl_peminjaman', '<=', $request->date)->whereDate('tgl_pengembalian', '>=', $tgl_pengembalian)->where('service_id', '1')->where('status', '<>', 2)->get()->count();
                
                $unitVIP = Unit::where(['unit_type_id' => 1])->first()->unit;

                if ($unitVIP - $booksVIP > 0) {
                    $servs = $serv->toArray();
                    $servs['units'] = ($unitVIP - $booksVIP);
                    
                    array_push($data['services'], $servs);
                }
            }else {
                $booksLux = Booking::whereDate('tgl_peminjaman', '<=', $request->date)->whereDate('tgl_pengembalian', '>=', $tgl_pengembalian)->where('service_id', '2')->where('status', '<>', 2)->get()->count();
                $unitLux = Unit::where(['unit_type_id' => 2])->first()->unit;

                if ($unitLux - $booksLux > 0) {
                    $servs = $serv->toArray();
                    $servs['units'] = ($unitLux - $booksLux);
                    array_push($data['services'], $servs);
                }
            }
        }

        return view('reservation_service', ['data' => $data]);
    }

    public function dataDiri(Request $request)
    {
        $validatedData = $request->validate([
            'layanan' => 'required',
            'keberangkatan' => 'required',
            'tujuan' => 'required',
            'date' => 'required',
            'service_id' => 'required'
        ]);

        $prev_data = [
            'layanan' => $request->layanan,
            'keberangkatan' => $request->keberangkatan,
            'tujuan' => $request->tujuan,
            'date' => $request->date,
        ];

        $pickupPlaces = PickupPlace::all();
        $destinations = Destination::all();
        $rates = Rate::all();

        $data['prev_data'] = $prev_data;
        $data['service_id'] = $request->service_id;
        $data['pickupPlaces'] = $pickupPlaces;
        $data['destinations'] = $destinations;
        $data['rates'] = $rates;

        return view('reservation_data_diri', ['data' => $data]);
    }

    public function payment(Request $request)
    {
        $validatedData = $request->validate([
            'service_id' => 'required',
            'nama_pemesan' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'tgl_peminjaman' => 'required',
            'pickup_address' => 'required',
        ]);

        dd($request->all());
    }

    public function checkout(Request $request)
    {
        $validatedData = $request->validate([
            'service_id' => 'required',
            'nama_pemesan' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'tgl_peminjaman' => 'required',
            'pickup_address' => 'required',
        ]);
        
        $service = Service::find($request->service_id);

        try {
            DB::beginTransaction();

            $booking = new Booking;
            $booking->days = $service->minimum_days;
            $booking->nama_pemesan = $request->nama_pemesan;
            $booking->email = $request->email;
            $booking->phone = $request->phone;
            $booking->address = $request->address;
            $booking->tgl_peminjaman = $request->tgl_peminjaman;
            $booking->tgl_pengembalian = date("Y-m-d", strtotime("+".($service->minimum_days - 1)." day", strtotime($request->tgl_peminjaman)));
            $booking->service_id = $request->service_id;
            $booking->transaction_id = '-';
            $booking->pickup_address = $request->pickup_address;
            $booking->status = 0;

            if (Auth::user()->role_id == 2) {
                $booking->discount = Auth::user()->discount;
            }else {
                $booking->discount = 0;
            }

            $booking->save();

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            dd('error');
        }
        return "Success";
    }
}
