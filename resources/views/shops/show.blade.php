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
              
              <div class="col-md-6">
                  @foreach ($detail->images as $image)
                      <img src="{{ $image->url }}"  width="50%"  alt="...">
                  @endforeach
              </div>
              
              <div class="col-md-6">
                  <h2>ラーメンの評価</h2>
                  
                  <p>星を入れる（プラグインを探す）</p>
                  
                  <h2>{{ $detail->explain }}</h2>
              </div>
              
              <div class="col-md-12">
                  <h1>地図の挿入</h1>
                
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d209147.26432187727!2d135.62849521636954!3d35.00855736520539!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60010d1edd5744bd%3A0x2ce4f16d72ef7006!2z5qiq5rWc5a6257O744Op44O844Oh44OzIOWkp-a0pSDprYLlv4PlrrY!5e0!3m2!1sja!2sjp!4v1712151174081!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
              
              <div class="col-md-12">
                  <h2>みんなコメント</h2>
                  
                  <div class="card">
                      <div class="card-body">
                          <p>コメントを表示する場所</p>
                      </div>
                      
                      <a class="btn btn-primary" href="#" role="button">もっと見る</a>
                  </div>
              </div>
              
              <div class="col-md-12">
                  <a class="btn btn-outline-primary" href="{{ route('shops.index') }}" role="button">戻る</a>
              </div>
              
          </div>
      </div>
   
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>