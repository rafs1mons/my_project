@extends('layouts.app')

@section('content')
    <h1>Kitaplar</h1>

    @foreach ($kitaplar as $kitap)
        <div>
            <h2>{{ $kitap->isim }}</h2>
            <p>{{ $kitap->yazar }}</p>
            <p>{{ $kitap->durum }}</p>
        </div>
    @endforeach
@endsection
