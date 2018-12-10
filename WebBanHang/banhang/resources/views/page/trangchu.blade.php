@extends('layout.master')

@section('content')
<div class="Slide container mb-5">
          <div class="row">
                <div class="col-md-3 ">
                    <div class="card Carousel_Left">
                        <div class="card-header bg-success ">
                            <h3 class="text-white"> Loại sản phẩm </h3>
                        </div>
                        <ul class="list-group list-group-flush">

                            @foreach($type_home as $t_h)
                            <li class="list-group-item">
                                <i class="fa fa-arrow-circle-right"></i>
                                <a href="{{route('loaisanpham',$t_h->id)}}"> {{$t_h->name}} </a>
                            </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            
                <div class="col-md-9">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                @foreach( $slides as $sl )
                                    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                                @endforeach
                              
                            </ol>
                            
                            <div class="carousel-inner" role="listbox">
                                @foreach( $slides as $sl )
                                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                        <img class="Carousel_Image1" src="{{ $sl->link }}" alt="">
                                        
                                    </div>
                                @endforeach
                            </div>

                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a>
                          </div>
              </div>
          </div>
      </div>
<div class="Product container mb-5">
        <div class="row mb-3">
              <div class="col-md-12">
                  <h1 class="text-danger"> Sản phẩm mới </h1>
                  <h5> Tìm thấy {{count($new_products)}} sản phẩm </h5>
              </div>
        </div>
        <div class="row mb-3">
            @foreach($new_products as $index)
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