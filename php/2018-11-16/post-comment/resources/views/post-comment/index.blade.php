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

<div class="container mt-3 mb-3">
    <form action="{{route('posts.create')}}">
        <button class="btn btn-danger"> Tạo mới người dùng </button>
    </form>
</div>
<div class="container">
   
    <table class="table table-hover table-bordered text-center">
        <thead>
            <tr>
                <th> # </th>
                <th> Comment </th>
                <th> Post_id </th>
                <th> Title </th>
                <th> Description </th>
                <th> Content </th>
                <th> Action </th>
            </tr>
        </thead>
        <tbody>
                @foreach($comments as $comment)
                    <tr>
                        <td> {{$comment->id}} </td>
                        <td> {{$comment->comment}} </td>
                        <td> {{$comment->post_id}} </td>
                        <td> {{$comment->post->title}} </td>
                        <td> {{$comment->post->description}} </td>
                        <td> {{$comment->post->content}} </td>
                       
                        <td class="d-flex flex-row justify-content-center">
                            <form action="{{route('posts.show', $comment->id)}}" method="GET">
                                <button class='btn btn-danger ml-2'> SHOW </button>
                            </form>
                            
                            <form action="{{route('posts.edit', $comment->id)}}" method="GET">
                                <button class='btn btn-success ml-2'> EDIT </button> 
                            </form>
                            

                            <form action="{{route('posts.destroy', $comment->id)}}" method="POST">
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