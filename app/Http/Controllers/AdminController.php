<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;
use App\Slider;
use App\Product;
use App\Size;
use App\Order;
use App\Item;
use App\Buyer;
use Carbon\Carbon;

use Illuminate\Support\Facades\Storage;
use Softon\SweetAlert\Facades\SWAL;

class AdminController extends Controller
{
    //show new slider form
    public function addSlider()
    {
    	$groups = Group::all();
    	return view('addSliderForm', compact('groups'));
    	//return $groups;
    }

    //save new slider
    public function newSlider(Request $request)
    {

    	$image2 = $request->file('bg_image');
    	$extension2 = $image2->extension();
    	$time2 = Carbon::now()->timestamp;
    	$name2 = 'bg'.$time2.'.'.$extension2;
    	$upload2 = $image2->storeAs('public/sliders', $name2);
    	$url2 = Storage::url($upload2);

    	$slider = new Slider;
    	$slider->group_id = $request->group;
    	$slider->bg_image = $url2;

    	$image = $request->file('image');
    	$extension = $image->extension();
    	$time = Carbon::now()->timestamp;
    	$name = $time.'.'.$extension;
    	$upload = $image->storeAs('public/sliders', $name);
    	$url = Storage::url($upload);

    	$slider->image = $url;
    	$slider->title = $request->title;
		$slider->fact_1 = $request->fact_1;
		$slider->fact_2 = $request->fact_2;
		$slider->status = 'no';
		$slider->save();

		SWAL::message('Slider Added', 'The Slider has been added successfully.','success',['timer'=>3000]);
     
        return redirect('/addSlider');		

    }

    //remove slider
    public function removeSlider()
    {
    	$slides = Slider::with('group')->where('status', '=', 'no')->get();

    	return view('removeSlider', compact('slides'));
    }

    public function removeSliderId(Request $request)
    {
    	Slider::where('id', $request->id)->update(['status' => 'yes']); 
        SWAL::message('Slider Removed', 'The Slider has been removed successfully.','success',['timer'=>3000]);
     
        return redirect('/removeSlider');
    }

    public function addProduct()
    {
    	$groups = Group::all();

    	return view('addProductForm', compact('groups'));
    }

    public function newProduct(Request $request)
    {
    
    	$image = $request->file('image');
    	$extension = $image->extension();
    	$time = Carbon::now()->timestamp;
    	$name = $time.'.'.$extension;
    	$upload = $image->storeAs('public/medical', $name);
    	$url = Storage::url($upload);

    	$product = new Product;
    	$product->group_id = $request->group;
    	$product->product = $request->product;
    	$product->desc = $request->desc;
    	$product->image = $url;
    	$product->type = $request->type;
		$product->status = 'no';
		$product->save();

		$pro = Product::orderBy('id', 'desc')->first();

		$size = new Size;
		$size->product_id = $pro->id;
		$size->size = $request->size;
		$size->price = $request->price;
		$size->status = "no";
		$size->save();

		SWAL::message('Product Added', 'The Product has been added successfully.','success',['timer'=>3000]);
     
        return redirect('/addProduct');
    }

    public function groupVariant()
    {
        $groups = Group::all();

        return view('groupVariantList', compact('groups'));
    }

    public function productVariant(Request $request)
    {
        $products = Product::with('size', 'group')->where([['group_id','=',$request->id],['status','=','no']])->get();

        return $request->id;

        return view('ProductVariantList', compact('products'));
    }

    public function addProductVariant(Request $request)
    {
    	$product = Product::where('id','=',$request->id)->first();

        return view('addProductVariantForm', compact('product'));
    }

    public function newProductVariant(Request $request)
    {
    	$size = new Size;
        $size->product_id = $request->id;
        $size->size = $request->size;
        $size->price = $request->price;
        $size->status = "no";
        $size->save();

        SWAL::message('Product Added', 'The Product has been added successfully.','success',['timer'=>3000]);
     
        return redirect('/groupVariant');

    }

    public function removeProduct()
    {
    	$groups = Group::all();

        return view('removeProductGroup', compact('groups'));
    }

    public function removeProductGroupId(Request $request)
    {

        $products = Product::where([['group_id','=',$request->id],['status','=','no']])->get();
        return view('removeProductList', compact('products'));
    }

    public function removeProductId(Request $request)
    {
    	Product::where('id', $request->id)->update(['status' => 'yes']);
        SWAL::message('Product Removed', 'The Product has been removed successfully.','success',['timer'=>3000]);
     
        return back();
    }

    // public function removeProductVariant()
    // {
    // 	$groups = Group::all();

    //     return view('removeProductVariantGroup', compact('groups'));
    // }

    // public function removeProductVariantGroupId()
    // {
    // 	$products = Size::where([['group_id','=',$request->id],['status','=','no']])->get();
    //     return view('removeProductList', compact('products'));
    // }

    //orders
    public function viewOrders()
    {
        $orders = Order::with('buyer', 'item.size.product')->where('status','=','no')->orderBy('id', 'desc')->get();

        return view('viewOrders', compact('orders'));
        //return $orders;
    }

    public function completeOrder(Request $request)
    {
        Order::where('id', $request->id)->update(['status' => 'yes']);
        SWAL::message('Order Marked as Complete', 'The Product has been archived successfully.','success',['timer'=>3000]);
     
        return redirect('/viewOrders');
    }

    public function archivedOrders()
    {
        $orders = Order::with('buyer', 'item.size.product')->where('status','=','yes')->orderBy('updated_at', 'desc')->get();

        return view('archivedOrders', compact('orders'));
        //return $orders;
    }

    public function saveProductEdit(Request $request)
    {
        Product::where('id', $request->id)->update(['desc' => $request->desc]);
        SWAL::message('Product Updated', 'The Product description has been updated successfully.','success',['timer'=>3000]);
     
        return back();
    }
}
