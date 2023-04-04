@extends('website.layout')

@section('title')
Product Details
@endsection

@section('content')
			<!-- details_section - start
			================================================== -->
			<section class="details_section shop_details sec_ptb_140 clearfix">
				<div class="container">
					<div class="row mb_100 justify-content-lg-between justify-content-md-center">
						<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
							<div class="shop_details_image">
								<div class="tab-content zoom-gallery">

									@foreach ($product->photos as $photo)
										<div id="tab_{{$loop->index+1}}" class="tab-pane {{$loop->first?'active':'fade'}}">
											<a class="popup_image zoom-image" 
												data-image="{{$photo->path}}" 
												href="{{$photo->path}}">
												<img src="{{$photo->path}}" alt="image_not_found">
											</a>
										</div>
									@endforeach
								</div>

								<ul class="nav ul_li clearfix" role="tablist">
									@foreach ($product->photos as $photo)
										<li>
											<a class="{{$loop->first?'active':''}}" data-toggle="tab" href="#tab_{{$loop->index+1}}">
												<img src="{{$photo->path}}" alt="image_not_found">
											</a>
										</li>
									@endforeach
								</ul>
							</div>
						</div>

						<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
							<div class="shop_details_content">

								<h2 class="item_title">
									{{$product->name}}
								</h2>

								<span class="item_price">
									{{$product->price}}
								</span>

								<hr>

								<div class="row mb_30 align-items-center justify-content-lg-between">

									{{-- <div class="col-lg-5">
										<div class="item_brand d-flex align-items-center">
											<span class="brand_title">Brands:</span>
											<span class="brand_image d-flex align-items-center justify-content-center" data-bg-color="#f7f7f7">
												<img src="{{asset('assets/images/product_brands/img_01.png')}}" alt="image_not_found">
											</span>
										</div>
									</div> --}}

									<div class="col-lg-7">
										<div class="rating_review_wrap d-flex align-items-center clearfix">
											<ul class="rating_star ul_li">
												<li><i class="fas fa-star"></i></li>
												<li><i class="fas fa-star"></i></li>
												<li><i class="fas fa-star"></i></li>
												<li><i class="fas fa-star"></i></li>
												<li><i class="fas fa-star"></i></li>
											</ul>
											<span>4 Review(s)</span>
											<button type="button" class="add_review_btn">Add Your Review</button>
										</div>
									</div>

								</div>

								<p class="mb-0">
									{{Str::words($product->description, 15);}}
								</p>

								<hr>

								{{-- <div class="item_color_list mb_30 clearfix">
									<h4 class="list_title mb_15 text-uppercase">Color</h4>
									<ul class="ul_li clearfix">
										<li>
											<button type="button"><span><small data-bg-color="#cc7b4a"></small></span> Brown</button>
										</li>
										<li>
											<button type="button"><span><small data-bg-color="#b6b8ba"></small></span> Grey</button>
										</li>
										<li>
											<button type="button"><span><small data-bg-color="#dd3333"></small></span> Red</button>
										</li>
									</ul>
								</div> --}}

								{{-- <div class="item_size_list mb_30 clearfix">
									<h4 class="list_title mb_15 text-uppercase">Size</h4>
									<ul class="ul_li clearfix">
										<li><button type="button">XL</button></li>
										<li><button type="button">L</button></li>
										<li><button type="button">M</button></li>
										<li><button type="button">SM</button></li>
										<li><a class="size_guide" href="#!"><i class="far fa-tape mr-1"></i> Size Guide</a></li>
									</ul>
								</div> --}}

								<ul class="btns_group_1 ul_li mb_30 clearfix">
									<li>
										<div class="quantity_input">
											<form action="#">
												<span class="input_number_decrement">–</span>
												<input class="input_number" type="text" value="1">
												<span class="input_number_increment">+</span>
											</form>
										</div>
									</li>
									<li>
										<a id="cart-btn" class="custom_btn bg_black text-uppercase">
											<i class="fal fa-shopping-bag mr-2"></i> 
											Add To Cart
										</a>
										{{-- this link used ajax and jquery, look at custom.js file --}}
									</li>
								</ul>

								{{-- <ul class="btns_group_2 ul_li clearfix">
									<li>
										<a href="#!">
											<span>
												<i class="far fa-heart"></i>
											</span> Add to Wishlist
										</a>
									</li>
									<li>
										<a href="#!">
											<span>
												<i class="fal fa-repeat"></i>
											</span> Compare
										</a>
										</li>
								</ul> --}}

								<hr>

								<ul class="product_info ul_li_block clearfix">
									<li>
										<strong>SKU:</strong> 
										{{$product->sku}}
									</li>

									<li>
										<strong>Category:</strong>
										<a href="{{url('category/'.$product->category->id)}}">
											{{$product->category->name}}
										</a>

									</li>

									{{-- <li>
										<strong>Tags:</strong>
										<a href="#!">Hot</a> 
										<a href="#!">Women</a>
									</li> --}}
								</ul>
							</div>
						</div>
					</div>

					<div class="details_description_tab mb_100">
						<ul class="nav ul_li text-uppercase" role="tablist">
							<li>
								<a class="active" data-toggle="tab" href="#description_tab">Product Description</a>
							</li>
							<li>
								<a data-toggle="tab" href="#reviews_tab">Reviews</a>
							</li>
							{{-- <li>
								<a data-toggle="tab" href="#information_tab">Additional Information</a>
							</li> --}}
						</ul>

						<!-- Tab panes -->
						<div class="tab-content">
							<div id="description_tab" class="tab-pane active">
								<div class="row mb_50">
									{{$product->description}}
								</div>
							</div>

							<div id="reviews_tab" class="tab-pane fade">
								<form action="#">
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<div class="form_item">
												<input type="text" name="name" placeholder="Your Name">
											</div>
										</div>

										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<div class="form_item">
												<input type="email" name="email" placeholder="Your Email">
											</div>
										</div>

										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<div class="form_item">
												<input type="text" name="subject" placeholder="Subject">
											</div>
										</div>
									</div>

									<div class="form_item">
										<textarea name="message" placeholder="Your Message"></textarea>
									</div>
									<button type="submit" class="custom_btn bg_default_red text-uppercase">Submit Review</button>
								</form>
							</div>

							{{-- <div id="information_tab" class="tab-pane fade">
								<div class="row mb_50">
									
									<div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
										<div class="content_wrap">
											<p class="mb_30">
												Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
											</p>

											<h4 class="list_title">Pretium turpis et arcu</h4>
											<p class="mb_30">
												Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
											</p>

											<h4 class="list_title">Unordered list</h4>
											<p class="mb_30">
												Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
											</p>

											<ul class="product_info ul_li_block clearfix">
												<li><strong>Color:</strong> Brown, Grey, Nude, Red</li>
												<li><strong>Size:</strong> L, M, S, XL, XS</li>
											</ul>
										</div>
									</div>
								</div>

								<div class="row mb_50">
									<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 order-last">
										<div class="image_wrap">
											<img src="{{asset('assets/images/details/shop/img_07.jpg')}}" alt="image_not_found">
										</div>
									</div>

									<div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
										<div class="content_wrap">
											<h4 class="list_title">Paragraph text</h4>
											<p class="mb_15">
												Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
											</p>
											<p class="mb_30">
												Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
											</p>

											<h4 class="list_title">Pretium turpis et arcu</h4>
											<p class="mb-0">
												Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
											</p>
										</div>
									</div>
								</div>

								<span class="aware_info_icons">
									<img src="{{asset('assets/images/icons/aware_icons.png')}}" alt="image_not_found">
								</span>
							</div> --}}
						</div>
					</div>

					<hr class="mt-0 mb_100">

					@include('website.partials.popular_products')
				</div>
			</section>
			<!-- details_section - end
			================================================== -->
@endsection