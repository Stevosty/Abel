@extends('layout')
@section('content')
<div id="Header_wrapper">

    @if($other == '1')
	   @php $page='medical'; @endphp
    @elseif($other == '2')
       @php $page='infection'; @endphp 
    @elseif($other == '3')
       @php $page='skin'; @endphp 
    @elseif($other == '4')
       @php $page='dialysis'; @endphp 
    @else
       @php $page='pharmacy'; @endphp  
    @endif

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
                                    <h2>
                                        @if($other == '1')
                                           Medical Nutrition
                                        @elseif($other == '2')
                                           Infection Control 
                                        @elseif($other == '3')
                                           Skin Care
                                        @elseif($other == '4')
                                           Dialysis
                                        @else
                                           Pharmacy 
                                        @endif
                                    Products</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="items_group clearfix">
                        <div class="column one woocommerce-content">
                                <div class="related products">
                                    <div class="products_wrapper isotope_wrapper">
                                        <ul class="products">
                                        @if(!empty($products))
                                            @foreach($products as $product)
                                            <li class="isotope-item post-83 product type-product has-post-thumbnail product_cat-allergy-hay-fever product_cat-cough-flu downloadable shipping-taxable purchasable product-type-simple product-cat-allergy-hay-fever product-cat-cough-flu instock">
                                                <div class="image_frame scale-with-grid product-loop-thumb" ontouchstart="this.classList.toggle('hover');">

                                                    <div class="image_wrapper">
                                                        <a href="/product/{{$product->id}}">
                                                            <img width="700" height="700" src="{{ asset($product->image) }}" class="scale-with-grid wp-post-image" alt="{{$product->product}}" />
                                                        </a>
                                                        <div class="image_links">
                                                                
                                                                <a class="link" href="/product/{{$product->id}}" title="View Product">
                                                                <i class="icon-search"></i></a> 
                                                         </div>
                                                    </div>

                                                </div>
                                                <div class="desc">
                                                    <h5><a href="/product/{{$product->id}}">{{$product->product}}</a></h5>
                                                    @foreach($product->size as $sizes)
                                                        <span class="amount"  style="color:#333;"><big>{{$sizes->size}} @</big> </span>
                                                        <span class="price">Ksh. {{number_format($sizes->price,2)}}</span><br>
                                                    @endforeach    
                                                    
                                                </div>
                                            </li>
                                            @endforeach 
                                        @else
                                            <h5>There are no products in the system at the moment, please check later.</h5>
                                        @endif   
                                        </ul>
                                    </div>
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
