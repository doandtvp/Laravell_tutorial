<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class handleController extends Controller
{
	// hiển thị view FormRequest.blade.php ở trên.
    public function getForm(){
    	return view('FormRequest');
    }

    // xử lý nhận dữ liệu của form.
    public function handleRequest(Request $request){

    	//xử lý nhận dữ liệu của form theo name.
    	return $request->input('name');

    	//lấy đường dẫn tới form
    	// return $request->path();

    }
}
