

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
    <form action="{{route('phones.create')}}">
        <button class="btn btn-danger"> Tạo thuê bao mới </button>
    </form>
</div>

<div class="container">
    <h1 class="text-center"> Phones </h1>
    <table class="table table-hover table-bordered text-center">
        <thead>
            <tr>
                <th> # </th>
                <th> Number </th>
                <th> User_id </th>
                <th> Action </th>
            </tr>
        </thead>
        <tbody>
                @foreach($phones as $phone)
                    <tr>
                        <td> {{$phone->id}} </td>
                        <td> {{$phone->number}} </td>
                        <td> {{$phone->user_id}} </td>
                        
                        <td class="d-flex flex-row justify-content-center">
                            <form action="{{route('phones.show', $phone->id)}}" method="GET">
                                <button class='btn btn-danger ml-2'> SHOW </button>
                            </form>
                            
                            <form action="{{route('phones.edit', $phone->id)}}" method="GET">
                                <button class='btn btn-success ml-2'> EDIT </button> 
                            </form>
                            

                            <form action="{{route('phones.destroy', $phone->id)}}" method="POST">
                                {{csrf_field()}}
                                <input type='hidden' value='DELETE' name='_method'>
                                <button type='submit' class='btn btn-warning ml-2'> DELETE </button>
                            </form>
                                
                        </td>
                    </tr>
                @endforeach
          
        </tbody>
    </table>
</div>


</body>
</html>