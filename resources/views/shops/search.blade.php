@extends('layouts.app')

@section('search')

<div class="col-md-12">
    
    <h2>検索結果：</h2>
</div>

<div class="col-md-12">
    <form action="{{ route('shops.sorting') }}" method="GET">
        <input type="text" name="keyword" value="{{ request()->input('keyword') }}" placeholder="検索キーワード">
        <button type="submit">検索</button>
    </form>
</div>

<table>

  @forelse ($sorting as $sort)
    <tr>
      <td>{{ $sort->name }}</td>
    </tr>
  @empty
    <td>No posts!!</td>
  @endforelse
</table>

@endsection