<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Softon\SweetAlert\Facades\SWAL;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Group;
use App\Item;
use App\Product;
use App\Size;
use App\Order;
use App\Buyer;
use Input;


class CartController extends Controller
{
    //Add product
    public function add(Request $request)
    {
    	//Session::flush();
    	if(Session::has('products')){

    		$array = Session::get('products');
	    	foreach ($array as $key => $value) {

		        if($request->size == $value['product_id']){
		        	//dd('2');
		        	SWAL::message('Cart Error', 'The product has already been added to cart.','warning',['timer'=>3000]);

			    	return back();
		        }
		        
	      	}

        	//dd('3');
        	//return $request->size.' = '.$value['product_id'];
        	Session::push('products', [
            'product_id' => $request->size,
            'quantity' => $request->quantity
	            ]);

			$array = Session::get('products');
	      	$count = Session::get('count');
	      	$num = 0;

	      	foreach ($array as $key => $value) {
		        $num++;
	      	}  

	      	Session::put('count', $num);
	      	SWAL::message('Product Added', 'The product was added successfully.','success',['timer'=>3000]);

	    	return back();
		        
    	}
    	else{

    		Session::push('products', [
                'product_id' => $request->size,
                'quantity' => $request->quantity
		            ]);

			$array = Session::get('products');
	      	$count = Session::get('count');
	      	$num = 0;

	      	foreach ($array as $key => $value) {
		        $num++;
	      	}  

	      	Session::put('count', $num);
	      	SWAL::message('Product Added', 'The product was added successfully.','success',['timer'=>3000]);

	    	return back(); 
    	}

    	
    }

    public function view()
    {
		//Session::flush();
		Session::forget('items');
    	$sub_total = 0;
    	$total = 0;
    	$taxRate = 0.16;
    	$tax = 0;
    	$subTotal = 0;
    	
    	//return $array;
    	if(Session::has('products')){
    		$array = Session::get('products');
    		foreach ($array as $key => $value) {
		    $size = Size::with('product')->where('id','=',$value['product_id'])->first();

		    $min_total = $size->price * $value['quantity'];

		    $taxed = $taxRate * $min_total;

		    $tax += $taxed;

		    $sub_total = $min_total + $taxed; 

		    $subTotal +=$min_total;

		    $total += $sub_total;

		    Session::push('items', [
		    	'size_id' => $size->id,
                'product' => $size->product->product,
                'image' => $size->product->image,
                'size' => $size->size,
                'price' => $size->price,
                'quantity' => $value['quantity'],
                'min_total' => $min_total,
                'sub_total' => $sub_total,

		    ]);
	    } 
	    Session::put('subTotal', $subTotal);
	    Session::put('tax', $tax);
	    Session::put('total', $total);
    	}
    	
	    $items = Session::get('items');

		//return $items;
    	return view('cart', compact('items'));
    }

    public function update(Request $request)
    {
    	
    	$array = Session::get('products');
    	$items = [];

    	foreach ($array as $pro) {

	        if($pro['product_id'] == $request->size){
	
	        	$pro['quantity'] = $request->quantity;
	
	        }	
	        $items[] =array (
	        	'product_id' => $pro['product_id'],
	        	'quantity' => $pro['quantity'],
	        );
      	}

      	Session::put('products', $items);

      	Session::forget('items');
    	$sub_total = 0;
    	$total = 0;
    	$taxRate = 0.16;
    	$tax = 0;
    	$subTotal = 0;

    	$array = Session::get('products');
    	foreach ($array as $key => $value) {
		    $size = Size::with('product')->where('id','=',$value['product_id'])->first();

		    $min_total = $size->price * $value['quantity'];

		    $taxed = $taxRate * $min_total;

		    $tax += $taxed;

		    $sub_total = $min_total + $taxed; 

		    $subTotal +=$min_total;

		    $total += $sub_total;

		    Session::push('items', [
		    	'size_id' => $size->id,
                'product' => $size->product->product,
                'image' => $size->product->image,
                'size' => $size->size,
                'price' => $size->price,
                'quantity' => $value['quantity'],
                'min_total' => $min_total,
                'sub_total' => $sub_total,

		    ]);
	    } 
	    Session::put('subTotal', $subTotal);
	    Session::put('tax', $tax);
	    Session::put('total', $total);

	    $items = Session::get('items');
		SWAL::message('Quantity Updated', 'Product quantity was updated successfully.','success',['timer'=>3000]);

    	return view('cart', compact('items'));

	}

