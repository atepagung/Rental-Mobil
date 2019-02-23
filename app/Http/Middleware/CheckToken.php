<?php

namespace App\Http\Middleware;

use Closure;

use App\User;

class CheckToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $token)
    {
        $checkToken = User::where('token', $token)->first();

        if ($checkToken == null) {
            $output = $this->addMessageFailed('Token not found');
            return response()->json($output, 400);
        }

        return $next($request);
    }

    public function addMessageFailed($message)
    {
        return [
            'status' => 'Fail',
            'message' => $message
        ];
    }
}
