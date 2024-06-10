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
            @if ($product['badges'][0]['type'] === 'discount')
                <span class="discount">{{ $product['badges'][0]['value'] }}</span>
            @elseif(isset($product['badges'][1]['type']))
                <span class="discount">{{ $product['badges'][1]['value'] }}</span>
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
        {{-- brand --}}
        <span class="card-text">{{ $product['brand'] }}</span>
        {{-- name --}}
        <span class="card-text text-uppercase fw-bold">{{ $product['name'] }}</span>

        {{-- price --}}
        <div>
            @if ($product['badges'][0]['type'] === 'discount')
                <?php $discount = str_replace(['-', '%'], '', $product['badges'][0]['value']); ?>
                <span class="text-danger fw-bold">
                    {{ bcdiv($product['price'] - ($product['price'] * $discount) / 100, 1, 2) }} </span>
            @elseif(isset($product['badges'][1]['type']) && $product['badges'][1]['type'] === 'discount')
                <?php $discount = str_replace(['-', '%'], '', $product['badges'][1]['value']); ?>
                <span class="text-danger fw-bold">
                    {{ bcdiv($product['price'] - ($product['price'] * $discount) / 100, 1, 2) }} </span>
            @endif

            @if (
                (isset($product['badges'][1]['type']) && $product['badges'][1]['type'] === 'discount') ||
                    $product['badges'][0]['type'] === 'discount')
                <span class="text-decoration-line-through"> {{ $product['price'] }} </span>
            @else
                <span class="text-danger fw-bold"> {{ $product['price'] }} </span>
            @endif
        </div>
        {{-- price --}}
    </div>
    {{-- text --}}
</div>
