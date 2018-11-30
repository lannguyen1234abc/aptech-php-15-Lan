@extends('layout.master')

@section('action')
    <h4> SHOW AN USERS </h4>
@endsection

@section('content')
    <table class="table table-hover table-bordered text-center">
        <thead>
            <tr>
                <th> ID </th>
                <th> Name </th>
                <th> Address </th>
                <th> Created_at </th>
                <th> Updated_at </th>
                <th> Action </th>
            </tr>
        </thead>
        <tbody>
            
                <tr>
                    <td> {{$user->id}} </td>
                    <td> {{$user->name}} </td>
                    <td> {{$user->address}} </td>
                    <td> {{$user->created_at}} </td>
                    <td> {{$user->updated_at}} </td>
                    <td class="d-flex flex-row justify-content-center">
                        <form action="{{route('users.edit', $user->id)}}" method="GET">
                            <button class='btn btn-success ml-2'> EDIT </button> 
                        </form>
                            
                        <form action="{{route('users.destroy', $user->id)}}" method="POST">
                            {{csrf_field()}}
                            <input type='hidden' value='DELETE' name='_method'>
                            <button type='submit' class='btn btn-warning ml-2'> DELETE </button>
                        </form>
                                
                    </td>
                </tr>
               
          
        </tbody>
    </table>
@endsection