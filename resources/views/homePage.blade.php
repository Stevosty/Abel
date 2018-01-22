@extends('layout')
@section('content')
<div id="Header_wrapper">
	@php $page='home'; @endphp
    
    <header id="Header">
        @include('topBar') 
    </header>  
            
</div>

<div id="Content">
    <div class="content_wrapper clearfix">
        <div class="sections_group">
            <div class="entry-content">
                <div class="section mcb-section" style="padding-top:0px; padding-bottom:0px; ">
                    <div class="section_wrapper mcb-section-inner">
                        <div class="wrap mcb-wrap one  valign-top clearfix">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one column_slider_plugin ">    
                                    @include('slider')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section mcb-section" style="padding-top:0px; padding-bottom:0px;">
                    <div class="section_wrapper mcb-section-inner">
                        <div class="wrap mcb-wrap one  valign-top clearfix">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one column_column">
                                    <div class="column_attr align_center" style=" background-image:url({{ asset("/images/home_sep.png") }}); background-repeat:no-repeat; background-position:center bottom;padding:0 0 10px;">
                                        <h2>Our Latest Products</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="wrap mcb-wrap one valign-top clearfix">
                            <div class="mcb-wrap-inner">
                                
                                <div class="column_attr">
                                    <div class="woocommerce columns-4">
                                        <div class="products_wrapper isotope_wrapper">
                                            <ul class="products ">
                                            @foreach($products as $product)
                                                <li class="isotope-ite product type-product has-post-thumbnail  shipping-taxable purchasable product-type-simple instock">
                                                    <div class="image_frame scale-with-grid product-loop-thumb" 
                                                        ontouchstart="this.classList.toggle('hover');">

                                                        <div class="image_wrapper">
                                                            <a href="/product/{{$product->id}}">
                                                                {{-- <div class="mask"></div> --}}
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
                                                            <span class="price">Ksh. {{ number_format($sizes->price, 2)}}</span><br>
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
                        <div class="wrap mcb-wrap one  valign-top clearfix" style="padding-top: 30px;">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one column_column">
                                    <div class="column_attr align_left" style=" background-image:url({{ asset("/images/home_sep_2.png") }}); background-repeat:no-repeat; background-position:left bottom;padding:0 0 10px;">
                                        <h2>About Prodigy</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wrap mcb-wrap one  valign-top clearfix">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one-second column_column">
                                    <div class="column_attr" >
                                        <p>
                                            {!!$info['info']!!}
                                        </p>
                                        <hr class="no_line" style="margin: 0 auto 25px;" />
                                        <a class="button  button_size_2 button_theme button_js" href="/about"><span class="button_label">Learn More</span></a> </div>
                                </div>
                                <div class="column mcb-column one-second column_image ">
                                    <div class="image_frame image_item scale-with-grid aligncenter no_border hover-disable">
                                        <div class="image_wrapper">
                                                <img class="scale-with-grid" src="{{ asset($info['image']) }}" alt="Prodigy Healthcare" width="780" height="534" />
                                                
                                        </div>
                                        
                                    </div>
                                    <br style="clear:both;" /><br><br>
                                    <p style="font-style: italic;margin-top: 20px">Prodigy Healthcare, Go down C2, Ashray industrial Park, Kampala Road</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
                <div class="section the_content no_content">
                    <div class="section_wrapper">
                        <div class="the_content_wrapper"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('rev')
<script src="{{ asset("/plugins/rs-plugin/js/jquery.themepunch.tools.min.js") }}"></script>
    <script src="{{ asset("/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js") }}"></script>
    <script src="{{ asset("/plugins/rs-plugin/js/extensions/revolution.extension.video.min.js") }}"></script>
    <script src="{{ asset("/plugins/rs-plugin/js/extensions/revolution.extension.slideanims.min.js") }}"></script>
    <script src="{{ asset("/plugins/rs-plugin/js/extensions/revolution.extension.actions.min.js") }}"></script>
    <script src="{{ asset("/plugins/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js") }}"></script>
    <script src="{{ asset("/plugins/rs-plugin/js/extensions/revolution.extension.kenburn.min.js") }}"></script>
    <script src="{{ asset("/plugins/rs-plugin/js/extensions/revolution.extension.navigation.min.js") }}"></script>
    <script src="{{ asset("/plugins/rs-plugin/js/extensions/revolution.extension.migration.min.js") }}"></script>
    <script src="{{ asset("/plugins/rs-plugin/js/extensions/revolution.extension.parallax.min.js") }}"></script>

    <script>
        var tpj = jQuery;
        var revapi1;
        tpj(document).ready(function() {
            if (tpj("#rev_slider_1_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_1_1");
            } else {
                revapi1 = tpj("#rev_slider_1_1").show().revolution({
                    sliderType: "standard",
                    sliderLayout: "auto",
                    dottedOverlay: "none",
                    delay: 3000,
                    navigation: {
                        keyboardNavigation: "on",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        onHoverStop: "off",
                        touch: {
                            touchenabled: "on",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        }
                    },
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: 1080,
                    gridheight: 620,
                    lazyType: "none",
                    shadow: 0,
                    spinner: "sipnner3",
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    
                    autoHeight: "off",
                    disableProgressBar: "off",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        disableFocusListener: false,
                    }
                });
            }
        });
        
        </script>

@endsection