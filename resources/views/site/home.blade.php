@extends('site.layouts.app')

@section('content')
<div class="container pt-5">
    <!-- About me -->
    <section class="container mt-4">
        <div class="row border-light shadow rounded-lg p-5">
            
            <div class="col-md-3">
                <img class="card-img rounded-lg" src="{{ asset('img/info-img.jpg')}}">
            </div>
            <div class="col-md-8 border-left">
                <h1>Hi, I'm Ehsan</h1>
                <h3>Welcome to my personal blog</h3>
                <p> This is my home page on World Wide Web...</p>
                <p>Have a question or advice?</p>
                <a class="btn btn-primary text-secondary border" href="tel:09195062188">Call me now!</a>
            </div>
        </div>
    </section>
    <!-- portfolio Section -->
    <section class="section mt-4">
            <div class="section-title d-flex p-3">
                <i class="fa fa-th-large fa-2x px-2"></i>
                <h3> Here are some examples of projects I have done ... </h3>
            </div>
            <div class="row mb-5">
                @foreach($portfolios as $portfolio)
                    <div class="col-12 col-md-6 col-lg-4 mb-5">
                    <div class="card bg-primary border-light shadow-soft m-2">
                        <img class="card-img-top rounded-top" height="200" src="{{ asset('portfolios/' .$portfolio->image) }}" alt="Themesberg office">
                        <div class="card-body">
                            <a href="{{ route('viewPortfolioPage', ['portfolio' => $portfolio]) }}">
                            <h3 class="h5 card-title mt-3">{{ $portfolio->title }}</h3></a>
                            <p class="card-text">{{ $portfolio->client }}</p>
                            <a href="{{ route('viewPortfolioPage', ['portfolio' => $portfolio]) }}" class="btn btn-primary btn-sm border">Learn More</a>
                        </div>
                    </div>
                    </div>
                    @endforeach
                </div>
        </div>
    </section>
    <!-- source code -->
    <section class="section">
        <div class="container">
            <div class="section-title d-flex p-3">
                <i class="fa fa-star fa-2x px-2"></i><h3> My Open Source Project</h3>
            </div>
            <div class="card border-light shadow w-50">
                <div class="row no-gutter">
                    <div class="col-md-4">
                        <img class="card-img p-2" src="img/{{ settings('image') }}" alt="">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body p-1">
                            <div class="card-title m-1">
                                <h5>{{ settings('title') }}</h5>
                            </div>
                            <div class="wow fadeIn" data-wow-duration=".8s">
                                <p>
                                    {{ settings('description') }}
                                </p>
                            </div>
                            <a href="#" class="btn btn-primary border">More Info</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Newsletter me -->
    <section class="section">
        <div class="container">
            <div class="p-3 rounded-lg bg-light">
                <div class="row justify-content-center p-3">
                    <div class="main-title">
                        <h1>Join Our Newsletter</h1>
                        <p>join to newsletter to receive top notifications </p>
                    </div>
                </div>
                <div class="row newsletter_form justify-content-center">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="d-flex flex-row" id="mc_embed_signup">
                        <form class="w-100" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                              method="get">
                            <div class="navbar-form">
                                <div class="input-group add-on">
                                    <input class="form-control" name="EMAIL" placeholder="Your email address" onfocus="this.placeholder = ''"
                                           onblur="this.placeholder = 'Your email address'" required="" type="email">
                                    <div style="position: absolute; left: -5000px;">
                                        <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                                    </div>
                                    <div class="input-group-btn">
                                        <button class="btn btn-info">
                                            Subscribe
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="info mt-20"></div>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Newsletter Area =================-->
</div>
@stop
