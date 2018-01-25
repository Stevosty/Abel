@extends('layout')
@section('content')
<div id="Header_wrapper">
    @if($product->group->id == '1')
	   @php $page='medical'; @endphp
    @elseif($product->group->id == '2')
       @php $page='infection'; @endphp 
    @elseif($product->group->id == '3')
       @php $page='skin'; @endphp 
    @elseif($product->group->id == '4')
       @php $page='dialysis'; @endphp 
    @else
       @php $page='pharmy'; @endphp  
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
                                    <h2>Shop {{$product->group->group}}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="items_group clearfix">
                        <div class="column one woocommerce-content">
                            <div itemscope itemtype="http://schema.org/Product" id="product-34" class="no-share post-34 product type-product has-post-thumbnail product_cat-allergy-hay-fever shipping-taxable purchasable product-type-simple product-cat-allergy-hay-fever instock">
                                <div class="product_wrapper clearfix">
                                    <div class="column one-second product_image_wrapper">
                                        <div class="images">
                                            <div class="image_frame scale-with-grid" ontouchstart="this.classList.toggle('hover');">
                                                <div class="image_wrapper">
                                                    <img width="700" height="700" src="{{ asset($product->image) }}" class="scale-with-grid wp-post-image" alt="{{$product->product}}" title="{{$product->product}}" />
                                                    </a>
                                                    <div class="image_links">
                                                        <a href="{{ asset($product->image) }}" itemprop="image" class="woocommerce-main-image zoom" title="{{$product->product}}"><i class="icon-search"></i></a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="thumbnails columns-3">
                                            @foreach($product->size as $size)
                                                <div class="image_frame scale-with-grid" ontouchstart="this.classList.toggle('hover');">
                                                    <div class="image_wrapper">
                                                        <a href="{{ asset($size->image)}}" itemprop="image" class="woocommerce-main-image zoom" title="{{$product->product}} {{ $size->size}}" data-rel="prettyPhoto[product-gallery]">
                                                            <div class="mask"></div><img width="180" height="180" src="{{ asset($size->image) }}" class="attachment-shop_thumbnail size-shop_thumbnail" alt="{{$product->product}} {{ $size->size}}" />
                                                        </a>
                                                    </div>
                                                </div>
                                            @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column one-second summary entry-summary">
                                        <h1 itemprop="name" class="product_title entry-title">{{$product->product}}</h1>
                                        {{-- <br style="clear:both;" /> --}}
                                       
                                    <form method="POST" action="/cart">
                                      {!! csrf_field() !!}
                                      @if(count($errors) > 0)
                                      <div class="alert alert-danger">
                                        <ul>
                                          @foreach($errors->all() as $error)
                                          <li>{{ $error }}</li>
                                          @endforeach
                                        </ul>
                                      </div>

                                      @endif

                                    <div class="form-group">
                                        <label for="size">Select Pack size:</label>
                                        <select name="size" id="size" class="form-control" style="">
                                            @foreach($product->size as $sizes)
                                                <option value="{{$sizes->id}}">
                                                    {{$sizes->size}}  @ Ksh. {{number_format($sizes->price, 2)}} <span class="caret"></span>
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="product">Enter Quantity:</label>
                                        <input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" required>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-group">
                                                <button type="submit" class="btn btn-success" style="background-color:#54c0f3;"><strong>ADD TO CART</strong></button> 
                                        </div>
                                    </div>
                                  </form>
                                  <br style="clear:both;" />
                                        <div class="accordion">
                                            <div class="mfn-acc accordion_wrapper open1st">
                                                <div class="question">
                                                    <div class="title">
                                                        <i class="icon-plus acc-icon-plus"></i><i class="icon-minus acc-icon-minus"></i> Product Description
                                                    </div>
                                                    <div class="answer">
                                                        <p>
                                                            {!! $product->desc !!}
                                                        </p>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="related products">
                                    <h2 style="color: #fd0000;">Related Products</h2>
                                    <div class="products_wrapper isotope_wrapper">
                                        <ul class="products ">
                                            @foreach($others as $product)
                                            <li class="isotope-item post-83 product type-product has-post-thumbnail product_cat-allergy-hay-fever product_cat-cough-flu downloadable shipping-taxable purchasable product-type-simple product-cat-allergy-hay-fever product-cat-cough-flu instock">
                                                <div class="image_frame scale-with-grid product-loop-thumb" ontouchstart="this.classList.toggle('hover');">

                                                    <div class="image_wrapper">
                                                        <a href="/product/{{$product->id}}">
                                                            <div class="mask"></div><img width="700" height="700" src="{{ asset($product->image) }}" class="scale-with-grid wp-post-image" alt="{{$product->product}}" />
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
