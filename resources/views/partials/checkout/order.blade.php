<div class="col-lg-6 col-12">
    <div class="your-order">
        <h3>Your order</h3>
        <div class="your-order-table table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th class="cart-product-name">Product</th>
                        <th class="cart-product-total">Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (Cart::content() as $item)
                        <tr class="cart_item">
                            <td class="cart-product-name">{{$item->name}}<strong class="product-quantity"> × 1</strong></td>
                            <td class="cart-product-total"><span class="amount">${{Cart::total()}}</span></td>  
                        </tr>
                    @endforeach                           
                </tbody>
                <tfoot>
                    <tr class="cart-subtotal">
                        <th>Cart Subtotal</th>
                        <td><span class="amount">${{presentPrice(Cart::subtotal())}}</span></td>
                    </tr>
                    <tr class="order-total">
                        <th>Order Total</th>
                        <td><strong><span class="amount">${{Cart::total()}}</span></strong></td>
                    </tr>
                </tfoot>
            </table>
        </div>
        <div class="payment-method">
            <div class="payment-accordion">
                <div id="accordion">
                  <div class="card">
                    <div class="card-header" id="#payment-1">
                      <h5 class="panel-title">
                        <a class="" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Direct Bank Transfer.
                        </a>
                      </h5>
                    </div>
                    <div id="collapseOne" class="collapse show" data-parent="#accordion">
                      <div class="card-body">
                        <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="#payment-2">
                      <h5 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Cheque Payment
                        </a>
                      </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" data-parent="#accordion">
                      <div class="card-body">
                        <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="#payment-3">
                      <h5 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          PayPal
                        </a>
                      </h5>
                    </div>
                    <div id="collapseThree" class="collapse" data-parent="#accordion">
                      <div class="card-body">
                        <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="order-button-payment">
                    <input value="Place order" type="submit">
                </div>
            </div>
        </div>
    </div>
</div>