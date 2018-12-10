@extends('layout.master')

@section('content')
    <div class="container mb-5">
        <div class="row">
            <div class="col-md-12 ">
                <h1 class="text-danger text-center"> Sản phẩm </h1>
            </div>
        </div>
    </div>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-3">
                <div class="card Product_LoaiSP">
                    <div class="card-header bg-success">
                        <h3 class="text-white"> Loại sản phẩm </h3>
                    </div>
                    <ul class="list-group list-group-flush">

                        @foreach($type_product as $t_p)
                            <li class="list-group-item">
                                <i class="fa fa-arrow-circle-right"></i>
                                <a href="{{route('loaisanpham',$t_p->id)}}"> {{$t_p->name}} </a>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row">

                @foreach($products as $index)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img class="Product_Image1" src="banhang/image/products/{{$index->image}}" alt="">
                        <div class="card-body">
                            <h5 class="card-title"> {{$index->name}} </h5>
                            <div class="d-flex flex-row">

                                @if( $index->promotion_price == 0 )
                                    <span class="card-text pr-3">${{$index->price}}</span>
                                @else
                                    <span class="card-text pr-3">${{$index->price}}</span>
                                    <span class="card-text"> <b class="text-danger"> Sale: </b> ${{$index->promotion_price}}
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