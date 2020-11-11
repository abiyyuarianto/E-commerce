@extends('template.user')

@section('title')
    Shop
@endsection

@section('style')
<link rel="stylesheet" href="{{asset('css/shop.css')}}">
@endsection

@section('content')
<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="category">
          <h2 id="category-label">Categories</h2>
          <ul class="list-group">
            <li class="list-group-item "><a href="/shop">All</a></li>
            @foreach ($cate as $item)
          <li class="list-group-item {{$item->id == $id ? 'active' : ''}} "><a href="/shop/category/{{$item->id}}">{{$item->name}}</a></li>
            @endforeach
          </ul>
        </div>
        <h2 id="category-label" class="text-center mt-5">Search Product</h2>
        <form action="" class="form-inline ml-5">
          <input type="text" class="form-control" name="search">
          <button class="btn btn-primary">Search</button>
        </form>
      </div>
        <div class="col-lg-8">
          <div class="item-list">
          <h2>Our Products </h2>
          <hr style="margin-bottom: 2em;">
          <div class="row list-product">
       @foreach ($product as $item)
       
        <div class="col-lg-4 item mb-3">
        <a href="/shop/detail/{{$item->id}}">
          <img src="{{asset($item->image)}}" alt="nopic" height="180" width="180">
          </a>
          <p class="product-name mt-3 font-weight-bold"><a href="">{{$item->name}}</a></p>
          <p class="product-price">Rp{{number_format($item->price)}}</p>
        </div>
      
       @endforeach
      </div>
        </div>
    
       
      </div>
      <div class="col-12 text-center mt-4">
        {{$product->links()}}
      </div>
    </div>
  </div>
  <!-- Pagination Link -->
 
</div>
@endsection

@section('script')
<script type="text/javascript" src="{{asset('js/script.js')}}"></script>
@endsection

