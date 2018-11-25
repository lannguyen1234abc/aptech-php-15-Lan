

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
                <th> # </th>
                <th> Title </th>
                <th> Name</th>
            </tr>
        </thead>
        <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td> {{$post->id}} </td>
                        <td> {{$post->title}} </td>
                        <td> 
                        @foreach($post->categories as $category)
                        {{$category->name}}
                        @endforeach
                         </td>
                    </tr>
                @endforeach

        </tbody>
    </table>
</div>


</body>
</html>

