<!-- resources/views/coupons/create.blade.php -->
@extends('layout.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Coupon</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('coupons.store') }}">
                        @csrf

                        <div class="form-group">
                            <label for="code">Coupon Code</label>
                            <input id="code" type="text" class="form-control @error('code') is-invalid @enderror" name="code" value="{{ old('code') }}" required autofocus>
                            @error('code')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="discount_amount">Discount Amount</label>
                            <input id="discount_amount" type="number" class="form-control @error('discount_amount') is-invalid @enderror" name="discount_amount" value="{{ old('discount_amount') }}" required>
                            @error('discount_amount')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="expiry_date">Expiry Date</label>
                            <input id="expiry_date" type="date" class="form-control @error('expiry_date') is-invalid @enderror" name="expiry_date" value="{{ old('expiry_date') }}" required>
                            @error('expiry_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Create Coupon</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
