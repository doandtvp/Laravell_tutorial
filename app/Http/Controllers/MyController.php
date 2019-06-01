<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MyController extends Controller
{
    public function index()
    {
    	// echo "Hello I'm Doan Tran";
    }

   	// public function name($ten)
    // {
    	// echo "Hello I'm: " . $ten;
    	// return redirect()->route('myRoute');
    // }

    public function GetURl(Request $request)
    {

    	//---tra ve Route dang dung---
    	// return $request -> path();

    	// ---tra ve URL day du---
    	// return $request -> url();

    	//---kiem tra phuong thuc truyen---
    	// if ($request->isMethod('get')) {
    	// 	echo "Correct <3";
    	// } else {
    	// 	echo "Wrong !!!";
    	// }

    	//---kiem tra chuoi X co trong URL hay khong---
    	// if ($request->is('My*')) {
    	// 	echo "Correct <3. Have My";
    	// } else {
    	// 	echo "Oop !!!. Don't have";
    	// }
    }

    //use Cookie with request and response
    public function setCookie(){
        $response = new Response();
        $response->withCookie(
            'DoanTran', //name of Cookie
            'Basic - Laravel ', //value of Cookie
            0.5//time(minute)
        );
        echo "Da xet Cookie !";
        return $response;
    }

    public function getCookie(Request $request){
        echo "Cookie cua ban la: ";
        return $request->cookie('DoanTran');
    }

}
