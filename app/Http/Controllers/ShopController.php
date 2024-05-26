<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Shop;
use App\Models\City;
use App\Models\Category;
use App\Models\Image;
use App\Models\Comment;
use App\Http\Requests\PostRequest;

class ShopController extends Controller
{
    
    
    public function index(Shop $shop, City $city, Category $category, Image $image, Request $request)
    {
        //入力される値nameの中身を定義する
        
        $searchWord = $request->input('searchWord');//ラーメンの値
        
        $cityId = $request->input('cityId');//都市の値
        
        $categoryId = $request->input('categoryId');//ジャンルの値
        
        // 大津のショップレコードを取得
        $Otsu = $shop::where('city_id', 1)->get();
        
        // 草津のショップレコードを取得
        $Kusatsu = $shop::where('city_id', 2)->get();
        
        // Carbonを日本語に設定
        Carbon::setLocale('ja');
        
        // 今日の曜日を日本語で取得
        $today = Carbon::now()->isoFormat('dddd');
        
        return view('shops.index')->with([
            
            'shop' => $shop,
            
            'city' => $city,
            
            'Otsu_City' => $Otsu,
            
            'Kusatsu_City' => $Kusatsu,
            
            'images' => $image,
            
            'cities' => $city->take(3)->get(),
            
            'categories' => $category->get(),
            
            'searchWord' => $searchWord,
            
            'cityId' => $cityId,
            
            'categoryId' => $categoryId,
            
            'todays' => $today
        ]);  
       
    }
    
    public function show($id, Comment $comment){
        
        // .envのAPIキーを変数へ
        $api_key = config('app.api_key');
        
        $detail = Shop::find($id);
        
        $comments = $comment::where('shop_id', $detail->id)->get();
        
        return view('shops.show')->with([
            'detail' => $detail,
            'api_key' => $api_key,
            'shops' => $comments
        ]);  
    }
    
    public function create($id, Comment $comment){
        
        $create_detail = Shop::find($id);
        
        return view('shops.create')->with([
            'create_detail' => $create_detail
        ]); 
    }
    
    public function store($id, Comment $comment, PostRequest $request){
        
        $store_detail = Shop::find($id);
        
        $input = $request['comment'];
        $comment->fill($input)->save();
        
        return redirect('/show/'.$store_detail->id);
    }
    
    public function search(Request $request, Shop $shop, City $city, Category $category)
    {
        // Carbonを日本語に設定
        Carbon::setLocale('ja');
        
        // 今日の曜日を日本語で取得
        $today = Carbon::now()->isoFormat('dddd');
        
        //入力される値nameの中身を定義する
        
        $searchWord = $request->input('searchWord'); //ラーメンの値
        
        $cityId = $request->input('cityId'); //都市の値
        
        $categoryId = $request->input('categoryId');//ジャンルの値
        
        //　検索結果の表示(cityの名前)
        $search_result_city = $city::where('id', $cityId)->value('name');
        
        //　検索結果の表示(categoryの名前)
        $search_result_category = $category::where('id', $categoryId)->value('name');

        $query = Shop::query();
        
        //ラーメンの値が入力された場合、Shopテーブルから一致する値を$queryに代入
        if (isset($searchWord)) {
            $query->where('name', 'like', '%' . self::escapeLike($searchWord) . '%');
        }
        //場所が選択された場合、Shopテーブルからcity_idが一致する値を$queryに代入
        if (isset($cityId)) {
            $query->where('city_id', $cityId);
        }

        //ジャンルが選択された場合、categoryテーブルから一致する値を$queryに代入

        if (isset($categoryId)) {
            $query->whereHas('categories', function ($q) use ($categoryId) {
                $q->where('category_id', $categoryId);
            });
        }
        
        //$queryを$productsに代入
        $products = $query->get();
        
        // dd($request);

        return view('shops.index')->with([
            'shop' => $shop,
            'todays' => $today,
            'cities' => $city->take(3)->get(),
            'categories' => $category->take(3)->get(),
            
            'search_result_city' => $search_result_city,
            'search_result_category' => $search_result_category,
            'products' => $products,
            'searchWord' => $searchWord,
            'cityId' => $cityId,
            'categoryId' => $categoryId
            
        ]);
    }

    //「\\」「%」「_」などの記号を文字としてエスケープさせる
    public static function escapeLike($str)
    {
        return str_replace(['\\', '%', '_'], ['\\\\', '\%', '\_'], $str);
    }

        
    
    
}
