@extends('layout')
@section('content')
<div id="Header_wrapper">
	   @php $page='cart'; @endphp
    <header id="Header">
        @include('topBar') 
    </header>  
            
</div>

<div id="Content">
    <div class="content_wrapper clearfix">
        <div class="sections_group">
            <div class="section">
                <div class="section_wrapper clearfix">
                    <div class="wrap mcb-wrap one  valign-top clearfix">
                        <div class="mcb-wrap-inner" style="padding-top:20px; padding-bottom:20px;">
                            <div class="column mcb-column one column_column">
                                <div class="column_attr align_center" style=" background-image:url({{ asset("/images/home_sep.png") }}); background-repeat:no-repeat; background-position:center bottom;padding:0 0 10px;">
                                    <h2>Shopping Cart</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="items_group clearfix">
                        <div class="column one woocommerce-content">
                            <div itemscope itemtype="http://schema.org/Product" id="product-34" class="no-share post-34 product type-product has-post-thumbnail product_cat-allergy-hay-fever shipping-taxable purchasable product-type-simple product-cat-allergy-hay-fever instock">
                                <div class="product_wrapper clearfix">
                                @if(isset($items))  
                                    @foreach($items as $item)
                                    <div class="row ">
                                        <div class="column one-fifth ">
                                           <img src="{{ asset($item['image']) }}" height="150" width="150">
                                        </div>

                                        <div class="column one-fifth ">
                                           <br><h5>{{ $item['product'] }} </h5> 
                                        </div>

                                        <div class="column one-fifth ">
                                            <br><h5>{{ $item['size'] }} @ <sup>Ksh</sup> <strong>{{ number_format($item['price'],2) }}</strong> </h5>
                                        </div>

                                        <div class="column one-fifth ">
                                            <form enctype="multipart/form-data" method="POST" action="/cartUpdate">
                                            {!! csrf_field() !!}
                                                <br><input type="number" name="quantity"  title="Qty" 
                                                 name="quantity" value="{{ $item['quantity'] }}" style="width: 80px;display: inline-block;">
                                                 <input type="hidden" name="size" value="{{ $item['size_id'] }}">
                                                <button type="submit" class="btn btn-success" style="background-color:#54c0f3;"><strong >Update</strong></button>
                                            </form>
                                        </div>

                                        <div class="column one-fifth ">
                                            <br><h4 class="amount" style="float: right;"> <sup style="color: #f80000">Ksh</sup> <strong style="color: #f80000">{{ number_format($item['min_total'],2) }} </strong> 
                                            <a href="/cancel/{{ $item['size_id'] }}" style="float: right; padding-left: 35px;" title="Remove Product"><i class="icon-cancel acc-icon-cancel"></i></a> </h4>
                                            
                                        </div>
                                    </div>
                                    <hr style="clear:both;" /> 
                                    @endforeach
                                    <div class="column one-fourth" style="float: right;">
                                        <h4>Sub Total: <strong style="float: right;">{{number_format(Session::get('subTotal'),2)}}</strong></h4>
                                        <h4>VAT: <strong style="float: right;">{{number_format(Session::get('tax'),2)}}</strong></h4>
                                        <h4 style="color: #f80000" >TOTAL: <strong style="float: right;">{{number_format(Session::get('total'),2)}}</strong></h4><br>
                                        <button id="btn" class="btn btn-success" onclick="location.href = '/clear';" style="display: inline-block;"><strong>CLEAR CART</strong></button>
                                        <button id="btn" class="btn btn-success" onclick="location.href = '/checkOut';" style="float: right;padding-right: 0px; display: inline-block;background-color:#57e178;"><strong>CHECKOUT</strong></button>
                                        
                                        
                                    </div>
                                    @else
                                    <h4>Shopping cart is empty</h4>
                                
                                @endif
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  
@endsection
