<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\PickupPlace;
use App\Destination;
use App\Service;
use App\Rate;
use App\Booking;
use App\Unit;

class BookingController extends Controller
{
    function __construct(Request $request)
	{
		$token = $request->token;
		$this->middleware(['checkToken:'.$token]);
	}

	public function addMessageSuccess($output, $message)
	{
		return [
			'status' => 'OK',
			'message' => $message,
			'result' => $output
		];
	}

	public function addMessageFailed($message)
	{
		return [
			'status' => 'Fail',
			'message' => $message
		];
	}

	public function getPickupPlace($token)
	{
		$pickupPlaces = PickupPlace::all();

		$output = $this->addMessageSuccess($pickupPlaces->toArray(), 'Success');
		return response()->json($output, 200);
	}

	public function getDestination($token)
	{
		$destinations = Destination::all();

		$output = $this->addMessageSuccess($destinations->toArray(), 'Success');
		return response()->json($output, 200);
	}

	public function prepare($token)
	{
		$pickupPlaces = PickupPlace::all();
		$destinations = Destination::all();
		$rates = Rate::all();
		$data = [
			'pickupPlaces' => $pickupPlaces,
			'destinations' => $destinations,
			'rates' => $rates
		];

		$output = $this->addMessageSuccess($data, 'Success');
		return response()->json($output, 200);
	}

	public function getArmada($token, Request $request)
	{
		$pickupPlaceId = PickupPlace::where('city', strtoupper($request->pickupPlace))->first()->id;
		$destinationId = Destination::where('city', strtoupper($request->destination))->first()->id;
		$rateID = Rate::where('type', strtoupper($request->rate))->first()->id;
		$service = Service::with('service_class')->where(['pickup_place_id' => $pickupPlaceId, 'destination_id' => $destinationId, 'rate_id' => $rateID])->get();

		if ($service->isEmpty()) {
			$output = $this->addMessageFailed('Layanan tidak tersedia!');
    		return response()->json($output, 400);
		}

		$data = array();

		foreach ($service as $serv) {
			$tgl_pengembalian = date("Y-m-d", strtotime("+".($serv->minimum_days - 1)." day", strtotime($request->tgl_peminjaman)));
			if ($serv->service_class->type == "VIP") {
				$booksVIP = Booking::whereDate('tgl_peminjaman', '<=', $request->tgl_peminjaman)->whereDate('tgl_pengembalian', '>=', $tgl_pengembalian)->where('service_id', '1')->where('status', '<>', 2)->get()->count();

				$unitVIP = Unit::where(['unit_type_id' => 1])->first()->unit;

				if ($unitVIP - $booksVIP > 0) {
                    $servs = $serv->toArray();
                    $servs['units'] = ($unitVIP - $booksVIP);
                    array_push($data, $servs);
				}
			}else {
				$booksLux = Booking::whereDate('tgl_peminjaman', '<=', $request->tgl_peminjaman)->whereDate('tgl_pengembalian', '>=', $tgl_pengembalian)->where('service_id', '2')->where('status', '<>', 2)->get()->count();
				$unitLux = Unit::where(['unit_type_id' => 2])->first()->unit;

				if ($unitLux - $booksLux > 0) {
                    $servs = $serv->toArray();
                    $servs['units'] = ($unitLux - $booksLux);
                    array_push($data, $servs);
				}
			}
		}
		$output = $this->addMessageSuccess($data, 'Success');
		return response()->json($output, 200);
	}
}
