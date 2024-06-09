<div class="container-card">
    {{-- img --}}
    <div class="card">

        {{-- img front back --}}
        <div class="front-back">
            <img class="front" src="{{ Vite::asset('resources/img/' . $product['frontImage']) }}" alt="img-card">
            <img class="back" src="{{ Vite::asset('resources/img/' . $product['backImage']) }}" alt="img-card">
        </div>
        {{-- img front back --}}

        {{-- TAGS ABSOLUTE --}}
        <div class="tags">

            {{-- type discount --}}
            @if (isset($product['badges'][0]['priceDiscount']))
                @if ($product['badges'][0]['type'] === 'discount')
                    <span class="discount">{{ $product['badges'][0]['value'] }}</span>
                @elseif(isset($product['badges'][1]['type']))
                    <span class="discount">{{ $product['badges'][1]['value'] }}</span>
                @endif
            @endif

            {{-- type tag --}}
            @if ($product['badges'][0]['type'] === 'tag')
                <span class="tag">{{ $product['badges'][0]['value'] }}</span>
            @elseif(isset($product['badges'][1]['type']) === 'tag')
                <span class="tag">{{ $product['badges'][1]['value'] }}</span>
            @endif

        </div>

        {{-- heart --}}
        <div class="heart">
            <span class="{{ $product['isInFavorites'] ? 'text-danger' : '' }}">&hearts;</span>
        </div>
        {{-- /TAGS ABSOLUTE --}}
    </div>
    {{-- /img --}}

    {{-- text --}}
    <div class="card-body">
        <span class="card-text">{{ $product['brand'] }}</span>
        <span class="card-text text-uppercase fw-bold">{{ $product['name'] }}</span>
        <div>
            @if (isset($product['badges'][0]['priceDiscount']))
                <span class="card-text text-danger fw-bold">{{ $product['badges'][0]['priceDiscount'] }}</span>
            @endif
            <span class="card-text {{ isset($product['badges'][0]['priceDiscount']) ? 'text-decoration-line-through' : 'text-danger fw-bold' }}">{{ $product['price'] }}</span>
        </div>
    </div>
    {{-- text --}}
</div>
