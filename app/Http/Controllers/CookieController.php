<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CookieController extends Controller
{
   //use Cookie with request and response
    public function setCookie(){
        $response = new Response();
        $response->withCookie(
            'DoanTran', //name of Cookie
            'Basic - Laravel ', //value of Cookie
            0.5 //time(minute)
        );
        echo "Da xet Cookie !";
        return $response;
    }

    public function getCookie(Request $request){
        echo "Cookie cua ban la: ";
        return $request->cookie('DoanTran');
    }
}
