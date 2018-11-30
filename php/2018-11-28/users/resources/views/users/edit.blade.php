
@extends('layout.master')

@section('action')
    <h4> CREATE AN USERS </h4>
@endsection

@section('content')
    <form action="{{route('users.update', $user->id)}}" method="POST">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="PUT" />

        Name: <input type="text" id="name" placeholder="Name" name="name" value="{{$user->name}}">

        Address: <input type="text" id="address" placeholder="Address" name="address" value="{{$user->address}}">

        <button type="submit"> SAVE
        </button>                   
    </form>
@endsection