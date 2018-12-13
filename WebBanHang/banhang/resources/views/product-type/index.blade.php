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
            <div class="col-12 d-flex justify-content-between">
                <form action="{{route('producttype.create')}}">
                    <button class="btn btn-outline-danger"> CREATE </button>
                </form>
            </div>
        </div>
    </div>
    
<div class="container">
    
    <table class="table table-hover table-bordered text-center">
        <thead>
            <tr>
                <th> # </th>
                <th> Name </th>
                <th> Description </th>
                <th> Created_at </th>
                <th> Updated_at </th>
                <th> Action </th>
            </tr>
        </thead>
        <tbody>
                @foreach($types as $type)
                    <tr>
                        <td> {{$type->id}} </td>
                        <td> {{$type->name}} </td>
                        <td> {{$type->description}} </td>
                        <td> {{$type->created_at}} </td>
                        <td> {{$type->updated_at}} </td>
                        
                        <td class="d-flex flex-row justify-content-center">
                            <form action="{{route('producttype.show', $type->id)}}" method="GET">
                                <button class='btn btn-danger ml-2'> SHOW </button>
                            </form>
                            
                            <form action="{{route('producttype.edit', $type->id)}}" method="GET">
                                <button class='btn btn-success ml-2'> EDIT </button> 
                            </form>
                            

                            <form action="{{route('producttype.destroy', $type->id)}}" method="POST">
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