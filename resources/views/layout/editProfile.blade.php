@extends('layout.profile')

@section('editProfile')

    <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{ asset('profile/update') }}">
        @csrf
        <input type="file" accept="image/*" name="avatar" id="selectedFile" style="display: none;" >
        <ul class="list-group list-group-unbordered">
            <li class="list-group-item">
                <div class="btn-group btn-group-justified">
                    {!! $deleteAvatar !!}
                </div>
                <p class="text-muted text-center" id="fileNameLoad"></p>
            </li>
        </ul>

        <h3 class="profile-username text-center">{{ $user->name }} {{ $user->familyname }}</h3>
        <p class="text-muted text-center">eMail:  {{ $user->email }} </p>

        <div class="box-body">
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Имя</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" id="name" placeholder="{{ $user->name }}">
                </div>
            </div>
            <div class="form-group">
                <label for="familyname" class="col-sm-2 control-label">Фамилия</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="familyname" id="familyname" placeholder="{{ $user->familyname }}">
                </div>
            </div>
            <div class="form-group">
                <label for="gender" class="col-sm-2 control-label">Пол</label>
                <div class="col-sm-10">
                    <select name="gender" class="form-control" id="gender" size="3">
                        @foreach($selectOptions as $selectOption)
                            {!! $selectOption !!}
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <input type="hidden" name="id" value="{{ $user->id }}">

        <!-- /.box-body -->
        <div class="box-footer">
            <a href="{{ asset('profile') }}" class="btn btn-default">Отмена</a>
            <button type="submit" class="btn btn-info pull-right">
                <i class="fas fa-file-upload"></i> Обновить данные
            </button>
        </div>
        <!-- /.box-footer -->

    </form>

@endsection