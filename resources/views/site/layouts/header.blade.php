<header class="header bg-light border-bottom mb-5">
    <div class="header-inner">
        <nav class="navbar navbar-main navbar-expand-lg navbar-theme-primary headroom navbar-light">
            <div class="container">
            <a class="navbar-brand shadow-convex-sm py-2 px-3 border mr-lg-4" href="{{ route('homePage') }}"><img class="" src="img/logo.png" alt="ehsan ghaffarii web developer logo"></a>
                <div class="collapse navbar-collapse offset" id="navbar_global">
                    <div class="navbar-collapse-header">
                        <div class="row">
                            <div class="col-6 collapse-brand">
                                <a href="{{ route('homePage') }}" class="navbar-brand shadow-soft py-2 px-3 rounded border border-light">
                                    <img src="img/logo.png" alt="Themesberg logo">
                                </a>
                            </div>
                            <div class="col-6 collapse-close">
                                <a href="#navbar_global" class="fas fa-times" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" title="close" aria-label="Toggle navigation"></a>
                            </div>
                        </div>
                    </div>
                    <ul class="nav navbar-nav menu_nav justify-content-end">
                        <li class="nav-item active"><a class="nav-link" href="{{ route('homePage') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('viewArticles') }}">Articles</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('viewContactPage') }}">Contact</a></li>
                        @auth
                        <li class="nav-item"><a class="nav-link" href="{{ route('admin') }}">Admin</a></li>
                        @endauth
                    </ul>
                </div>
                <div class="d-flex align-items-center">
                    <a href="https://github.com/ehsanghaffarii/laravel-neumorphism" target="_blank" class="btn btn-primary text-secondary border mr-3"><i class="fa fa-github mr-2"></i>github Source</a>
                    <button class="navbar-toggler ml-2" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
        </nav>
    </div>
</header>
