@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="">新しい商品を追加</h1>

    <form method="POST" action="/products">
        {{csrf_field()}}
        <div class="form-group">
            <label for="product-name">商品名</label>
            <input type="text" name="name" id="product-name" class="form-control">
        </div>
        <div class="form-group">
            <label for="product-description">商品説明</label>
            <textarea type="text" name="description" id="product-description" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="price">価格</label>
            <input type="text" name="price" id="product-price" class="form-control">
        </div>
        <div class="form-group">
            <label for="product-category">カテゴリ</label>
            <select name="category_id"class="form-control" id="product-category">
                @foreach($categories as $category)
                    <option value="{{$category->id}}" class="">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">商品を登録</button>
    </form>
    <a href="/products" class="">商品一覧に戻る</a>
</div>
@endsection