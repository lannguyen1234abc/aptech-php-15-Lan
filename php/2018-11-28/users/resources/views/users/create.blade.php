@extends('layout.master')

@section('action')
    <h4> CREATE PAGE </h4>
@endsection

@section('content')
    <form action="{{route('users.store')}}" method="POST">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="POST" />
                    <div class="mb-3 d-flex flex-column">
                        <lable> Name </lable>
                        <input type="text" id="name" placeholder="Name" name="name">
                    </div>
                    <div class="mb-3 d-flex flex-column">
                        <lable> Address </lable>
                        <input type="text" id="address" placeholder="Address" name="address">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-danger"> CREATE
                        </button>
                    </div>
                </form>
@endsection