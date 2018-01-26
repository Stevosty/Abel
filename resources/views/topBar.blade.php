<div id="Top_bar">
    <div class="container">
        <div class="column one">
            <div class="top_bar_left clearfix">
                <div class="logo">
                        <a id="logo" href="/" title=""> <img class="scale-with-grid" src="{{ asset("/images/logo.png") }}" alt="PRODIGY HEALTHCARE" /> </a>
                    </a>
                </div>
                <div class="menu_wrapper">
                    <nav id="menu" class="menu-main-menu-container">
                        <ul id="menu-main-menu" class="menu">
                            <li @php if($page=="home"){ echo 'class="current_page_item"'; } @endphp  >
                                    <a href="/"><span>Home</span></a>
                                </li>
                                <li @php if($page=="medical"){ echo 'class="current_page_item"'; } @endphp >
                                    <a href="/1"><span>Medical Nutrition</span></a>
                                </li>
                                <li @php if($page=="infection"){ echo 'class="current_page_item"'; } @endphp >
                                    <a href="/2"><span>Infection Control</span></a>
                                </li>
                                <li @php if($page=="skin"){ echo 'class="current_page_item"'; } @endphp >
                                    <a href="/3"><span>Skin Care</span></a>
                                </li>
                                <li @php if($page=="dialysis"){ echo 'class="current_page_item"'; } @endphp >
                                    <a href="/4"><span>Dialysis</span></a>
                                </li>
                                <li @php if($page=="pharmacy"){ echo 'class="current_page_item"'; } @endphp >
                                    <a href="/5"><span>Pharmacy</span></a>
                                </li>
                            
                        </ul>
                    </nav><a class="responsive-menu-toggle" href="#"><i class="icon-menu"></i></a>
                </div>
                <div class="secondary_menu_wrapper"></div>
                <div class="banner_wrapper"></div>
                
            </div>
            <div class="top_bar_right">
                <div class="top_bar_right_wrapper">
                    <a id="header_cart" href="/viewCart"><i class="icon-basket"></i>
                        <span style="font-weight: bolder;">
                        @if(Session::has('count'))
                            {{Session::get('count')}}
                        @else
                            0    
                        @endif
                    </span></a>
                </div>
            </div>
        </div>
    </div>
</div>