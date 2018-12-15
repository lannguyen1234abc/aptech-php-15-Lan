@extends('customer.layout.master')

@section('content')
  <div class="container Button_Dangki mb-5">
        <div class="row">
            <div class="col-md-6 offset-md-3 d-flex justify-content-center align-items-center flex-column Border-form">
                <h1 class="text-uppercase mt-3 text-success"><font face="Comic sans MS" size="10"> register </font></h1>
                <form class=" d-flex flex-column mb-5 mt-5">
                    <div class="form-group Input_pom-agile d-flex  flex-row">
                        <div class="mr-4">
                            <span class="icon1 "> <i class="fa fa-user" aria-hidden="true"></i></span>
                            <input type="name" class="form-control user"  placeholder="Enter name">
                        </div>
                            
                    </div>
                    <div class="form-group Input_pom-agile d-flex  flex-row" >
                        <div class="mr-4">
                            <span class="icon2"><i class="fas fa-envelope"></i></span>
                            <input type="email" class="form-control" id="exampleInputAddress" placeholder="Enter email ">
                        </div>
                    
                    </div>
                    <div class="form-group Input_pom-agile d-flex  flex-row">
                        <div class="mr-4">
                            <span class="icon2"><i class="fas fa-lock-open"></i></span>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group Input_pom-agile d-flex  flex-row">
                        <div class="mr-4">
                            <span class="icon2"><i class="fas fa-sync-alt"></i></span>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password">
                        </div>
                        
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        <button type="submit" class="btn btn-success">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection