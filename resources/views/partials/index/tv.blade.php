<section class="product-area li-laptop-product li-tv-audio-product pb-45">
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
                            @include('partials.shop-cart.shop-cart')
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- Li's Section Area End Here -->
        </div>
    </div>
</section>
