<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <base href="{{asset('')}}"> 

    <link rel="stylesheet" href="{{asset('banhang/asset/style.css')}}">
   
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>
      
      <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex flex-row ">
                    <a href="{{route('trangchu')}}" class="text-dark"> <p class="pr-2"><i class="fas fa-home"></i> </p> </a> 

                    <p class="pr-2"> <i class="fas fa-chevron-right"></i> </p> 

                     <p class="pr-2"> Giỏ hàng </p> 

                </div>
            </div>
        </div>
        <div class="row border-bottom">
            <div class="col-md-12">
                <h2 class="text-center"> Giỏ hàng </h2>
                <table class="table mt-3 ">
                    <thead class="thead-light">
                        <tr>
                            <th class="image"> Image </th>
                            <th class="product"> Product </th>
                            <th class="price"> Price </th>
                            <th class="quantity"> Quantity </th>
                            <th class="total"> Total </th>
                            <th class="remove"> Remove </th>
                        </tr>
                    </thead>
                    <tbody>
                    
                        <tr>
                            <td> 
                                <img src="http://sotaynauan.com/wp-content/uploads/2015/04/huong-dan-lam-banh-flan-chocolate-thom-ngon-dep-mat.jpg" alt="" style="width:300px;height:200px;">
                            </td>
                            <td> 
                                Bánh ngọt
                            </td>
                            <td> 
                                ${{number_format(20000)}}
                            </td>
                            <td>
                                <select name="product-qty" id="product-qty">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
                            </td>
                            <td>
                                ${{number_format(20000)}}
                            </td>
                            <td>
                                <a href="#" class="remove" title="Remove this item"><i class="far fa-trash-alt "></i></a>
                            </td>
                        </tr>
                   
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-4 offset-md-8">
                <div class="card">
                    <div class="card-header text-center ">
                        <h4>Thanh toán</h4>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"> 
                            <b class="pr-3">SubTotal:</b> ${{number_format(20000)}} 
                        </li>
                        <li class="list-group-item"> 
                            <b class="pr-3">Shipping:</b> Free Shipping 
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row mt-3 mb-5">
            <div class="col-md-12 d-flex justify-content-center">
                <button class="btn btn-outline-primary text-capitalize"> Đặt hàng </button>
            </div>
        </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>