@extends('index')

@section('content')

    @component('partials.hero')
        This is my homepage
    @endcomponent

    @include('partials.nav')

@endsection