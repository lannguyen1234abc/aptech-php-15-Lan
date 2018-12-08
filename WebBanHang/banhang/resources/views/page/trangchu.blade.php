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
                            @foreach($producttypes as $index)
                            <li class="list-group-item">
                                <i class="fa fa-arrow-circle-right"></i>
                                <a href=""> {{$index->name}} </a>
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
                  <h1 class="text-danger text-center"> Sản phẩm </h1>
              </div>
          </div>
          <div class="row mb-3">
              <div class="col-md-12">
                  <div class="card-deck">
                      <div class="card">
                          <div class="Product_Image1"></div>
                          <div class="card-body">
                              <h5 class="card-title"> Bánh dâu tây </h5>
                              <p class="card-text"> $ 100.000 </p>
                              <button class="btn btn-outline-primary"> Chi tiết </button>
                          </div>
                      </div>
                      <div class="card">
                            <div class="Product_Image2"></div>
                            <div class="card-body">
                                <h5 class="card-title"> Bánh dâu tây </h5>
                                <p class="card-text"> $ 100.000 </p>
                                <button class="btn btn-outline-primary"> Chi tiết </button>
                            </div>
                      </div>
                      <div class="card">
                            <div class="Product_Image3"></div>
                            <div class="card-body">
                                <h5 class="card-title"> Bánh dâu tây </h5>
                                <p class="card-text"> $ 100.000 </p>
                                <button class="btn btn-outline-primary"> Chi tiết </button>
                            </div>
                      </div>
                      <div class="card">
                            <div class="Product_Image4"></div>
                            <div class="card-body">
                                <h5 class="card-title"> Bánh dâu tây </h5>
                                <p class="card-text"> $ 100.000 </p>
                                <button class="btn btn-outline-primary"> Chi tiết </button>
                            </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="row">
                <div class="col-md-12">
                    <div class="card-deck">
                        <div class="card">
                            <div class="Product_Image5"></div>
                            <div class="card-body">
                                <h5 class="card-title"> Bánh dâu tây </h5>
                                <p class="card-text"> $ 100.000 </p>
                                <button class="btn btn-outline-primary"> Chi tiết </button>
                            </div>
                        </div>
                        <div class="card">
                              <div class="Product_Image6"></div>
                              <div class="card-body">
                                  <h5 class="card-title"> Bánh dâu tây </h5>
                                  <p class="card-text"> $ 100.000 </p>
                                  <button class="btn btn-outline-primary"> Chi tiết </button>
                              </div>
                        </div>
                        <div class="card">
                              <div class="Product_Image7"></div>
                              <div class="card-body">
                                  <h5 class="card-title"> Bánh dâu tây </h5>
                                  <p class="card-text"> $ 100.000 </p>
                                  <button class="btn btn-outline-primary"> Chi tiết </button>
                              </div>
                        </div>
                        <div class="card">
                              <div class="Product_Image8"></div>
                              <div class="card-body">
                                  <h5 class="card-title"> Bánh dâu tây </h5>
                                  <p class="card-text"> $ 100.000 </p>
                                  <button class="btn btn-outline-primary"> Chi tiết </button>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
      </div>
@endsection