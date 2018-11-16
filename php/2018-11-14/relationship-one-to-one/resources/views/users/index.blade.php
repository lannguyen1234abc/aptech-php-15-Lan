@foreach($users as $user)
<div>
    {{$user->name}} - {{$user->p_id}} - {{$user->passport->number}}
</div>
@endforeach

