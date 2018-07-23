@extends('layout.site')
@extends('layout.menu')

@section('profile')
    <div class="conteiner">
        <!-- Profile Image -->
        <div class="box box-primary">
            <div class="box-body box-profile">
                <img class="profile-user-img img-responsive img-circle" src="{{ asset($url) }}" alt="User profile picture">';

                    @yield('viewProfile')
                    @yield('editProfile')

                </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->
@endsection