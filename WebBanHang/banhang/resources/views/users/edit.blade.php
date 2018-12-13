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
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-5">
                <form action="{{route('users.update', $user->id)}}" method="POST">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="PUT" />
                    <div class="mb-3 d-flex flex-column">
                        <lable> Name </lable>
                        <input type="text" id="name" placeholder="Name" name="name" value="{{$user->name}}">
                    </div>
                    
                    <div class="mb-3 d-flex flex-column">
                        <lable> Email </lable>
                        <input type="email" id="email" placeholder="Email" name="email" value="{{$user->email}}">
                    </div>

                    <div class="mb-3 d-flex flex-column">
                        <lable> Phone_number </lable>
                        <input type="text" id="phone_number" placeholder="Phone_number" name="phone_number" value="{{$user->phone_number}}">
                    </div>
                    <div class="mb-3 d-flex flex-column">
                        <lable> Password </lable>
                        <input type="password" id="password" placeholder="Password" name="password" value="{{$user->password}}">
                    </div>
                    <div class="mb-3 d-flex flex-column">
                        <lable> Remember_token </lable>
                        <input type="password" id="remember_token" placeholder="Remember_token" name="remember_token" value="{{$user->remember_token}}">
                    </div>

                    <button type="submit"> SAVE
                    </button>
                    
                </form>
            </div>
        </div>
    </div>
</body>
</html>