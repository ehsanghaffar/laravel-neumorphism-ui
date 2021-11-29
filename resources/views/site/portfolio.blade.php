@extends('site.layouts.app')
@extends('site.layouts.meta-tags')
@section('meta_description', $portfolio->meta_description)
@section('title', $portfolio->title)
@section('content')
    <!--================ Start portfolio Banner Area =================-->
    <section class="container">
        <div class="row mt-5 mb-5">
        </div>
    </section>
    <!--================ End Portfolio Banner Area =================-->

    <!--================ Start Portfolio Details Area =================-->
    <section class="portfolio_details_area section_gap mt-3">
        <div class="container">
            <div class="portfolio_details_inner">
                <div class="row py-4">
                    <div class="col-md-6">
                        <div class="left_img text-center">
                            <img class="img-fluid" src="{{ asset('portfolios/'.$portfolio->image) }}" alt="" style="width: 400px">
                        </div>
                    </div>
                    <div class="offset-md-1 col-md-5">
                        <div class="portfolio_right_text mt-30">
                            <h4>{{ $portfolio->title }}</h4>
                            <p>{{ $portfolio->description }}</p>
                            <ul class="list">
                                <li><span>Rating</span>:
                                    @for($i=0;$i<$portfolio->rank;$i++)
                                        <i class="fa fa-star" style="color: goldenrod"></i>
                                    @endfor
                                </li>
                                <li><span>Client</span>: {{ $portfolio->client }}</li>
                                <li><span>Website</span>: {{ $portfolio->link }}</li>
                                <li><span>Completed</span>: {{ jdate($portfolio->completion_date)->format('Y/m/d') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <p>{!! $portfolio->content !!}</p>
            </div>
        </div>
    </section>
    <!--================ Start Portfolio Details Area =================-->
@stop
