<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>sample_paginate</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
    <body>
        <div class="container text-center">
            <div class="row">
                <h1>{{ $create_detail->name }}のコメント</h1>
                
                <form action="{{ route('shops.posts', ['id'=>$create_detail->id]) }}" method="POST">
                    @csrf
                    <input type="hidden" name="comment[shop_id]" value="{{$create_detail->id}}" />
                    
                    <div class="title">
                        <h2>evaluation</h2>
                        <input type="text" name="comment[evaluation]" placeholder="1~5で評価してください"/>
                    </div>
                    <div class="body">
                        <h2>comment</h2>
                        <textarea name="comment[comment]" maxlength="140" rows="10" cols="50" placeholder="140文字以内でコメントしてください"></textarea>
                    </div>
                    <input type="submit" value="store"/>
                </form>
                
                <!--隙間の作成-->
                <div class="col-md-12 py-2"></div>
                
                <div class="footer">
                    <a href="{{ route('shops.show', ['id'=>$create_detail->id]) }}" class="btn btn-primary">戻る</a>
                </div>
            </div>
        </div>
    </body>
</html>
