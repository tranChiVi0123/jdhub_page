<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;//them namspace cua model

class ProductController extends Controller
{
    public function getProduct () {
				$data = Product::select('id','ten')->get()->toArray();//lay gia tri cua model
					return view('product',['product_data' => $data]);//tra du lieu ra view
				}
}
