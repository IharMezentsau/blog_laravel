@extends('layout.site')
@extends('layout.menu')
@extends('layout.regForm')
@extends('layout.profileMenu')
@extends('layout.authMenu')
@extends('layout.sendMessage')

@section('blog')
@foreach($widgets)
    @widget('message')
@endforeach
@endsection
