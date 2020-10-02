<div class="card">
    <div class="card-header">Sidebar</div>
    <div class="card-body">

                @include('flash::message')

        <ul>
            <li><a href="{{ route('admin') }}">Dashboard</a></li>
            <li><a href="{{ route('viewListPortfolios') }}">Portfolios</a></li>
            <li><a href="{{ route('viewListArticles') }}">Article</a></li>
            <li><a href="{{ route('viewAboutMe') }}">About Me</a></li>
            <li><a href="{{ route('viewMessages') }}">Messages</a></li>
            <li><a href="#">Posts</a></li>
            <li><a href="#">Settings</a></li>
        </ul>
    </div>
</div>
