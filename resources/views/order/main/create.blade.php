@extends('layouts.main')
@section('content')
    <!-- Banner Start -->
    <section class="page-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <span class="round-shape"></span>
                    <h2 class="banner-title">Order</h2>
                    <div class="bread-crumb"><a href="/">Home</a> / Order</div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->
<form action="{{ route('order.main.store') }}" method="post">
    @csrf
    <input hidden="hidden" type="text" value="{{$product->id}}" name="product_id">
    <!-- Checkout Section Start -->
    <section class="checkout-section" style="padding: 20px 0">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="customer-login">
                        Do you want to top up your balance? <a href="{{ route('profile.balance.index') }}">Click</a>
                    </div>
                    <div class="customer-coupon">
                        Question to the admin? <a href="{{ route('profile.chat.show', 1) }}">Click</a>
                    </div>
                    <div class="woocommerce-billing-fields">
                        <h3>Form</h3>
                        <div class="row">
                            <p class="col-lg-12">
                                <label>Address</label>
                                <input name="address" type="text">
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="woocommerce-checkout-review-order" id="order_review">
                        <h3>Your Order</h3>
                        <table class="check-table woocommerce-checkout-review-order-table">
                            <thead>
                            <tr>
                                <th class="product-name">Product</th>
                                <th class="product-total"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="cart-item">
                                <td class="product-name">{{$product->title}}</td>
                                <td class="product-total">
                                    <div class="product-price clearfix">
                                                <span class="price">
                                                    <span>{{$product->balance}}<span class="woocommerce-Price-currencySymbol">&nbsp;XMR</span></span>
                                                </span>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                            <tfoot>

                            </tfoot>
                        </table>
                        <div class="place-order">
                            <button type="submit" class="button">Buy</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>
    <!-- Checkout Section End -->
@endsection
