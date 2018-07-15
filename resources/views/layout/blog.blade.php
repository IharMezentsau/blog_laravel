@extends('layout.site')
@extends('layout.menu')
@extends('layout.regForm')
@extends('layout.profileMenu')
@extends('layout.authMenu')
@extends('layout.sendMessage')
@extends('layout.sendAnswer')

@section('blog')

    @foreach($messages as $message)
        {{$message->name}}
    @endforeach

@endsection
