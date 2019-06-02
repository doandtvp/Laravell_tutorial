<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MyController extends Controller
{
    public function index()
    {
    	echo "Hello I'm Doan Tran";
    }

    //truyen tham so cho controller
   	public function name($ten)
    {
    	echo "Hello World I'm: " . $ten;
    }

}
