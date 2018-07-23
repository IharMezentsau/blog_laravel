@extends('layout.site')
@extends('layout.menu')
@extends('layout.regForm')
@extends('layout.authMenu')

@section('blog')

    @auth

        <form action="{{ route('newMessage') }}" class="form-horizontal" name="sendMessage" method="post">
            <div class="input-group">
                <input class="form-control input-group-lg" autocomplete="off" name="newMessage" type="text" placeholder="Напишите сообщение">
                <span class="input-group-btn">
                    <button type="submit"  class="btn btn-group-lg btn-primary btn-flat" name="message_id" >
                        <i class="fas fa-share-square"></i>
                    </button>
                </span>
            </div>
            @csrf
        </form>
    @endauth

    @foreach($views as $view)
        {!! $view !!}
    @endforeach

    @include('layout.pagination')

@endsection


