<section class="deals_section sec_ptb_50 clearfix">
    <div class="container maxw_1460">
        <div class="row align-items-center">
            <div class="col-lg-3">
                <div class="supermarket_section_title clearfix">
                    <span class="sub_title text-uppercase">A wide selection of items </span>
                    <h2 class="title_text mb-0">Top Flash Deal</h2>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="gray_line"></div>
            </div>

            <div class="col-lg-2">
                <div class="carousel_nav align_right">
                    <button type="button" class="left_arrow5"><i class="fal fa-arrow-left"></i></button>
                    <button type="button" class="right_arrow5"><i class="fal fa-arrow-right"></i></button>
                </div>
            </div>
        </div>

        <div class="supermarket_deals_carousel position-relative clearfix">
            <div class="slideshow5_slider row clearfix" data-slick='{"dots": false}'>

                @forelse ($flash_deals as $deal)
                    <div class="item col">
                        <div class="supermarket_deals_item text-center clearfix">
                            <div class="offer_text">Flat - {{ $deal->discount_percentage }}%</div>
                            <a href="{{ url('product/'. $deal->product_id) }}" class="item_image">
                                <img src="{{ asset($deal->photo_path) }}" alt="image_not_found">
                            </a>
                            <div class="item_content">
                                <h3 class="item_title">
                                    <a href="{{ url('product/'. $deal->product_id) }}">
                                        {{$deal->product->name}}
                                    </a>
                                </h3>
                            </div>
                            <span class="item_instock">
                                <s> {{$deal->original_price}} </s>
                                <b>{{$deal->discounted_price}}</b>
                            </span>
                        </div>
                    </div>
                @empty
                    <div class="alert alert-warning text-center" role="alert">
                        There is no Deals nowadayas, be ready...
                    </div>
                @endforelse
                
            </div>
        </div>

    </div>
</section>