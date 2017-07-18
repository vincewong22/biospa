<nav class="navbar navbar-toggleable navbar-light bg-faded">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#collapsingNavbarXs">
        <span class="navbar-toggler-icon"></span>
    </button>
    <p class="navbar-brand logo_shadow" href="/">Bio Architect</p>
    <div class="navbar-collapse collapse" id="collapsingNavbarXs">
        <ul class="navbar-nav">
            <li class="nav-item">


            {{--</li>--}}
            {{--<li class="nav-item">--}}
            {{--<a class="nav-link" href="{{ route('about') }}">About</a>--}}
            {{--</li>--}}
            {{--<li class="nav-item">--}}
            {{--<a class="nav-link" href="{{ route('portfolio') }}">Portfolio</a>--}}
            {{--</li>--}}
            {{--<li class="nav-item">--}}
            {{--<a class="nav-link" href="{{ route('contact') }}">Contact</a>--}}
            {{--</li>--}}
            {{--<li class="nav-item">--}}
            {{--<a class="nav-link" href="{{ route('notes_index') }}">Notebook</a>--}}
            {{--</li>--}}

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown04" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">会诊 [Consultation]</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                    <a class="dropdown-item" href="{{url('/consultation/create')}}">新咨询 [New Consultation]</a>
                    <a class="dropdown-item" href="{{url('/consultation')}}">搜索咨询 [Search Consultation]</a>
                </div>
            </li>

            <a class="nav-link" href="{{ route('treatment') }}">Treatments</a>

             <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown04" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">Administrator</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                    <a class="dropdown-item" href="{{url('/')}}">Create Questions</a>
                   <a class="dropdown-item" href="{{url('/')}}">Edit Questions</a>
                </div>
            </li>
        </ul>
    </div>
    </div>
</nav>