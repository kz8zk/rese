<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\Area;
use App\Models\Genre;

class ShopController extends Controller
{
    // 店舗一覧を表示（検索機能付き）
    public function index(Request $request)
    {
        // echo 'ok';
        // フィルター条件の取得
        $area_id = $request->input('area_id');
        $genre_id = $request->input('genre_id');
        $keyword = $request->input('keyword');

        // クエリの初期化
        $query = Shop::with(['area', 'genre']);

        // エリア検索
        if (!empty($area_id)) {
            $query->where('area_id', $area_id);
        }

        // ジャンル検索
        if (!empty($genre_id)) {
            $query->where('genre_id', $genre_id);
        }

        // キーワード検索（店舗名・詳細）
        if (!empty($keyword)) {
            $query->where(function ($q) use ($keyword) {
                $q->where('name', 'LIKE', "%{$keyword}%")
                    ->orWhere('detail', 'LIKE', "%{$keyword}%");
            });
        }

        // 検索結果取得
        $shops = $query->get();

        // フィルター用のデータを取得
        $areas = Area::all();
        $genres = Genre::all();

        return view('shops.index', compact('shops', 'areas', 'genres', 'area_id', 'genre_id', 'keyword'));
    }

    // 店舗詳細を表示
    public function show(Shop $shop)
    {
        return view('shops.show', compact('shop'));
    }
}
    // //
    // // 店舗一覧を表示
    // public function index()
    // {
    //     // お店のデータをエリアとジャンルと共に取得
    //     $shops = Shop::with(['area', 'genre'])->get();

    //     return view('index', compact('shops'));
    // }

    // // 店舗詳細を表示
    // public function show(Shop $shop)
    // {
    //     return view('shops.show', compact('shop'));
    // }

    // public function index(Request $request)
    // {
    //     // フィルター条件の取得
    //     $area_id = $request->input('area_id');
    //     $genre_id = $request->input('genre_id');
    //     $keyword = $request->input('keyword');

    //     // クエリの初期化
    //     $query = Shop::with(['area', 'genre']);

    //     // エリア検索
    //     if (!empty($area_id)) {
    //         $query->where('area_id', $area_id);
    //     }

    //     // ジャンル検索
    //     if (!empty($genre_id)) {
    //         $query->where('genre_id', $genre_id);
    //     }

    //     // キーワード検索（店舗名・詳細）
    //     if (!empty($keyword)) {
    //         $query->where(function ($q) use ($keyword) {
    //             $q->where('name', 'LIKE', "%{$keyword}%")
    //             ->orWhere('detail', 'LIKE', "%{$keyword}%");
    //         });
    //     }

    //     // 検索結果取得
    //     $shops = $query->get();

    //     // フィルター用のデータを取得
    //     $areas = Area::all();
    //     $genres = Genre::all();

    //     return view('shops.index', compact('shops', 'areas', 'genres', 'area_id', 'genre_id', 'keyword'));
    // }
// }
