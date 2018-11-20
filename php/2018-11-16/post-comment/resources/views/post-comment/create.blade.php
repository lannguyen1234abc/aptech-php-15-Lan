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
            <div class="col-12">
                <form action="{{route('posts.store')}}" method="POST">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="POST" />
                    
                    Comment: <input type="text" id="comment" placeholder="Comment" name="comment">

                    Post_id: <input type="int" id="post_id" placeholder="Post_id" name="post_id">

                    Title: <input type="text" id="title" placeholder="Title" name="title" >

                    Description: <input type="text" id="description" placeholder="Description" name="description">

                    Content: <input type="text" id="content" placeholder="Content" name="content">
                    <button type="submit"> CREATE
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>