<!doctype html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>sample</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
    <body>
        <!--レスポンシブルデザインにしたいため768pxから変わるようにしている-->
        <div class="container text-center">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg bg-body-tertiary">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="#">滋賀県ラーメンサイト</a>
                            <!--ハンバーガメニュー-->
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <form method="GET" action="{{ route('searchproduct')}}">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                
                            
                                @csrf
                                    
                                    <select name="cityId" class="form-control mx-2" value="{{ $cityId }}">
                                        <option value="">場所で検索</option>
          
                                        @foreach($cities as $city)
                                            <option value="{{ $city->id }}">
                                                {{ $city->name }}
                                            </option>  
                                        @endforeach
                                    </select>
                                
                                    <select name="categoryId" class="form-control mx-2" value="{{ $categoryId }}">
                                        <option value="">ジャンルで検索</option>
          
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">
                                                {{ $category->name }}
                                            </option>  
                                        @endforeach
                                    </select>
                                    
                                    <input class="form-control me-2 d-flex" type="search" placeholder="Search" aria-label="Search" name="searchWord" value="{{ $searchWord }}">
                                    <button class="btn btn-outline-success" type="submit">Search</button>
                                
                                </div>
                            </form>
                        </div>
                    </nav>
                    
                    
                    
                </div>
                
                
              
                <div class="col-md-12">
                    <div class="alert alert-primary" role="alert">
                        <h2>定休日のお知らせ</h2>
                        
                        @if ($shop->rest == $todays)
                             @foreach($shop as $shop)
                                    <h2>{{ $shop->name }}</h2>
                             @endforeach
                        @else
                            <h4>定休日の店はありません。</h4>
                        @endif
                    </div>
                </div>
                
                
                
                @if (empty($products))
                
                    <div class="col-md-12">
                        <div><h1>大津市のおすすめ</h1></div>
                    </div>
                    
                    @foreach ($Otsu_City as $Otsu)
                        <div class="col-md-3 py-2">
                            <div class="card" style="width: 100%; height: 100%;">
                                
                                @foreach ($Otsu->images as $image)
                                    <img src="{{ $image->url }}" class="card-img-top" alt="...">
                                @endforeach
                        
                                <div class="card-body">
                                    <h5 class="card-title">{{ $Otsu->name }}</h5>
                                        <p class="card-text">{{ Str::limit($Otsu->explain, 40) }}</p>
                                        <a href="{{ route('shops.show', ['id'=>$Otsu->id]) }}" class="btn btn-primary">詳細</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
        
                    <div class="col-md-12">
                        <div><h1>草津市のおすすめ</h1></div>
                    </div>
                    
                    @foreach ($Kusatsu_City as $Kusatsu)
                        <div class="col-md-3 py-2">
                            <div class="card" style="width: 100%; height: 100%;">
                                
                                @foreach ($Kusatsu->images as $image)
                                    <img src="{{ $image->url }}" class="card-img-top" alt="...">
                                @endforeach
                                
                                <div class="card-body">
                                    <h5 class="card-title">{{ $Kusatsu->name }}</h5>
                                        <p class="card-text">{{ Str::limit($Kusatsu->explain, 40) }}</p>
                                        <a href="{{ route('shops.show', ['id'=>$Kusatsu->id]) }}" class="btn btn-primary">詳細</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
    
                @endif
    
                @if (!empty($products))
                    <div class="col-md-12">
                        <p>全{{ $products->count() }}件</p>
                        
                        @if(!empty($search_result_category) && !empty($search_result_category))
                            <h1>検索結果：{{ $search_result_city }} {{ $search_result_category }}</h1>
                        @elseif(!empty($search_result_city))
                            <h1>検索結果：{{ $search_result_city }}</h1>
                        @elseif(!empty($search_result_category))
                            <h1>検索結果：{{ $search_result_category }}</h1>
                        @endif
                        
                        
                    </div>
                
                    @foreach ($products as $product)
                        <div class="col-md-3 py-2">
                            <div class="card" style="width: 100%; height: 100%;">
                                
                                @foreach ($product->images as $image)
                                    <img src="{{ $image->url }}" class="card-img-top" alt="...">
                                @endforeach
                                
                                <div class="card-body">
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                        <p class="card-text">{{ Str::limit($product->explain, 40) }}</p>
                                        <a href="{{ route('shops.show', ['id'=>$product->id]) }}" class="btn btn-primary">詳細</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                
                @endif

            </div>
        </div>
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>

