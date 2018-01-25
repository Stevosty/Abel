<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Slider;
use App\Content;
use Session;

class PageController extends Controller
{
    public function homePage()
    {
    	$slides = Slider::with('group')->where('status', '=', 'no')->get();

    	$info = Content::where('title','=','home')->first();

    	$products = Product::with('size', 'group')->where([['type','=','latest'],['status','=','no']])->orderBy('id','asc')->limit(8)->get();

    	//return $info;

    	return view('homePage', compact('slides', 'products', 'info'));
    	//return $products;
    }

    public function productPage(Request $request)
    {
        $product = Product::with('size', 'group')->where('id','=',$request->id)->first();

        $others = Product::with('size', 'group')
        ->where('group_id','=',$product->group_id)
        ->where('id','!=',$request->id)
        ->where('status','=','no')
        ->orderBy('product','desc')
        ->limit(3)->get();

        //return $product;

        return view('productPage', compact('product', 'others'));

    }

    public function medicalNutritionPage()
    {

        $other = 1;
        $products = Product::with('size', 'group')
        ->where('group_id','=', 1)
        ->where('status','=','no')
        ->orderBy('product','desc')
        ->get();

        //return $products;

        return view('page', compact('products', 'other'));

    }

    public function infectionControlPage()
    {

        $other = 2;
        $products = Product::with('size', 'group')
        ->where('group_id','=', 2)
        ->where('status','=','no')
        ->orderBy('product','desc')
        ->get();

        //return $products;

        return view('page', compact('products', 'other'));

    }

    public function skinCarePage()
    {

        $other = 3;
        $products = Product::with('size', 'group')
        ->where('group_id','=', 3)
        ->where('status','=','no')
        ->orderBy('product','desc')
        ->get();

        //return $products;

        return view('page', compact('products', 'other'));

    }

    public function dialysisPage()
    {

        $other = 4;
        $products = Product::with('size', 'group')
        ->where('group_id','=', 4)
        ->where('status','=','no')
        ->orderBy('product','desc')
        ->get();

        //return $products;

        return view('page', compact('products', 'other'));

    }
    public function pharmacyPage()
    {

        $other = 5;
        $products = Product::with('size', 'group')
        ->where('group_id','=', 5)
        ->where('status','=','no')
        ->orderBy('product','desc')
        ->get();

        //return $products;

        return view('page', compact('products', 'other'));

    }

    public function aboutPage()
    {
        $info = Content::where('title','=','about')->first();

        return view('aboutPage', compact('info'));
    }

    public function contactPage()
    {
        $info = Content::where('title','=','contact')->first();

        return view('contactPage', compact('info'));
    }


}
