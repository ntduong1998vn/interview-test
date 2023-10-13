@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 cart p-4">
                        <div class="title">
                            <div class="row">
                                <div class="col">
                                    <h4><b>Shopping Cart</b></h4>
                                </div>
                                <div class="col align-self-center text-end text-muted">3 items</div>
                            </div>
                        </div>

                        @foreach ($products as $product)
                            <div class="row border-top border-bottom">
                                <div class="row main align-items-center">
                                    <div class="col-2"><img class="img-fluid" src="{{ $product->image }}"></div>
                                    <div class="col">
                                        <div class="row text-muted">Shirt</div>
                                        <div class="row">{{ $product->name }}</div>
                                    </div>
                                    <div class="col">
                                        <input type="number" value="1" min="1" max="10"
                                            class="form-control">
                                    </div>
                                    <div class="col d-flex justify-content-center">
                                        <span>&euro; {{ $product->price }}</span><span class="ms-auto">&#10005;</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-md-4 summary gray-400 py-4">
                        <div class="container d-flex flex-column h-100">
                            <h3><b>Summary</b></h3>
                            <hr>
                            <div class="container flex-grow-1">
                                <div class="row">
                                    <div class="col" style="padding-left:0;">ITEMS 3</div>
                                    <div class="col text-end">&euro; 132.00</div>
                                </div>
                                <div class="row">
                                    <div class="col" style="padding-left:0;">ITEMS 3</div>
                                    <div class="col text-end">&euro; 132.00</div>
                                </div>
                                <div class="row">
                                    <div class="col" style="padding-left:0;">ITEMS 3</div>
                                    <div class="col text-end">&euro; 132.00</div>
                                </div>
                            </div>

                            <form>
                                <div class="fw-semibold pt-3 pb-1">COUPON</div>
                                <input id="code" placeholder="Enter your code" class="form-control">
                            </form>
                            <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                                <div class="col">TOTAL PRICE</div>
                                <div class="col text-end fw-bold">&euro; 137.00</div>
                            </div>
                            <button type="button" class="btn btn-dark w-100">CHECKOUT</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
