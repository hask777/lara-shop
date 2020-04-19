<div class="col-lg-12">
<!-- single-product-wrap start -->
    <div class="single-product-wrap">
        <div class="product-image">
            <a href="{{route('shop.show', $product->slug)}}">
                <img src="images/product/large-size/1.jpg" alt="Li's Product Image">
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

                    <li>
                        <form action="{{ route('wishlist.store', $product->id) }}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $product->id }}">
                            <input type="hidden" name="name" value="{{ $product->name }}">
                            <input type="hidden" name="price" value="{{ $product->price }}">
                            <button type="submit" class="links-details"> <i class="fa fa-heart-o"></i></button>
                        </form>
                    </li>
                    {{-- <li>                  
                        <a href="" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter">
                            <i class="fa fa-eye"></i>
                        </a>
                    </li> --}}
                </ul>
            </div>
        </div>
    </div>
<!-- single-product-wrap end -->
</div>

