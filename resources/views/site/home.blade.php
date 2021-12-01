@extends('site.layouts.app')
@extends('site.layouts.meta-tags')
@section('title', 'Ehsanghaffarii Laravel Blog')
@section('meta_description', 'Ehsanghaffarii Blog using Laravel Framework')

@section('content')
<main>
    <!-- About me -->
    <div class="section section-header pb-7">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-12 col-lg-8 text-center">
                    <h1>Hi, I'm Ehsan</h1>
                    <h3>Welcome to my personal blog</h3>
                    <p> This is my home page on World Wide Web...</p>
                    <p>Have a question or advice?</p>
                    <a class="btn btn-primary text-info border" href="tel:09195062188">Call me now!</a>
                </div>
            </div>
        </div>
    </section>
    <!-- portfolio Section -->
    <section class="section border-top mt-4">
        <div class="container">
            <div class="row">
                @foreach($articles as $article)
                <a href="{{ route('viewArticlePage', ['article' => $article]) }}" class="border m-2 shadow rounded">
                <div class="card">
                    <div class="row p-3">
                      <div class="col-md-2 d-flex align-items-center">
                        <img class="rounded-lg" src="{{ asset('articles/' .$article->image) }}"  alt="{{ $article->title }}">
                      </div>
                      <div class="col-md-10">
                        <div class="card-body p-1">
                        <h5 class="card-title">{{ $article->title }}</h5>
                          <p class="card-text">{{ $article->description }}</p>

                        </div>
                      </div>
                    </div>
                  </div>
                </a>
                    @endforeach
            </div>
            <div class="row mt-5">
                <div class="section-title justify-content-center mx-auto mb-5">
                    <h3>Some of my projects </h3>
                </div>
                <div class="col-md-12 d-flex mb-5">
                    <!-- portfolios card -->
                    @foreach($portfolios as $portfolio)
                    <div class="card bg-primary shadow-concave border m-2">
                        <div class="card-header p-4 text-center">
                            <img src="{{ asset('portfolios/' .$portfolio->image) }}" class="card-img-top rounded" style="width: 200px" alt="Wood Portrait">
                        </div>
                        <div class="card-body pt-2">
                        <h3 class="h5 mb-2">{{ $portfolio->title }}</h3>
                            <span class="h6 font-weight-normal text-gray mb-4">Website: {{ $portfolio->link }}</span>
                            <p class="card-text">Author: {{ $portfolio->client }}</p>
                            <a href="{{ route('viewPortfolioPage', ['portfolio' => $portfolio]) }}" class="btn btn-primary btn-block text-success border">See Portfolio page</a>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
    </section>
    <!-- source code -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="section-title justify-content-center mx-auto p-3">
                    <h3> Open Source Project</h3>
                </div>
            <div class="card border-light shadow-concave mx-auto w-75">
                <div class="row no-gutter">
                    <div class="col-md-4">
                        <img class="card-img rounded-circle p-3" src="img/{{ settings('image') }}" alt="">
                    </div>
                    <div class="col-md-8 p-5">
                        <div class="card-body p-1">
                            <div class="card-title m-1">
                                <h5>{{ settings('title') }}</h5>
                            </div>
                            <div class="wow fadeIn" data-wow-duration=".8s">
                                <p>
                                    {{ settings('description') }}
                                </p>
                            </div>
                            <a href="https://wa.me/989195063188" class="btn btn-primary border"><i class="fa fa-whatsapp"></i>Contact Me</a>
                        </div>
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
</main>
@stop