	public function cancel(Request $request)
	{
		$array = Session::get('products');
		$index = 0;
		for($i=0;$i< count($array);$i++){
			
			foreach ($array as $pro) {

		        if($pro['product_id'] == $request->size){
		
		        	$index = $i;
		
		        }	
	      	}
		}

		unset($array[$index]);


      	Session::put('products', $array);
      	$num = 0;

	      	foreach ($array as $key => $value) {
		        $num++;
	      	}  

	    Session::put('count', $num);
      	Session::forget('items');
    	$sub_total = 0;
    	$total = 0;
    	$taxRate = 0.16;
    	$tax = 0;
    	$subTotal = 0;

    	$array = Session::get('products');
    	//return $array;
    	foreach ($array as $key => $value) {
		    $size = Size::with('product')->where('id','=',$value['product_id'])->first();

		    $min_total = $size->price * $value['quantity'];

		    $taxed = $taxRate * $min_total;

		    $tax += $taxed;

		    $sub_total = $min_total + $taxed; 

		    $subTotal +=$min_total;

		    $total += $sub_total;

		    Session::push('items', [
		    	'size_id' => $size->id,
                'product' => $size->product->product,
                'image' => $size->product->image,
                'size' => $size->size,
                'price' => $size->price,
                'quantity' => $value['quantity'],
                'min_total' => $min_total,
                'sub_total' => $sub_total,

		    ]);
	    } 
	    Session::put('subTotal', $subTotal);
	    Session::put('tax', $tax);
	    Session::put('total', $total);

	    $items = Session::get('items');
		SWAL::message('Product Deleted', 'The product was deleted successfully.','success',['timer'=>3000]);

		//return Session::all();

    	return view('cart', compact('items'));

	}

	public function clear()
	{
		Session::forget('products');
		Session::forget('items');
		Session::put('count', 0);
		SWAL::message('Shopping Cart Cleared', 'All productss removed successfully.','success',['timer'=>3000]);

		//return Session::all();

    	return view('cart');

	}

	public function makeOrder(Request $request)
	{
		if(Session::has('products')){

			$this->validate($request, [
	            'firstname' => 'required|min:3|max:35',
	            'lastname' => 'required|min:3|max:35',
	            'email' => 'required',
	            'phone' => 'required|numeric',
	            'g-recaptcha-response' => 'required|captcha'
	        ],
	        [
	            'firstname.required' => ' The first name field is required.',
	            'firstname.min' => ' The first name must be at least 3 characters.',
	            'firstname.max' => ' The first name may not be greater than 35 characters.',
	            'lastname.required' => ' The last name field is required.',
	            'lastname.min' => ' The last name must be at least 3 characters.',
	            'lastname.max' => ' The last name may not be greater than 35 characters.',  
	            'g-recaptcha-response' => 'Are you a Robot',        
	        ]);

			$buyer = new Buyer;
			$buyer->name = $request->firstname.' '.$request->lastname;
			$buyer->email = $request->email;
			$buyer->phone = $request->phone;
			$buyer->role = '1';
			$buyer->status = 'no';
			$buyer->save();

			$buyerId = buyer::orderBy('id', 'desc')->first();

			$order = new Order;
			$order->buyer_id = $buyerId->id;
			$order->sub_total = Session::get('subTotal');
			$order->vat = Session::get('tax');
			$order->total = Session::get('total');
			$order->status = 'no';
			$order->save();

			$orderId = Order::orderBy('id', 'desc')->first();

    		$array = Session::get('items');

	    	foreach ($array as $key => $value) {

	        	$item = new Item;
	        	$item->order_id = $orderId->id;
	        	$item->size_id = $value['size_id'];
	        	$item->quantity = $value['quantity'];
	        	$item->min_total = $value['min_total'];
	        	$item->save();

	      	}

	      	$beautymail = app()->make(Snowfire\Beautymail\Beautymail::class);
		    $beautymail->send('emails.order', [], function($message)
		    {
		        $message
					->from('orders@crysrockeng.com')
					->to($buyerId->email, $buyerId->name)
					->subject('Prodigy Heathcare Order');
		    });

	  //     	Session::forget('products');
			// Session::forget('items');
			// Session::put('count', 0);

	      	SWAL::message('Order Submitted', 'Your order has been submitted successfully, we will contact you.','success',['timer'=>4000]);
	        return redirect('/');
    	}
	}

}

