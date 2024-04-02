<?php

namespace App\Http\Middleware;

use Closure;
use Firebase\JWT\ExpiredException;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Exception;

class JwtVerify
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $headers =  explode(' ',$request->header('Authorization'));
        $bearer = isset($headers[0])? $headers[0]:false;
        $token = isset($headers[1])? $headers[1]:false;

        if (!$token || !$bearer){
            return response()->json(['status'=>0, 'msg'=>'Unauthorized Access'],401);
        }

        try {
            $secretKey = getenv('TOKEN_SECRET_KEY');
            $decode = JWT::decode($token, new Key($secretKey, 'HS256'));
            return $next($request);

        }catch (ExpiredException $e){
            return response()->json(['status'=>0, 'msg'=>'ExpiredException Token Expired'],401);
        }catch (Exception $e){
            return response()->json(['status'=>0, 'msg'=>'Exception Unauthorized Access'],401);
        }
    }
}
