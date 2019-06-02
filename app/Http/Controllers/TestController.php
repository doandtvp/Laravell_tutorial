<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TestController extends Controller
{
    public function GetURl(Request $request)
    {

    	//---tra ve Route dang dung---
    	return $request -> path();

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
}
