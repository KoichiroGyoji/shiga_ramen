<!doctype html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sample_paginate</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
      <div class="container text-center">
          <div class="row">
              
              <div class="col-md-12">
                  <h1>{{ $detail->name }}</h1>
              </div>
              
              <!--隙間の作成-->
              <div class="col-md-12 py-2"></div>
              
              <div class="col-md-6">
                  @foreach ($detail->images as $image)
                      <img src="{{ $image->url }}"  width="50%"  alt="...">
                  @endforeach
              </div>
              
              <div class="col-md-6">
                  
                  <!--星を入れる（プラグインを探す）-->
                  
                  <h2>{{ $detail->explain }}</h2>
              </div>
              
              <!--隙間の作成-->
              <div class="col-md-12 py-2"></div>
              
              <div class="col-md-12">
                  <div id="map" style="height:400px"></div>
              </div>
              
              <!--隙間の作成-->
              <div class="col-md-12 py-2"></div>
              
              <div class="col-md-12">
                  <h2>みんなコメント</h2>
                  
                  <div class="card">
                      <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($shops as $comment)
                                    <tr>
                                        <th scope="row">{{ $comment->id }}</th>
                                        <td>{{ $comment->comment }}</td>
                                        <td>{{ $comment->evaluation }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                      </div>
                      
                      <a class='btn btn-primary' href='{{ route('shops.create', ['id'=>$detail->id]) }}'>作成する</a>
                      
                  </div>
              </div>
              
              <!--隙間の作成-->
              <div class="col-md-12 py-2"></div>
              
              <div class="col-md-12">
                  <a class="btn btn-outline-primary" href="{{ route('shops.index') }}" role="button">戻る</a>
              </div>
              
              <!--隙間の作成-->
              <div class="col-md-12 py-4"></div>
              
          </div>
      </div>
   
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
      
      <script>
            function initMap() {
                map = document.getElementById("map");
                
                // 東京タワーの緯度、経度を変数に入れる
                let place = {lat: {{ $detail->latitude }}, lng: {{ $detail->longitude }}};
                
               
                // オプションの設定
                opt = {
                    // 地図の縮尺を指定
                    zoom: 15,

                    // センターを東京タワーに指定
                    center: place,
                };

                // 地図のインスタンスを作成（第一引数にはマップを描画する領域、第二引数にはオプションを指定）
                mapObj = new google.maps.Map(map, opt);

                marker = new google.maps.Marker({
                    // ピンを差す位置を東京タワーに設定
                    position: place,

                    // ピンを差すマップを指定
                    map: mapObj,

                    // ホバーしたときに「tokyotower」と表示されるように指定

                    title: '{{ $detail->name }}',
                });
            }
        </script>
        
        // Google Maps APIの読み込み（keyには自分のAPI_KEYを指定）
        <script src="https://maps.googleapis.com/maps/api/js?language=ja&region=JP&key={{$api_key}}&callback=initMap" async defer></script>
      
  </body>
</html>