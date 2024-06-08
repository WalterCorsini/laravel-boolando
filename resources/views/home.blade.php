@extends('layouts.app')

{{--  qui il contenuto della pagine home page --}}
@section('content')
    <div class="container-fluid pt-5">
        <div class="container">

            @foreach ($arrayProducts as $product)
                <div class="card">
                    <div class="img">
                        {{-- img --}}
                        <img src="{{ Vite::asset('resources/img/' . $product['frontImage']) }}" alt="img-card">
                        <div class="tags">
                        {{-- type discount --}}
                        @if(isset($product['badges'][0]['priceDiscount']))
                            @if($product['badges'][0]['type'] === 'discount')
                                <span class="discount">{{$product['badges'][0]['value']}}</span>
                            @elseif($product['badges'][1]['type'])
                                <span class="discount">{{$product['badges'][1]['value']}}</span>
                            @endif
                        @endif
                        {{-- type tag --}}
                        @if($product['badges'][0]['type'] === 'tag')
                            <span class="tag">{{$product['badges'][0]['value']}}</span>
                        @elseif(isset($product['badges'][1]['type']) === 'tag')
                            <span class="tag">{{$product['badges'][1]['value']}}</span>
                        @endif
                        </div>
                    </div>

                    <div class="card-body">
                        <span class="card-text">{{ $product['brand'] }}</span>
                        <span class="card-text text-uppercase fw-bold">{{ $product['name'] }}</span>
                        <div>
                            @if (isset($product['badges'][0]['priceDiscount']))
                                <span
                                    class="card-text text-danger fw-bold">{{ $product['badges'][0]['priceDiscount'] }}</span>
                                <span class="card-text text-decoration-line-through">{{ $product['price'] }}</span>
                            @else
                                <span class="card-text text-danger fw-bold">{{ $product['price'] }}</span>
                            @endif
                        </div>
                    </div>

                </div>
            @endforeach

        </div>
    </div>
@endsection
