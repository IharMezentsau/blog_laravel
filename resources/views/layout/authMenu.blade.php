@section('authMenu')

<li>
    <div class="collapse navbar-collapse" id="responsive-menu">
        <form action="index.php" name="authorisation" class="navbar-form navbar-right"
              id="responsive-menu" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="userName" placeholder="E-mail" value="">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="userPassword" placeholder="Пароль" value="">
            </div>
            <button type="submit" class="btn btn-primary form-control">
                <i class="fas fa-sign-in-alt"></i> ВОЙТИ
            </button>
            <button type="button" data-toggle="modal" data-tooltip="tooltip" data-target="#registration"
                    class="btn btn-info form-control" title="Регистрация" data-placement="bottom">
                <i class="far fa-address-card"></i>
            </button>
            {{csrf_field()}}
        </form>
    </div>
</li>

@endsection