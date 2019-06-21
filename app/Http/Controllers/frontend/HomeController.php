<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
class HomeController extends Controller
{
    public function index(){
        $list=Product::where(['status'=>1])->orderBy('created_at','desc')->take(12)->get();
        return view('frontend.home',compact('list'));
    }
}
