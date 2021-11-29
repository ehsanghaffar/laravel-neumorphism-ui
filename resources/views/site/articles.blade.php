@extends('site.layouts.app')
@extends('site.layouts.meta-tags')



@section('content')
<section class="section section-lg border-top mt-4">
    <div class="container">
        <div class="row">
            @foreach($articles as $article)
                <div class="col-md-4 d-flex mb-5">
                <div class="card bg-primary shadow-concave border m-2">
                    <div class="card-header p-4">
                        <img src="{{ asset('articles/' .$article->image) }}" class="card-img-top rounded" alt="Wood Portrait">
                    </div>
                    <div class="card-body pt-2 d-flex flex-column justify-content-between">
                    <h3 class="h5 mb-2">{{ $article->title }}</h3>
                        <span class="h6 font-weight-normal text-gray mb-4">Website: {{ $article->description }}</span>
                        {{-- <p class="card-text">Author: {{ $article->content }}</p> --}}
                        <a href="{{ route('viewArticlePage', ['article' => $article]) }}" class="btn btn-primary btn-block text-success border">See article page</a>
                    </div>
                </div>
            </div>
                @endforeach
        </div>
    </div>
</section>
@stop
