@section('profileMenu')

    <li class="dropdown user user-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="#" class="user-image" alt="User Image">
            <span class="hidden-xs">#</span>
        </a>
        <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
                <img src="#" class="img-circle" alt="User Image">
                <p>#</p>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
                <!---->
                <div class="pull-left">
                    <a href="{{ route('index') }}" class="btn btn-default"
                       data-tooltip="tooltip" title="Вход в личный кабинет"><i class="fas fa-user"></i> Профиль</a>
                </div>
                <div class="pull-right">
                    <form action="{{ route('index') }}" name="authorisation" id="responsive-menu" method="post">
                        <button name="submit" class="btn btn-danger" type="submit" value="logOut">
                            <i class="fas fa-door-closed"></i> ВЫЙТИ
                        </button>
                        <input name="authorisation" class="form-control" type="hidden" value="logout">
                        {{csrf_field()}}
                    </form>
                </div>
                <!--  -->
            </li>
        </ul>
    </li>

@endsection