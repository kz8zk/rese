@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="container">
    <h1>お店一覧</h1>

    <!-- 検索フォーム -->
    <form action="{{ route('shops.index') }}" method="GET" class="mb-4">
        <div class="row">
            <!-- エリア選択 -->
            <div class="col-md-3">
                <select name="area_id" class="form-control">
                    <option value="">エリアを選択</option>
                    @foreach ($areas as $area)
                    <option value="{{ $area->id }}" {{ $area_id == $area->id ? 'selected' : '' }}>
                        {{ $area->name }}
                    </option>
                    @endforeach
                </select>
            </div>

            <!-- ジャンル選択 -->
            <div class="col-md-3">
                <select name="genre_id" class="form-control">
                    <option value="">ジャンルを選択</option>
                    @foreach ($genres as $genre)
                    <option value="{{ $genre->id }}" {{ $genre_id == $genre->id ? 'selected' : '' }}>
                        {{ $genre->name }}
                    </option>
                    @endforeach
                </select>
            </div>

            <!-- キーワード入力 -->
            <div class="col-md-4">
                <input type="text" name="keyword" class="form-control" placeholder="店舗名や特徴を入力" value="{{ $keyword }}">
            </div>

            <!-- 検索ボタン -->
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary btn-block">検索</button>
            </div>
        </div>
    </form>

    <div class="row">
        @foreach ($shops as $shop)
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">{{ $shop->name }}</h5>
                    <p class="card-text">エリア: {{ $shop->area->name }}</p>
                    <p class="card-text">ジャンル: {{ $shop->genre->name }}</p>
                    <a href="{{ route('shops.show', $shop) }}" class="btn btn-primary">詳しく見る</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- <div class="attendance__alert">
    // メッセージ機能
</div> -->

<!-- <div class="shop__content">
    <div id="top" class="wrapper">
        <ul class="shop-list">
            <li>
                <a href="shop1.html">
                    <img src="img/" alt="">
                    <p>仙人</p>
                    <p>#東京都 #寿司</p>
                </a>
            </li>
            <li>
                <a href="shop2.html">
                    <img src="img/" alt="">
                    <p>牛助</p>
                    <p>#大阪府 #焼肉</p>
                </a>
            </li>
            <li>
                <a href="shop3.html">
                    <img src="img/" alt="">
                    <p>戦慄</p>
                    <p></p>
                </a>
            </li>
            <li>
                <a href="shop4.html">
                    <img src="img/" alt="">
                    <p>ルーク</p>
                    <p></p>
                </a>
            </li>
            <li>
                <a href="shop5.html">
                    <img src="img/" alt="">
                    <p>志摩屋</p>
                    <p></p>
                </a>
            </li>
            <li>
                <a href="shop6.html">
                    <img src="img/" alt="">
                    <p>香</p>
                    <p></p>
                </a>
            </li>
            <li>
                <a href="shop7.html">
                    <img src="img/" alt="">
                    <p>JJ</p>
                    <p></p>
                </a>
            </li>
            <li>
                <a href="shop8.html">
                    <img src="img/" alt="">
                    <p>らーめん極み</p>
                    <p></p>
                </a>
            </li>
            <li>
                <a href="shop9.html">
                    <img src="img/" alt="">
                    <p>鳥雨</p>
                    <p></p>
                </a>
            </li>
            <li>
                <a href="shop10.html">
                    <img src="img/" alt="">
                    <p>築地色合</p>
                    <p></p>
                </a>
            </li>
            <li>
                <a href="shop11.html">
                    <img src="img/" alt="">
                    <p>晴海</p>
                    <p></p>
                </a>
            </li>
            <li>
                <a href="shop12.html">
                    <img src="img/" alt="">
                    <p>三子</p>
                    <p></p>
                </a>
            </li>
            <li>
                <a href="shop13.html">
                    <img src="img/" alt="">
                    <p>八戒</p>
                    <p></p>
                </a>
            </li>
            <li>
                <a href="shop14.html">
                    <img src="img/" alt="">
                    <p>福助</p>
                    <p></p>
                </a>
            </li>
            <li>
                <a href="shop15.html">
                    <img src="img/" alt="">
                    <p>ラー北</p>
                    <p></p>
                </a>
            </li>
            <li>
                <a href="shop16.html">
                    <img src="img/" alt="">
                    <p>翔</p>
                    <p></p>
                </a>
            </li>
            <li>
                <a href="shop17.html">
                    <img src="img/" alt="">
                    <p>経緯</p>
                    <p></p>
                </a>
            </li>
            <li>
                <a href="shop18.html">
                    <img src="img/" alt="">
                    <p>漆</p>
                    <p></p>
                </a>
            </li>
            <li>
                <a href="shop19.html">
                    <img src="img/" alt="">
                    <p>THE TOOL</p>
                    <p></p>
                </a>
            </li>
            <li>
                <a href="shop20.html">
                    <img src="img/" alt="">
                    <p>木船</p>
                    <p></p>
                </a>
            </li>

        </ul>
    </div>
</div> -->
@endsection