@extends('layout.profile')

@section('viewProfile')

    <h3 class="profile-username text-center"> {{ $user->name }}  {{ $user->familyname }} </h3>

    <p class="text-muted text-center">eMail: {{ $user->email }}</p>

    <ul class="list-group list-group-unbordered">
        <li class="list-group-item">
            <b>Дата регистрации</b> <a class="pull-right"> {{ $user->date }} </a>
        </li>
        <li class="list-group-item">
            <b>Пол</b> <a class="pull-right"> {{ $gender }} </a>
        </li>
    </ul>

        <a href="{{ asset('profile/edit') }}" class="btn btn-primary btn-block">
            <b>Изменить данные</b>
        </a>

@endsection
