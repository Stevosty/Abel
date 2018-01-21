<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Slider;
use Session;

class PageController extends Controller
{
    public function homePage()
    {
    	$slides = Slider::with('group')->where('status', '=', 'no')->get();

    	//return $slides;
    	//latest products
    	//$products = Product::where(['type', '=', 'latest'],['status', ''])->get();//shud be home

    	$products = Product::with('size', 'group')->where('type','=','latest')->orderBy('id','desc')->limit(8)->get();

    	//return $products;

    	return view('homePage', compact('slides', 'products'));
    	//return $products;
    }

    public function productPage(Request $request)
    {
        $product = Product::with('size', 'group')->where('id','=',$request->id)->first();

        $others = Product::with('size', 'group')
        ->where('group_id','=',$product->group_id)
        ->where('id','!=',$request->id)
        ->orderBy('product','desc')
        ->limit(3)->get();

        //return $others;

        return view('productPage', compact('product', 'others'));

    }
}
