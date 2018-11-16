


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
   
    <table class="table table-hover table-bordered text-center">
        <thead>
            <tr>
                <th> Number </th>
                <th> User_id </th>
                <th> Name </th>
            </tr>
        </thead>
        <tbody>
        
                @foreach($users as $user)
                    <tr>
                        <td> {{$user->name}} </td>
                        <td> {{$user->p_id}} </td>
                        <td> {{$user->passport->number}} </td>
                        
                    </tr>
                @endforeach
          
        </tbody>
    </table>
</div>


</body>
</html>