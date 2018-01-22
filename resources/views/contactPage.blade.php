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
                                        <h2>Contact Us</h2>
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
                                    <p style="font-style: italic;margin-top: 20px">Prodigy Healthcare warehouse</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section mcb-section" style="padding-top:0px; padding-bottom:0px;">
                    <div class="section_wrapper mcb-section-inner">
                        
                        <div class="wrap mcb-wrap one  valign-top clearfix">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one-second column_column">
                                    <div class="column_attr" >
                                        <h3>Enquiry Form</h3>
                                        <form id="contactform">{{ csrf_field() }}
                                                <div class="column one-second">
                                                    <input placeholder="Your name" type="text" name="name" id="name" size="40" aria-required="true" aria-invalid="false" />
                                                </div>
                                                <div class="column one-second">
                                                    <input placeholder="Your e-mail" type="email" name="email" id="email" size="40" aria-required="true" aria-invalid="false" />
                                                </div>
                                                <div class="column one">
                                                    <input placeholder="Subject" type="text" name="subject" id="subject" size="40" aria-invalid="false" />
                                                </div>
                                                <div class="column one">
                                                    <textarea placeholder="Message" name="body" id="body" style="width:100%;" rows="10" aria-invalid="false"></textarea>
                                                </div>
                                                <div class="column one">
                                                    <input type="button" value="Send A Message" id="submit" onClick="return check_values();">
                                                </div>
                                            </form>
                                    </div>
                                </div>
                                <div class="column mcb-column one-second column_image ">
                                    <div class="image_frame image_item scale-with-grid aligncenter no_border hover-disable">
                                        <div class="google-map-wrapper no_border">
                                            <div class="google-map" id="google-map-area-56f549bb8c6be" style="width:100%; height:450px;">
                                                &nbsp;
                                            </div>
                                        </div>
                                    </div>
                                    <br style="clear:both;" /><br><br>
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

    <script>
        function google_maps_56f549bb8c6be() {
            var latlng = new google.maps.LatLng(-1.305840, 36.853171);
            var draggable = true;
            var myOptions = {
                zoom: 15,
                center: latlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                
                draggable: draggable,
                zoomControl: true,
                mapTypeControl: false,
                streetViewControl: false,
                scrollwheel: false
            };
            var map = new google.maps.Map(document.getElementById("google-map-area-56f549bb8c6be"), myOptions);
            var marker = new google.maps.Marker({
                position: latlng,
                icon: "images/home_pin.png",
                map: map
            });

        }
        jQuery(document).ready(function($) {
            google_maps_56f549bb8c6be();
        });
    </script>
@endsection