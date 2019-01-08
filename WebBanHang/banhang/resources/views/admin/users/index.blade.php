@extends('admin.home')
@section('content-right')

<div class="container-fluid Admin_Size_content">
    <h1 class="text-center"> Users </h1>
    <table class="table table-hover table-bordered text-center ">
        <thead>
            <tr>
                <th> # </th>
                <th> Name </th>
                <th> Email </th>
                <th> Phone_number </th>
                
                <th> Action </th>
            </tr>
        </thead>
        <tbody>
                @foreach($users as $user)
                    <tr>
                        <td> {{$user->id}} </td>
                        <td> {{$user->name}} </td>
                        <td> {{$user->email}} </td>
                        <td> {{$user->phone_number}} </td>
                        
                        
                        <td >
                        <div class="d-flex flex-row justify-content-center">    
                            <form action="{{route('users.edit', $user->id)}}" method="GET">
                                <button class='btn btn-success ml-2'> EDIT </button> 
                            </form>
                            
                            <form action="{{route('users.destroy', $user->id)}}" method="POST">
                                {{csrf_field()}}
                                <input type='hidden' value='DELETE' name='_method'>
                                <button type='submit' class='btn btn-warning ml-2'> DELETE </button>
                            </form>
                        </div>        
                        </td>
                    </tr>
                @endforeach
          
        </tbody>
    </table>
    <div class="row mt-5">
                    <div class="col-md-12 d-flex justify-content-center display-5">
                        {{$users->links("pagination::bootstrap-4")}}
                    </div>
                </div>
</div>
@endsection