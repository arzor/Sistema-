@foreach($users as $user)
    <ul>
        <li>{!! $user->email !!}</li>
    </ul>
@endforeach