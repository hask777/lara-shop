@extends('main')
@section('content')
    <!-- Begin Slider With Banner Area -->
    @include('partials.index.slider-banner')
    <!-- Slider With Banner Area End Here -->
    <!-- Begin Product Area -->
    @include('partials.index.product-area')
    <!-- Product Area End Here -->
    <!-- Begin Li's Static Banner Area -->
    @include('partials.index.static-banner')
    <!-- Li's Static Banner Area End Here -->
    <!-- Begin Li's Laptop Product Area -->
    @include('partials.index.laptop')
    <!-- Li's Laptop Product Area End Here -->
    <!-- Begin Li's TV & Audio Product Area -->
    @include('partials.index.tv')
    {{-- <section class="product-area li-laptop-product li-tv-audio-product pb-45">
        <div class="container">
            <div class="row">
                <!-- Begin Li's Section Area -->
                <div class="col-lg-12">
                    <div class="li-section-title">
                        <h2>
                            <span>TV & Audio</span>
                        </h2>
                        <ul class="li-sub-category-list">
                            <li class="active"><a href="shop-left-sidebar.html">Chamcham</a></li>
                            <li><a href="shop-left-sidebar.html">Sanai</a></li>
                            <li><a href="shop-left-sidebar.html">Meito</a></li>
                        </ul>
                    </div>
                    <div class="row">
                        <div class="product-active owl-carousel">
                            @foreach($products as $product)
                                <div class="col-lg-12">
                                    <!-- single-product-wrap start -->
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="{{route('shop.show', $product->slug)}}">
                                                <img src="images/product/large-size/3.jpg" alt="Li's Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                        </div>
                                        <div class="product_desc">
                                            <div class="product_desc_info">
                                                <div class="product-review">
                                                    <h5 class="manufacturer">
                                                        <a href="{{route('shop.show', $product->slug)}}">{{$product->details}}</a>
                                                    </h5>
                                                    <div class="rating-box">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h4><a class="product_name" href="{{route('shop.show', $product->slug)}}">{{$product->name}}</a></h4>
                                                <div class="price-box">
                                                    <span class="new-price">${{$product->price}}</span>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                  <li class="add-cart active">
                                                    <form action="{{ route('cart.index', $product) }}" method="POST" class="">
                                                       {{ csrf_field() }}
                                                       <input type="hidden" name="id" value="{{ $product->id }}">
                                                       <input type="hidden" name="name" value="{{ $product->name }}">
                                                       <input type="hidden" name="price" value="{{ $product->price }}">
                                                       <button type="submit" class="">В корзину</button>
                                                   </form>
                                                  </li>
                                                    <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrap end -->
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- Li's Section Area End Here -->
            </div>
        </div>
    </section> --}}
    @include('partials.index.banner')
    <!-- Li's Static Home Area End Here -->
    <!-- Begin Li's Trending Product Area -->
    @include('partials.index.trending')
    <!-- Li's Trending Product Area End Here -->
    <!-- Begin Li's Trendding Products Area -->
    @include('partials.index.bestsellers')
    <!-- Li's Trendding Products Area End Here -->
@endsection
