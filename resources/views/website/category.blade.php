

@extends('website.layout')

@section('title')
Categories
@endsection

@section('content')
			<!-- product_section - start
			================================================== -->
			<section class="product_section sec_ptb_50 clearfix">
				<div class="container">
					<div class="carparts_filetr_bar clearfix">
						<h2>{{$category->name}}</h2>
						<div class="row align-items-center justify-content-lg-between">
							<div class="col-lg-6 col-md-6">
								<p class="result_text mb-0">
									Showing {{$start  +1}}
									to {{$start + $products->perPage()}}
									of {{$products->total()}}
									products
								</p>
								
							</div>

							<div class="col-lg-6 col-md-6">
								<form action="#">
									<div class="option_select d-flex align-items-center mb-0">
										<span class="option_title text-uppercase">Sort by:</span>
										<select>
											<option data-display="Select Your Option">Nothing</option>
											<option value="1" selected> Popularity</option>
											<option value="2">Another option</option>
											<option value="3" disabled>A disabled option</option>
											<option value="4">Potato</option>
										</select>
									</div>
								</form>
							</div>
						</div>
					</div>

					<div class="row justify-content-center">
						@foreach ($products as $product)
							<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
								<div class="sports_product_item">
									<div class="item_image" data-bg-color="#f5f5f5">

										
										{{-- {{dd($product->photos)}}   		    	 return an array with all photos --}}

										{{-- this is the relations u have wrote in the MODEL --}}
										  							
										{{-- {{dd($product->category())}}   		     return an object that type is belongsTo relation --}}
										  							  
										{{-- {{dd($product->photos())}}  			     return an object that type is hasmany relation --}}
																	
										{{-- {{dd($product->photos()->first()->path)}}   return a spesific record from the relation  --}}
										

										<img src="{{ $product->featured_photo}}" alt="image_not_found"/>

										<ul class="product_action_btns ul_li_center clearfix">
											<li>
												{{-- <a href="{{url("product/$product->id")}}" style="width: 150px;"> --}}
												<a href="{{url('product/'.$product->id)}}" style="width: 150px;">
													<i class="fal fa-eye" ></i>
													Details
												</a>
											</li>
											{{-- <li><a href="#!"><i class="fas fa-shopping-cart"></i></a></li> --}}
										</ul>
										<ul class="product_label ul_li text-uppercase clearfix">
											<li class="bg_sports_red">50% Off</li>
											<li class="bg_sports_red">Sale</li>
										</ul>
									</div>
									<div class="item_content text-uppercase text-white">
										<h3 class="item_title bg_black text-white mb-0">{{$product->name}}</h3>
										<span class="item_price bg_sports_red">
											<strong> {{$product->priceWithSign}}</strong>
											 {{-- <del> $390 </del> --}}
										</span>
									</div>
								</div>
							</div>
						@endforeach
						
					</div>
					<div class="row">
						<div class="col pt-5 d-flex justify-content-center">
							{{$products->links()}}
							
						</div>
					</div>

					<div class="row">
						<div class="col pt-2 d-flex justify-content-center">
							Showing {{$products->currentPage()}} of {{$products->lastPage()}} Pages ...
							There are {{$products->total()}} Products
						</div>
					</div>
				</div>
			</section>
			<!-- product_section - end
			================================================== -->
@endsection