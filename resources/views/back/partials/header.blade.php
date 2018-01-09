

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
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{route('spending.index')}}">Liste des dépenses <span class="sr-only">(current)</span></a></li>
                <li><a href="{{route('spending.create')}}">Ajouter une dépense</a>
                </li>
                <li><a href="{{route('user.index')}}">User</a></li>
                <li><a href="{{route('part')}}">Balance</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li style="color: #ffffff; font-size: 18px; padding-top: 13px;"> Total :{{$total}} &euro;</li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>