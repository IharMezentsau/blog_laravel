@section('regForm')

    <div class="modal fade" id="registration">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Регистрация нового пользователя</h4>
                </div>
                <div class="modal-body">
                    <form action="{{ route('register') }}" aria-label="{{ __('Register') }}" id="formReg" method="post">
                        @csrf
                        <div class="form-group">
                            <input id="email" type="email" placeholder="Введите E-mail *"  class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                   name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="name" placeholder="Введите Имя *" value="{{ old('name') }}">

                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input placeholder="Введите пароль *" id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input placeholder="Подтвердите пароль *" id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" id="regBtn" value="submit" name="submit" class="btn btn-primary">
                                <i class="fas fa-address-card"></i> Зарегистрироваться
                            </button>
                        </div>
                    </form>
                </div>

                <div class="modal-body">
                    <p style="color: red">* Все поля обязательные для заполнения</p>
                </div>
            </div>
        </div>
    </div>

@endsection