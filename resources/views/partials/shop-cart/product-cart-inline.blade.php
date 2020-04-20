<div class="row product-layout-list">
    <div class="col-lg-3 col-md-5 ">
        <div class="product-image">
            <a href="{{route('shop.show', $product->slug)}}">
                <img src="{{asset('images/product/large-size/'.$product->slug.'.jpg')}}" alt="Li's Product Image">
            </a>
            <span class="sticker">New</span>
        </div>
    </div>
    <div class="col-lg-5 col-md-7">
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
                <p>{{$product->description}}</p>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="shop-add-action mb-xs-30">
            <ul class="add-actions-link">
                
               <li class="add-cart">
                    <form action="{{ route('cart.index', $product) }}" method="POST" class="">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $product->id }}">
                        <input type="hidden" name="name" value="{{ $product->name }}">
                        <input type="hidden" name="price" value="{{ $product->price }}">
                        <button type="submit" class="">В корзину</button>
                    </form>
                </li>
                <li class="wishlist">
                    <form action="{{ route('wishlist.store', $product->id) }}" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $product->id }}">
                        <input type="hidden" name="name" value="{{ $product->name }}">
                        <input type="hidden" name="price" value="{{ $product->price }}">
                        <button type="submit" > <i class="fa fa-heart-o"></i>Добавить в избранное</button>
                    </form>
                </li>
               
            {{-- <li><a class="quick-view" data-toggle="modal" data-target="#exampleModalCenter" href="{{route('shop.show', $product->slug)}}"><i class="fa fa-eye"></i>Quick view</a></li>
            </ul> --}}
        </div>
    </div>
</div>                                                   
