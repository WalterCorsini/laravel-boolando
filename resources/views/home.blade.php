@extends('layouts.app')

{{--  qui il contenuto della pagine home page --}}
@section('content')
    <div class="container-fluid pt-5 pb-5">
        <div class="container">

            @foreach ($arrayProducts as $product)
                @include('partials.card')
            @endforeach

        </div>
    </div>
@endsection
