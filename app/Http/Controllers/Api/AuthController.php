<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Store;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Support\Str;

class AuthController extends Controller
{
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

	public function loginWithToken($token)
	{
		$checkLogin = User::where('token', $token)->get();

		if ($checkLogin->isEmpty()) {
			$output = $this->addMessageFailed('Token not found');
			return response()->json($output, 400);
		}else {
			$output = $this->addMessageSuccess($checkLogin[0]->toArray(), 'Login Berhasil');
    		return response()->json($output, 200);
		}
	}

	public function loginWithEmail(Request $request)
	{
		$checkLogin = User::where('email', $request->email)->first();

		if ($checkLogin != null) {
			if (Hash::check($request->password, $checkLogin->password)) {
				$status = true;
				while ($status) {
					try {
						DB::beginTransaction();

						$checkLogin->token = Str::random(32);
						$checkLogin->save();

						DB::commit();
						$status = false;
					} catch (Exception $e) {
						DB::rollBack();
						$status = true;
					}
				}
				$output = $this->addMessageSuccess($checkLogin->toArray(), 'Login Berhasil');
	    		return response()->json($output, 200);
			}
		}

		$output = $this->addMessageFailed('Wrong email or password');
		return response()->json($output, 400);
	}

	
}
