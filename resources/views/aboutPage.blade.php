@extends('layout')
@section('content')
<div id="Header_wrapper">
	@php $page='home1'; @endphp
    
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section mcb-section" style="padding-top:0px; padding-bottom:0px;">
                    <div class="section_wrapper mcb-section-inner">
                        <div class="wrap mcb-wrap one  valign-top clearfix" style="padding-top: 30px;">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one column_column">
                                    <div class="column_attr align_center" style=" background-image:url({{ asset("/images/home_sep.png") }}); background-repeat:no-repeat; background-position:center bottom;padding:0 0 10px;">
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
                                    </div>
                                </div>
                                <div class="column mcb-column one-second column_image ">
                                    <div class="image_frame image_item scale-with-grid aligncenter no_border hover-disable">
                                        <div class="image_wrapper">
                                                <img class="scale-with-grid" src="{{ asset($info['image']) }}" alt="Prodigy Healthcare" width="780" height="534" />
                                                
                                        </div>
                                        
                                    </div>
                                    <br style="clear:both;" /><br><br>
                                    <p style="font-style: italic;margin-top: 20px">Prodigy Healthcare staff</p>
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
