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
    <div class="row">
            <div class="col-12">
                <form action="{{route('postcomment.update', $comment->id)}}" method="POST">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="PUT" />

                    Comment: <input type="text" id="comment" placeholder="Comment" name="comment" value="{{$comment->comment}}">

                    Post_id: <input type="text" id="post_id" placeholder="Post_id" name="post_id" value="{{$comment->post_id}}">

                    <button type="submit"> SAVE
                    </button>
                    
                </form>
            </div>
    </div>
</div>


</body>
</html>