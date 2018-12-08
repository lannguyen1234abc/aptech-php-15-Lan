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
            <div class="col-md-9 offset-md-3">
                <h2> Sản phẩm mới </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="card Product_LoaiSP">
                    <div class="card-header bg-success">
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
                </div>
            </div>
        </div>
    </div>
    <div class="container mb-5">
        <div class="row">
            <div class="col-md-9 offset-md-3">
                <h2> Sản phẩm nổi bật </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9 offset-md-3">
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
                </div>
            </div>
        </div>
    </div>
@endsection