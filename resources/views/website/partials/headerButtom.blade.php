<div class="header_bottom clearfix">
    <div class="container maxw_1460">
        <nav class="main_menu clearfix">
            <ul class="ul_li clearfix">

                {{-- All Departments --}}
                <li>
                    <button class="alldepartments_btn bg_supermarket_red text-uppercase" type="button" data-toggle="collapse" data-target="#alldepartments_dropdown" aria-expanded="false" aria-controls="alldepartments_dropdown">
                        <i class="far fa-bars"></i> All Departments
                    </button>
                </li>

                {{-- Home --}}
                <li class="menu_item_has_child">
                    <a href="#!">Home</a>
                    <div class="mega_menu text-center">
                        <div class="background" data-bg-color="#ffffff">
                            <div class="container">
                                <ul class="home_pages ul_li clearfix">
                                    @foreach ($categories as $category)
                                        <li>
                                            <a href="{{url('category/'.$category->id)}}">
                                                <span class="item_image">
                                                    <img src="{{asset($category->photo)}}" alt="image_not_found">
                                                </span>
                                                <span class="item_title">{{$category->name}}</span>
                                            </a>
                                        </li>
                                    @endforeach
                                    
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

                {{-- Shop --}}
                <li class="menu_item_has_child">
                    <a href="#!">Shop</a>
                    <div class="mega_menu">
                        <div class="background" data-bg-color="#ffffff">
                            <div class="container">
                                <div class="row mt__30">
                                    <div class="col-lg-3">
                                        <div class="page_links">
                                            <h3 class="title_text">Carparts</h3>
                                            <ul class="ul_li_block">
                                                <li><a href="carparts_shop.html">Shop Page</a></li>
                                                <li><a href="carparts_shop_grid.html">Shop Grid</a></li>
                                                <li><a href="carparts_shop_list.html">Shop List</a></li>
                                                <li><a href="carparts_shop_details.html">Shop Details</a></li>
                                            </ul>
                                        </div>

                                        <div class="page_links">
                                            <h3 class="title_text">Classic Ecommerce</h3>
                                            <ul class="ul_li_block">
                                                <li><a href="classic_ecommerce_shop.html">Shop Page</a></li>
                                                <li><a href="classic_ecommerce_shop_details.html">Shop Details</a></li>
                                            </ul>
                                        </div>

                                        <div class="page_links">
                                            <h3 class="title_text">Electronic</h3>
                                            <ul class="ul_li_block">
                                                <li><a href="electronic_shop.html">Shop Page</a></li>
                                                <li><a href="electronic_shop_details.html">Shop Details</a></li>
                                            </ul>
                                        </div>

                                        <div class="page_links">
                                            <h3 class="title_text">Fashion</h3>
                                            <ul class="ul_li_block">
                                                <li><a href="fashion_shop.html">Shop Page</a></li>
                                                <li><a href="fashion_shop_details.html">Shop Details</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="page_links">
                                            <h3 class="title_text">Fashion Minimal</h3>
                                            <ul class="ul_li_block">
                                                <li><a href="fashion_minimal_shop.html">Shop Page</a></li>
                                                <li><a href="fashion_minimal_shop_details.html">Shop Details</a></li>
                                            </ul>
                                        </div>

                                        <div class="page_links">
                                            <h3 class="title_text">Fashion Minimal</h3>
                                            <ul class="ul_li_block">
                                                <li><a href="fashion_minimal_shop.html">Shop Page</a></li>
                                                <li><a href="fashion_minimal_shop_details.html">Shop Details</a></li>
                                            </ul>
                                        </div>

                                        <div class="page_links">
                                            <h3 class="title_text">Furniture</h3>
                                            <ul class="ul_li_block">
                                                <li><a href="furniture_shop.html">Shop Page</a></li>
                                                <li><a href="furniture_shop_details.html">Shop Details</a></li>
                                            </ul>
                                        </div>

                                        <div class="page_links">
                                            <h3 class="title_text">Gadget</h3>
                                            <ul class="ul_li_block">
                                                <li><a href="gadget_shop.html">Shop Page</a></li>
                                                <li><a href="gadget_shop_details.html">Shop Details</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="page_links">
                                            <h3 class="title_text">Medical</h3>
                                            <ul class="ul_li_block">
                                                <li><a href="medical_shop.html">Shop Page</a></li>
                                                <li><a href="medical_shop_details.html">Shop Details</a></li>
                                            </ul>
                                        </div>

                                        <div class="page_links">
                                            <h3 class="title_text">Modern Minimal</h3>
                                            <ul class="ul_li_block">
                                                <li><a href="modern_minimal_shop.html">Shop Page</a></li>
                                                <li><a href="modern_minimal_shop_details.html">Shop Details</a></li>
                                            </ul>
                                        </div>

                                        <div class="page_links">
                                            <h3 class="title_text">Modern</h3>
                                            <ul class="ul_li_block">
                                                <li><a href="modern_shop.html">Shop Page</a></li>
                                                <li><a href="modern_shop_details.html">Shop Details</a></li>
                                            </ul>
                                        </div>

                                        <div class="page_links">
                                            <h3 class="title_text">Motorcycle</h3>
                                            <ul class="ul_li_block">
                                                <li><a href="motorcycle_shop_grid.html">Shop Grid</a></li>
                                                <li><a href="motorcycle_shop_list.html">Shop List</a></li>
                                                <li><a href="motorcycle_shop_details.html">Shop Details</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="page_links">
                                            <h3 class="title_text">Simple Shop</h3>
                                            <ul class="ul_li_block">
                                                <li><a href="simple_shop.html">Shop Page</a></li>
                                                <li><a href="simple_shop_details.html">Shop Details</a></li>
                                            </ul>
                                        </div>

                                        <div class="page_links">
                                            <h3 class="title_text">Sports</h3>
                                            <ul class="ul_li_block">
                                                <li><a href="sports_shop.html">Shop Page</a></li>
                                                <li><a href="sports_shop_details.html">Shop Details</a></li>
                                            </ul>
                                        </div>

                                        <div class="page_links">
                                            <h3 class="title_text">Lookbook</h3>
                                            <ul class="ul_li_block">
                                                <li><a href="lookbook_creative_shop.html">Shop Page</a></li>
                                                <li><a href="lookbook_creative_shop_details.html">Shop Details</a></li>
                                            </ul>
                                        </div>

                                        <div class="page_links">
                                            <h3 class="title_text">Shop Other Pages</h3>
                                            <ul class="ul_li_block">
                                                <li><a href="#!"><del>Shop Page</del></a></li>
                                                <li><a href="shop_details.html">Shop Details</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                {{-- Pages --}}
                <li class="menu_item_has_child">
                    <a href="#!">Pages</a>
                    <ul class="submenu">
                        <li class="menu_item_has_child">
                            <a href="#!">Shop Inner Pages</a>
                            <ul class="submenu">
                                <li><a href="shop_cart.html">Shopping Cart</a></li>
                                <li><a href="shop_checkout.html">Checkout Step 1</a></li>
                                <li><a href="shop_checkout_step2.html">Checkout Step 2</a></li>
                                <li><a href="shop_checkout_step3.html">Checkout Step 3</a></li>
                            </ul>
                        </li>
                        <li><a href="404.html">404 Page</a></li>
                        <li class="menu_item_has_child">
                            <a href="#!">Blogs</a>
                            <ul class="submenu">
                                <li><a href="blog.html">Blog Page</a></li>
                                <li><a href="blog_details.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li class="menu_item_has_child">
                            <a href="#!">Compare</a>
                            <ul class="submenu">
                                <li><a href="compare_1.html">Compare V.1</a></li>
                                <li><a href="compare_2.html">Compare V.2</a></li>
                            </ul>
                        </li>
                        <li class="menu_item_has_child">
                            <a href="#!">Register</a>
                            <ul class="submenu">
                                <li><a href="{{ url('/login') }}">Login</a></li>
                                <li><a href="{{ url('/register') }}">Sign Up</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>


                <li><a href="#!">About us</a></li>
                
                <li><a href="contact.html">Contact us</a></li>

            </ul>
        </nav>
    </div>
</div>


<div id="search_body_collapse" class="search_body_collapse collapse">
    <div class="search_body">
        <div class="container-fluid prl_90">
            <form action="#">
                <div class="form_item mb-0">
                    <input type="search" name="search" placeholder="Type here...">
                    <button type="submit"><i class="fal fa-search"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>