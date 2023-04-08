

@extends('website.layout')

@section('title')
Cart
@endsection

@section('content')
			<!-- cart_section - start
			================================================== -->
			<section class="cart_section sec_ptb_50 clearfix">
				<div class="container">

					<div class="cart_table mb_50">
						<table class="table">
							<thead class="text-uppercase">
								<tr>
									<th>Product Name</th>
									<th>Price</th>
									<th>Quantity</th>
									<th>Total Price</th>
								</tr>
							</thead>
							<tbody>

								@forelse ($products as $product)

								<tr>
									<td>
										<div class="cart_product">
											<div class="item_image">
												<img src="{{
												asset( $product->featuredPhoto)
												}}"
												 alt="image_not_found">
											</div>
											<div class="item_content">
												<h4 class="item_title">
													{{ $product->name }}
												</h4>
												<span class="item_type">
													{{ $product->category->name }}
												</span>
											</div>
											<button type="button" class="remove_btn">
												<i class="fal fa-times"></i>
											</button>
										</div>
									</td>
									<td>
										<span class="price_text">
											{{ $product->price }}
										</span>
									</td>
									<td>
										<div class="quantity_input">
											<form action="#">
												<span class="input_number_decrement">–</span>
												<input class="input_number" type="text" value="{{ $product->pivot->quantity }}">
												<span class="input_number_increment">+</span>
											</form>
										</div>
									</td>
									<td>
										<span class="total_price">
											{{ $product->price * $product->pivot->quantity }}
										</span>
									</td>
								</tr>
									
								@empty
									<tr >
										<td colspan="100%"> 
											<div class="alert alert-info">
												Your cart is empty
											</div>
										</td>
									</tr>
								@endforelse
							</tbody>
						</table>
					</div>

					<div class="coupon_wrap mb_50">
						<div class="row justify-content-lg-between">
							<div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
								<div class="coupon_form">
									<div class="form_item mb-0">
										<input type="text" class="coupon" placeholder="Coupon Code">
									</div>
									<button type="submit" class="custom_btn bg_danger text-uppercase">Apply Coupon</button>
								</div>
							</div>

							<div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
								<div class="cart_update_btn">
									<button type="button" class="custom_btn bg_secondary text-uppercase">Update Cart</button>
								</div>
							</div>
						</div>
					</div>

					<div class="row justify-content-lg-end">
						<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
							<div class="cart_pricing_table pt-0 text-uppercase" data-bg-color="#f2f3f5">
								<h3 class="table_title text-center" data-bg-color="#ededed">Cart Total</h3>
								<ul class="ul_li_block clearfix">
									<li><span>Subtotal</span> <span>$197.99</span></li>
									<li><span>Total</span> <span>$197.99</span></li>
								</ul>
								<a href="shop_checkout.html" class="custom_btn bg_success">Proceed to Checkout</a>
							</div>
						</div>
					</div>

				</div>
			</section>
			<!-- cart_section - end
			================================================== -->
@endsection