@extends('layout.master')

@section('content')
  <div class="container Button_Dangki mb-5">
    <div class="row ">
      <div class="col-6 offset-3 d-flex justify-content-center align-items-center flex-column Border-form">
        <h1 class="text-uppercase mt-5 text-success"><font face="Comic sans MS" size="10">sign in </font></h1>
        <form class=" d-flex flex-column">
          <div class="form-group Input_pom-agile">
            <span class="icon1 "> <i class="fa fa-user" aria-hidden="true"></i></span>
            <input type="email" class="form-control user" aria-describedby="emailHelp" placeholder="Enter email"
                          required="">
          </div>
          <div class="form-group Input_pom-agile">
            <span class="icon2"><i class="fas fa-lock-open"></i></span>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-success mt-3">Sign in</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  @endsection   