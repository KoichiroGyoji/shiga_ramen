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
                
                <form method="GET" action="{{ route('searchproduct')}}">
                    <nav class="navbar navbar-expand-lg bg-body-tertiary">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="#">滋賀県ラーメンサイト</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                
                                    
                                <select name="cityId" class="form-control" value="{{ $cityId }}">
                                    <option value="">場所で検索</option>
      
                                    @foreach($cities as $city)
                                        <option value="{{ $city->id }}">
                                            {{ $city->name }}
                                        </option>  
                                    @endforeach
                                </select>
                                    
                                
                                <input class="form-control me-2 d-flex" type="search" placeholder="Search" aria-label="Search" name="searchWord" value="{{ $searchWord }}">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                               
                            </div>
                        </div>
                    </nav>
                </form>
              
                <div class="col-md-12">
                    <div class="alert alert-primary" role="alert">
                        休業日のお知らせ
                    </div>
                </div>
                
                
                @if (empty($products))
                
                    <div class="col-md-12">
                        <div><h1>大津市のおすすめ</h1></div>
                    </div>
                    
                    
                    
                    @foreach ($Otsu_City as $Otsu)
                        <div class="col-md-4">
                            <div class="card" style="width: 100%;">
                                
                                @foreach ($Otsu->images as $image)
                                    <img src="{{ $image->url }}" class="card-img-top" alt="...">
                                @endforeach
                        
                                <div class="card-body">
                                    <h5 class="card-title">{{ $Otsu->name }}</h5>
                                        <p class="card-text">{{$Otsu->explain}}</p>
                                        <a href="{{ route('shops.show', ['id'=>$Otsu->id]) }}" class="btn btn-primary">詳細</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
        
                    <div class="col-md-12">
                        <div><h1>草津市のおすすめ</h1></div>
                    </div>
                    
                    @foreach ($Kusatsu_City as $Kusatsu)
                        <div class="col-md-4">
                            <div class="card" style="width: 100%;">
                                
                                @foreach ($Kusatsu->images as $image)
                                    <img src="{{ $image->url }}" class="card-img-top" alt="...">
                                @endforeach
                                
                                <div class="card-body">
                                    <h5 class="card-title">{{ $Kusatsu->name }}</h5>
                                        <p class="card-text">{{$Kusatsu->explain}}</p>
                                        <a href="{{ route('shops.show', ['id'=>$Kusatsu->id]) }}" class="btn btn-primary">詳細</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
    
                @endif
    
                @if (!empty($products))
                    <div class="col-md-12">
                        <p>全{{ $products->count() }}件</p>
                    </div>
                
                    @foreach ($products as $product)
                        <div class="col-md-4">
                            <div class="card" style="width: 100%;">
                                
                                @foreach ($product->images as $image)
                                    <img src="{{ $image->url }}" class="card-img-top" alt="...">
                                @endforeach
                                
                                <div class="card-body">
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                        <p class="card-text">{{ $product->explain }}</p>
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

