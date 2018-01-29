<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Slider;
use App\Content;
use Session;
use Snowfire\Beautymail\Beautymail;
use Softon\SweetAlert\Facades\SWAL;

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

    public function contactForm(Request $request)
    {
            Session::put('name', $request->name);
            Session::put('email', $request->email);
            Session::put('subject', $request->subject);
            Session::put('body', $request->body);

            $beautymail = app(Beautymail::class);
            $beautymail->send('emails.contact', [], function($message) use ($request)
            {
                $message
                    ->from('website@prodigyhealthcare.co.ke')
                    ->to('info@prodigyhealthcare.co.ke', 'Prodigy Healthcare')
                    ->subject('Website Enquiry - '.$request->subject);
            });

            //return Session::all();

            SWAL::message('Enquiry Submitted', 'Your enquiry was submitted successfully, we will get back to you.','success',['timer'=>4000]);
            return redirect('/');
    }


}
