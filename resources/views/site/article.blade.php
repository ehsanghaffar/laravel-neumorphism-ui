@extends('site.layouts.app')
@extends('site.layouts.meta-tags')
@section('meta_description', $article->meta_description)
@section('title', $article->title)
@section('content')
    <!--================ Start portfolio Banner Area =================-->
    <section class="container">
        <div class="row mt-5 mb-5">
        </div>
    </section>
    <!--================ End Portfolio Banner Area =================-->

    <!--================ Start Portfolio Details Area =================-->
    <section class="portfolio_details_area section_gap">
        <div class="container">
            <div class="portfolio_details_inner">
                <div class="row">
                    <div class="col-md-6">
                        <div class="left_img">
                            <img class="img-fluid" src="{{ asset('articles/'.$article->image) }}" alt="">
                        </div>
                    </div>
                    <div class="offset-md-1 col-md-5">
                        <div class="portfolio_right_text mt-30">
                            <h4>{{ $article->title }}</h4>
                            <p>{{ $article->description }}</p>
                            <ul class="list">
                                <li><span>Rating</span>:
                                    @for($i=0;$i<$article->rank;$i++)
                                        <i class="fa fa-star" style="color:goldenrod"></i>
                                    @endfor
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <p>{!! $article->content !!}</p>
            </div>
        </div>
    </section>
    <!--================ Start Portfolio Details Area =================-->
@stop
