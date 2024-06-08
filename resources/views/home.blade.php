@extends('layouts.app')

{{--  qui il contenuto della pagine home page --}}
@section('content')
    <div class="container">
        @foreach ($arrayProducts as $product)
            <div class="card">
                <div>
                    <img src="{{ Vite::asset('resources/img/' . $product['frontImage']) }}" alt="img-card">
                </div>
                <div class="card-body">
                    <span class="card-text">{{ $product['brand']}}</span>
                    <span class="card-text text-uppercase fw-bold">{{ $product['name']}}</span>
                    {{-- @if(isset($product['badges'][0]['priceDiscount']))
                        <span class="card-text">{{ $product['badges'][0]['priceDiscount']}}</span>
                    @endif --}}

                </div>
            </div>
        @endforeach
    </div>
@endsection
