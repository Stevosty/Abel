<div class="mfn-main-slider" id="mfn-rev-slider">
    <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
        <div id="rev_slider_1_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.2.3.5">
            <ul>
            @foreach($slides as $slide)    
                <li data-index="rs-{{$loop->iteration}}" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-delay="5000" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    

                    <div class="tp-caption   tp-resizeme" id="slide-1-layer-1" data-transform_idle="o:1;" data-transform_in="opacity:0;s:300;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="0" data-responsive_offset="on" style="z-index: 5;"><img src="{{ asset($slide->bg_image) }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina> </div>

                    <div class="tp-caption   tp-resizeme" id="slide-1-layer-1" data-x="right" data-hoffset="50" data-y="45" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-transform_idle="o:1;" data-transform_in="y:150px;opacity:0;s:800;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="100" data-responsive_offset="on" style="z-index: 5;"><img src="{{ asset($slide->image) }}" alt="" width="485" height="618" data-ww="485px" data-hh="618px" data-no-retina> </div>

                    <div class="tp-caption mfnrs_pharmacy_large_light   tp-resizeme" id="slide-1-layer-3" data-x="70" data-y="120" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="x:50px;opacity:0;s:800;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="800" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;">
                        {{$slide->title}}
                    </div>

                    <div class="tp-caption mfnrs_pharmacy_large2_light   tp-resizeme" id="slide-1-layer-3" data-x="70" data-y="170" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="x:50px;opacity:0;s:800;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="800" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;">
                    {{$slide->group->group}}</div>    

                    <div class="tp-caption mfnrs_pharmacy_medium_dark   tp-resizeme" id="slide-1-layer-4" data-x="100" data-y="269" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="x:50px;opacity:0;s:800;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="1200" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 8; white-space: nowrap;">
                       {{$slide->fact_1}}
                        <br>{{$slide->fact_2}} </div>

                    <div class="tp-caption   tp-resizeme" id="slide-1-layer-6" data-x="70" data-y="275" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:800;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="1300" data-responsive_offset="on" style="z-index: 9;"><img src="images/home_pharmacy_slider_plus.png" alt="" width="12" height="12" data-ww="12px" data-hh="12px" data-no-retina> </div>

                    <div class="tp-caption   tp-resizeme" id="slide-1-layer-7" data-x="70" data-y="311" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:800;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="1500" data-responsive_offset="on" style="z-index: 10;"><img src="images/home_pharmacy_slider_plus.png" alt="" width="12" height="12" data-ww="12px" data-hh="12px" data-no-retina> </div>

                    <a class="tp-caption mfnrs_pharmacy_button   tp-resizeme" target="_self" id="slide-1-layer-5" data-x="70" data-y="410" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Linear.easeNone;" data-style_hover="c:rgba(255, 255, 255, 1.00);bg:rgba(213, 0, 0, 1.00);br:0px 0px 0px 0px;" data-transform_in="x:50px;opacity:0;s:800;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="1600" data-splitin="none" data-splitout="none" data-actions='' data-responsive_offset="on" style="z-index: 12; white-space: nowrap; line-height: 22px;padding:10px 20px 10px 20px;" href="/{{$slide->group->id}}" >View {{$slide->group->group}} Products</a> 
                </li>
            @endforeach
            </ul>
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
        </div>
    </div>
</div>