@extends('layout.master')

@section('content')
<div class="Product container mb-5">
        <div class="row mb-3">
              <div class="col-md-12">
                  <h1 class="text-danger"> Sản phẩm</h1>
                  <h5> Tìm thấy {{count($product)}} sản phẩm </h5>
              </div>
        </div>
        <div class="row mb-3">
            @foreach($product as $index)
            <div class="col-md-3 mb-3">
                <div class="card w-100">
                    <img class="Product_Image1" src="banhang/image/products/{{$index->image}}" alt="">
                    <div class="card-body">
                        <h5 class="card-title"> {{$index->name}} </h5>
                        <div class="d-flex flex-row">

                            @if($index->promotion_price == 0)
                                <span class="card-text pr-3">${{$index->price}}</span>
                            @else
                                <span class="card-text pr-3"> ${{$index->price}}</span>
                                <span class="card-text"> <b class="text-danger"> Sale: </b>${{$index->promotion_price}}
                                </span>
                            @endif

                        </div>
                        <button class="btn btn-outline-primary"> Chi tiết </button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
</div>
@endsection