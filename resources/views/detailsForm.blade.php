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
                                    <h2>Checkout Details</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="items_group clearfix">
                        <div class="column one woocommerce-content">
                            <div itemscope itemtype="http://schema.org/Product" id="product-34" class="no-share post-34 product type-product has-post-thumbnail product_cat-allergy-hay-fever shipping-taxable purchasable product-type-simple product-cat-allergy-hay-fever instock">
                                <div class="product_wrapper clearfix">
                                    <p>To purchase a subscription you need to create an account first. We'll try and make this as quick and painless as possible.</p>
                                    <form method="POST" action="/makeOrder" >
                                        {{ csrf_field() }}
                                             <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                                                
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">First Name</label>
                                                        <input style="width: 500px; max-width: 600px" id="firstname" type="text" class="form-control" name="firstname" value="{{ old('firstname') }}" required autofocus>
                                                        @if ($errors->has('firstname'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('firstname') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                
                                            </div>  
                                            <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                                                
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Last Name</label>
                                                        <input style="width: 500px; max-width: 600px" id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required>
                                                        @if ($errors->has('lastname'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('lastname') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                
                                            </div>  
                                        
                                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}"> 
                                                
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Email</label>
                                                        <input style="width: 500px; max-width: 600px" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                                        @if ($errors->has('email'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('email') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                
                                            </div>  
                                           
                                            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                                
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Phone</label>
                                                        <input style="width: 500px; max-width: 600px" id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}"  required>
                                                        @if ($errors->has('phone'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('phone') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                
                                            </div>  
                                        <div class="row">
                                            <br/>
                                            {{-- {!! app('captcha')->display(); !!} --}}
                                            {!! NoCaptcha::renderJs() !!}
                                            {!! NoCaptcha::display() !!}
                                            <br>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">                             
                                                <button id="btn-submit" class="btn btn-info btn-lg" type="Submit" style="background-color:#57e178"><strong>COMPLETE ORDER</strong></button>
                                            </div>  
                                        </div>
                                    </form> 
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
