@extends('template')
@section('main')
    <h1>Ini view laravel</h1>

    @for ($i = 1; $i < 10; $i++)
        @if ($i % 2)
            <h2>ini perulangan menggunakan blade</h2>
        @endif
    @endfor

    @php
        $no = 5;
        echo $no;
    @endphp

    <br>
    <img src="{{ asset('img/bg152.jpg') }}" width="300" alt="">
@endsection
