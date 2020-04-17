<section class="product-area li-laptop-product pt-60 pb-45">
    <div class="container">
        <div class="row">
            <!-- Begin Li's Section Area -->
                <div class="col-lg-12">
                    <div class="li-section-title">
                        <h2>
                            <span>Laptop</span>
                        </h2>
                        <ul class="li-sub-category-list">
                            <li class="active"><a href="shop-left-sidebar.html">Prime Video</a></li>
                            <li><a href="shop-left-sidebar.html">Computers</a></li>
                            <li><a href="shop-left-sidebar.html">Electronics</a></li>
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
                    </div>
                </div>
            <!-- Li's Section Area End Here -->
        </div>
    </div>
</section>               
