@extends('Layout')

@section('content')
    <main>
        @include('navbar')
        @include('home')
        @include('resume')
        @include('about')
        @include('sosialmedia')
        @include('contact')
    </main>

    {{-- @include('Footer') --}}
@endsection
