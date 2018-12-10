@extends('layout.master')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-9 offset-3 ">
                <h5>  Tìm thấy {{count($product_type)}} sản phẩm  </h5>
            </div>
        </div>
    </div>
    <div class="container mt-3 mb-5">
        <div class="row">
            <div class="col-md-3">
                <div class="card Product_LoaiSP">
                    <div class="card-header bg-success">
                        <h3 class="text-white"> Loại sản phẩm </h3>
                    </div>
                    <ul class="list-group list-group-flush">

                        @foreach($types as $t)
                            <li class="list-group-item">
                                <i class="fa fa-arrow-circle-right"></i>
                                <a href="{{route('loaisanpham',$t->id)}}"> {{$t->name}} </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row">

                @foreach($product_type as $sp_type)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img class="Product_Image1" src="banhang/image/products/{{$sp_type->image}}" alt="">
                        <div class="card-body">
                            <h5 class="card-title"> {{$sp_type->name}} </h5>
                            <div class="d-flex flex-row">

                                @if( $sp_type->promotion_price == 0 )
                                    <span class="card-text pr-3">${{$sp_type->price}}</span>
                                @else
                                    <span class="card-text pr-3">${{$sp_type->price}}</span>
                                    <span class="card-text"> <b class="text-danger"> Sale: </b> ${{$sp_type->promotion_price}}
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
        </div>
    </div>
@endsection