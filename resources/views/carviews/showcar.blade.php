@extends('layouts.app')

@section('title', 'Show result')
@section('findCarClass', 'active')

@section('body')

    <div class="sc-content-container">
        @foreach($images as $image)
            <img src="{{ URL::to('assets/images/' . $image) }}" alt="{{ $image }}" />
        @endforeach
    </div>



@endsection
