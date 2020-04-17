@extends('main')
@section('content')
    <!-- Begin Li's Breadcrumb Area -->
           <div class="breadcrumb-area">
               <div class="container">
                   <div class="breadcrumb-content">
                       <ul>
                           <li><a href="index.html">Home</a></li>
                           <li class="active">Shopping Cart</li>
                       </ul>
                   </div>
               </div>
           </div>
           <!-- Li's Breadcrumb Area End Here -->
           <!--Shopping Cart Area Strat-->
           <div class="Shopping-cart-area pt-60 pb-60">
               <div class="container">
                   <div class="row">
                       <div class="col-12">
                           <div class="">
                               @if (session()->has('success_message'))
                                    <div class="alert alert-success">
                                        {{ session()->get('success_message') }}
                                    </div>
                                @endif

                                @if(count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                           </div>

                            @if(Cart::count() > 0)
                                <h2>{{ Cart::count() }} item(s) in Shopping Cart</h2>
                                   <div class="table-content table-responsive">
                                       <table class="table">
                                           <thead>
                                               <tr>
                                                   <th class="li-product-remove">remove</th>
                                                   <th class="li-product-thumbnail">images</th>
                                                   <th class="cart-product-name">Product</th>
                                                   <th class="li-product-price">Unit Price</th>
                                                   <th class="li-product-quantity">Quantity</th>
                                                   <th class="li-product-subtotal">Total</th>
                                               </tr>
                                           </thead>
                                           <tbody>
                                               @foreach (Cart::content() as $item)
                                                   <tr>
                                                       <td class="li-product-remove">
                                                           <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                                                              {{ csrf_field() }}
                                                              {{ method_field('DELETE') }}

                                                              <button type="submit" class=""> <i class="fa fa-times"></i></button>
                                                          </form>

                                                       </td>
                                                       <td class="li-product-thumbnail"><a href="{{ route('shop.show', $item->model->slug) }}"><img src="images/product/small-size/6.jpg" alt="Li's Product Image"></a></td>
                                                       <td class="li-product-name"><a href="{{ route('shop.show', $item->model->slug) }}">{{ $item->model->name }}</a></td>
                                                       <td class="li-product-price"><span class="amount">${{ $item->model->price }}</span></td>
                                                       <td class="quantity">
                                                           <label>Quantity</label>
                                                           <div class="cart-plus-minus">
                                                               <input class="cart-plus-minus-box" value="1" type="text">
                                                               <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                               <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                           </div>
                                                       </td>
                                                       <td class="product-subtotal"><span class="amount">${{Cart::total()}}</span></td>
                                                   </tr>
                                               @endforeach

                                           </tbody>
                                       </table>
                                   </div>
                                   <div class="row">
                                       <div class="col-12">
                                           <div class="coupon-all">
                                               <div class="coupon">
                                                   <input id="coupon_code" class="input-text" name="coupon_code" value="" placeholder="Coupon code" type="text">
                                                   <input class="button" name="apply_coupon" value="Apply coupon" type="submit">
                                               </div>
                                               <div class="coupon2">
                                                   <input class="button" name="update_cart" value="Update cart" type="submit">
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="row">
                                       <div class="col-md-5 ml-auto">
                                           <div class="cart-page-total">
                                               <h2>Cart totals</h2>
                                               <ul>
                                                   <li>Subtotal <span>${{presentPrice(Cart::subtotal())}}</span></li>
                                                   <li>Tax(13%) <span>${{Cart::tax()}}</span></li>
                                                   <li>Total <span>${{Cart::total()}}</span></li>
                                               </ul>
                                               <a href="#">Proceed to checkout</a>
                                               <form action="{{ route('cart.wishlist', $item->rowId) }}" method="POST">
                                                  {{ csrf_field() }}
                                                  <input type="hidden" name="id" value="{{ $item->id }}">
                                                  <input type="hidden" name="name" value="{{ $item->name }}">
                                                  <input type="hidden" name="price" value="{{ $item->price }}">
                                                  <button type="submit" class="add-cart">Add to wishlist</button>
                                              </form>
                                           </div>
                                       </div>
                                   </div>
                            @else
                                <h2>No items!</h2>
                            @endif
                       </div>
                   </div>
               </div>
           </div>
           <!--Shopping Cart Area End-->
           @include('partials.relative')
@endsection
