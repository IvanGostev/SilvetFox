@extends('layouts.main')
@section('content')
    <section class="page-banner  m-0" style="background-color: rgb(49,96,216); padding: 93px 0 10px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 m-0  m-top-45" style="word-break: break-all!important;">
                    <span class="round-shape"></span>
                    <h2 class="banner-title">1XMR = {{$main->rate_dollars}}$ To top up your balance, send money to the
                        specified xmr account : {{$main->score}}</h2>
                    <div class="bread-crumb"><a href="/">Home / Balance</a></div>
                    <br>
                    <p style="color: yellow;  font-size: 20px">After you have sent the money to the specified account, in
                        the form below, indicate the number of your wallet from which you sent the money.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->

    <!-- Checkout Section Start -->
    <section class="checkout-section p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="padding: 0 0 20px 0">
                    <div class="place-order">
                        <form action="{{ route('profile.balance.replenishment', auth()->user()->id) }}">
                            <button class="btn" style="background-color: #ee7926;" type="submit">Application for
                                replenishment of the balance
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="place-order">
                        <form action="{{ route('profile.balance.withdrawal', auth()->user()->id) }}">
                            <button class="btn" style="background-color: #ee7926;" type="submit">Request for withdrawal
                                from the balance
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="woocommerce-billing-fields">
                        <h3 align="center">History</h3>

                        <div class="row text-center">
                            @foreach($forms as $form)
                                @if($form['type'] == 'R')
                                    <p class="col-lg-12">
                                        <label>Replenishment Request</label>
                                    <h6 class="widget-title">Date: {{$form->created_at}}.
                                        Status: {{ $form->status == 2 ? 'Approved' : ($form->status == 0 ? 'Refused' : 'In processing') }}
                                        . For the amount of {{$form->number}} XMR.</h6>
                                    </p>
                                @else
                                    <p class="col-lg-12">
                                        <label>Withdrawal Request</label>
                                    <h6 class="widget-title">Date: {{$form->created_at}}.
                                        Status: {{ $form->status == 2 ? 'Approved' : ($form->status == 0 ? 'Refused' : 'In processing') }}
                                        . For the amount of {{$form->number}} XMR.</h6>
                                    </p>
                                @endif
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
