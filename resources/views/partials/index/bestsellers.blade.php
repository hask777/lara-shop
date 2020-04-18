<section class="product-area li-laptop-product li-trendding-products best-sellers pb-45">
    <div class="container">
        <div class="row">
            <!-- Begin Li's Section Area -->
            <div class="col-lg-12">
                <div class="li-section-title">
                    <h2>
                        <span>Bestsellers</span>
                    </h2>
                </div>
                <div class="row">
                    <div class="product-active owl-carousel">

                        @foreach ($products as $product)
                           @include('partials.shop-cart.shop-cart')
                        @endforeach

                    </div>
                </div>
            </div>
            <!-- Li's Section Area End Here -->
        </div>
    </div>
</section>
