@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/show.css') }}">
@endsection

@section('content')
<div class="container">
    <h1>{{ $shop->name }}</h1>
    <img src="{{ asset($shop->img_url) }}" class="img-fluid" alt="{{ $shop->name }}">
    <p><strong>エリア:</strong> {{ $shop->area->name }}</p>
    <p><strong>ジャンル:</strong> {{ $shop->genre->name }}</p>
    <p><strong>詳細:</strong> {{ $shop->detail }}</p>
    <a href="{{ route('shops.index') }}" class="btn btn-secondary">一覧に戻る</a>
</div>
@endsection