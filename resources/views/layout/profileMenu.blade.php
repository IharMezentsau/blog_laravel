<li class="dropdown user user-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <img src="{{ asset($url) }}" class="user-image" alt="User Image">
        <span class="hidden-xs">{{ $user->name }} {{ $user->familyname }}</span>
    </a>
    <ul class="dropdown-menu">
        <!-- User image -->
        <li class="user-header">
            <img src="{{ asset($url) }}" class="img-circle" alt="User Image">
            <p>{{ $user->name }} {{ $user->familyname }}</p>
        </li>
        <!-- Menu Footer-->
        <li class="user-footer">
            <!---->
            <div class="pull-left">
                <a href="{{ route('profile') }}" class="btn btn-default"
                   data-tooltip="tooltip" title="Вход в личный кабинет"><i class="fas fa-user"></i> Профиль</a>
            </div>
            <div class="pull-right">
                <a class="dropdown-item btn btn-danger" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                    <i class="fas fa-door-closed"></i> ВЫЙТИ
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                </form>
            </div>
            <!--  -->
        </li>
    </ul>
</li>
