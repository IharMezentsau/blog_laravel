@section('menu')

    <header class="main-header">
        <!-- Header Navbar: style can be found in header.less -->

        <nav class="navbar navbar-inverse navbar-static-top">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
                    <span class="sr-only">Открыть навигацию</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('index') }}">Б</a>
            </div>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    @guest
                        @yield('authMenu')
                    @else
                        {!! $viewProfileMenu !!}
                    @endguest
                    <!-- Control Sidebar Toggle Button -->
                </ul>
            </div>
        </nav>
    </header>

@endsection

