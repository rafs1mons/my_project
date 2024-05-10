@extends('layouts.app')

@section('content')
    <h1>Kitaplar</h1>

{{--    @foreach ($kitaplar as $kitap)--}}
{{--        <div>--}}
{{--            <h2>{{ $kitap->isim }}</h2>--}}
{{--            <p>{{ $kitap->yazar }}</p>--}}
{{--            <p>{{ $kitap->durum }}</p>--}}
{{--        </div>--}}
{{--    @endforeach--}}
    });
    @if($kitaplar)
        @foreach($kitaplar as $kitap)
            @if($kitap)
                <p>{{ $kitap->isim }}</p>
            @endif
        @endforeach
    @endif
@endsection
