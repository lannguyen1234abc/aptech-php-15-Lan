<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row mt-3 mb-3">
            <div class="col-3 d-flex justify-content-end align-items-center"> 
                <button class="btn btn-outline-danger"> Home </button>
            </div>
            <div class="col-9">
                <h1> APTECH PHP LARAVEL CRUD </A></h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mb-3">
            <div class="col-12">
                @yield('action')
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                @yield('content')
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-3 mb-3">
            <div class="col-12 d-flex justify-content-between">
                <h4> APTECH PHP LARAVEL CRUD </h4>
                <form action="{{route('users.create')}}">
                    <button class="btn btn-outline-danger"> CREATE AN USER </button>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>