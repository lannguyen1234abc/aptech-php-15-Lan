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
                <form action="{{route('products.create')}}">
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
                <th> Producttype_id </th>
                <th> Price </th>
                <th> Promotion_price </th>
                <th> Image </th>
                <th> Unit </th>
                <th> New </th>
                <th> Action </th>
            </tr>
        </thead>
        <tbody>
                @foreach($products as $product)
                    <tr>
                        <td> {{$product->id}} </td>
                        <td> {{$product->name}} </td>
                        <td> {{$product->producttype_id}} </td>
                        <td> {{$product->price}} </td>
                        <td> {{$product->promotion_price}} </td>
                        <td> {{$product->image}} </td>
                        <td> {{$product->unit}} </td>
                        <td> {{$product->new}} </td>
                        
                        
                        <td class="d-flex flex-row justify-content-center">
                            <form action="{{route('products.show', $product->id)}}" method="GET">
                                <button class='btn btn-danger ml-2'> SHOW </button>
                            </form>
                            
                            <form action="{{route('products.edit', $product->id)}}" method="GET">
                                <button class='btn btn-success ml-2'> EDIT </button> 
                            </form>
                            

                            <form action="{{route('products.destroy', $product->id)}}" method="POST">
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