@section('authMenu')

<li>
    <div class="collapse navbar-collapse" id="responsive-menu">
        <form action="{{ route('login') }}" aria-label="{{ __('Login') }}" class="navbar-form navbar-right" method="post">
            @csrf
            <div class="form-group">
                <input id="email" type="email" placeholder="E-mail" class="form-control"
                       name="email" value="{{ old('email') }}" required autofocus>
            </div>
            <div class="form-group">
                <input id="password" placeholder="Пароль"  type="password" class="form-control" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary form-control">
                <i class="fas fa-sign-in-alt"></i> ВОЙТИ
            </button>
            <button type="button" data-toggle="modal" data-tooltip="tooltip" data-target="#registration"
                    class="btn btn-info form-control" title="Регистрация" data-placement="bottom">
                <i class="far fa-address-card"></i>
            </button>
        </form>
    </div>
</li>

@endsection