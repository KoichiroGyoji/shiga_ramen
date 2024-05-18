<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\City;
use App\Models\Category;
use App\Models\Image;

class ShopController extends Controller
{
    
    
    public function index(Shop $shop, City $city, Category $category, Image $image, Request $request)
    {
        $searchWord = $request->input('searchWord');
        
        $cityId = $request->input('cityId');
        
        // 大津のショップレコードを取得
        $Otsu = $shop::where('city_id', 5)->get();
        
        // 草津のショップレコードを取得
        $Kusatsu = $shop::where('city_id', 6)->get();
        
        return view('shops.index')->with([
            
            'shop' => $shop,
            
            'city' => $city,
            
            'Otsu_City' => $Otsu,
            
            'Kusatsu_City' => $Kusatsu,
            
            'images' => $image,
            
            'cities' => $city->take(3)->get(),
            
            'categories' => $category->get(),
            
            'searchWord' => $searchWord,
            
            'cityId' => $cityId
        ]);  
       
    }
    
    public function show($id){
        
        $detail = Shop::find($id);
        
        return view('shops.show')->with([
            'detail' => $detail,
        ]);  
    }
    
    public function search(Request $request, City $city)
    {
        //入力される値nameの中身を定義する
        $searchWord = $request->input('searchWord'); //ラーメンの値
        $cityId = $request->input('cityId'); //都市の値

        $query = Shop::query();
        //商品名が入力された場合、Shopsテーブルから一致する商品を$queryに代入
        if (isset($searchWord)) {
            $query->where('name', 'like', '%' . self::escapeLike($searchWord) . '%');
        }
        //カテゴリが選択された場合、m_categoriesテーブルからcity_idが一致する商品を$queryに代入
        if (isset($cityId)) {
            $query->where('city_id', $cityId);
        }

        //$queryをcategory_idの昇順に並び替えて$productsに代入
        $products = $query->orderBy('id', 'asc')->get();

        return view('shops.index')->with([
            'products' => $products,
            'searchWord' => $searchWord,
            'cityId' => $cityId,
            'cities' => $city->take(3)->get()
        ]);
    }

    //「\\」「%」「_」などの記号を文字としてエスケープさせる
    public static function escapeLike($str)
    {
        return str_replace(['\\', '%', '_'], ['\\\\', '\%', '\_'], $str);
    }

        
    
    
}
