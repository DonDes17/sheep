

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Super Laravel</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            @if(Auth::check())
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{route('spending.index')}}">Liste des dépenses <span class="sr-only">(current)</span></a></li>
                <li><a href="{{route('spending.create')}}">Ajouter une dépense</a>
                </li>
                <li><a href="{{route('user.index')}}">User</a></li>
                <li><a href="{{route('part')}}">Balance</a></li>
                <li style="color: #ffffff; font-size: 18px; padding-top: 13px;padding-left: 50px;"> Total :{{$total}} &euro;</li>
            </ul>

            <ul class="nav navbar-nav navbar-right">

                {{-- --}}
                <!-- Authentication Links -->
                    @guest
                         <li><a class="button is-primary" href="{{ route('login') }}"> <i class="fa fa-user-circle"></i>Login </a></li>
                         <li> <a class="button is-info" href="{{ route('register') }}"><i class="fa fa-user-circle"></i>Register </a></li>
                    @else
                        <li><a class="button is-primary" href="#"> <i class="fa fa-user-circle"></i>{{ Auth::user()->name }}</a></li>
                        <li><a class="button is-danger" href="{{ route('logout') }}"
                               onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out"></i>logout
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </a></li>
                    @endguest
            </ul>
            @endif
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>