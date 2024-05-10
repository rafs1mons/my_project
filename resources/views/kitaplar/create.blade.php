@extends('layouts.app')

@section('content')
    <h1>Yeni Kitap Ekle</h1>

    <form action="{{ route('kitaplar.store') }}" method="POST">
        @csrf

        <label for="isim">Kitap İsmi:</label>
        <input type="text" id="isim" name="isim">

        <label for="yazar">Yazar:</label>
        <input type="text" id="yazar" name="yazar">

        <label for="durum">Durum:</label>
        <input type="text" id="durum" name="durum">

        <input type="submit" value="Ekle">
    </form>
@endsection
