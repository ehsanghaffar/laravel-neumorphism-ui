@extends('admin.layouts.panel')

@section('content')
    <div class="card">
        <div class="card-header">Edit Portfolio</div>

        <div class="card-body">

                    @include('flash::message')
            @if (count($errors))
                <div class="alert alert-danger" role="alert">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('editPortfolio', ['portfolio' => $portfolio]) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" value="{{ $portfolio->title }}" id="title" name="title" aria-describedby="titleHelp">
                    <small id="titleHelp" class="form-text text-muted">Choose a title for your portfolio</small>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="image" name="image">
                    <label class="custom-file-label" for="image">Choose image</label>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3">{{ $portfolio->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="rank">Rank</label>
                    <select class="custom-select" id="rank" name="rank">
                        <option value="1" @if($portfolio->rank == 1) {{'selected'}} @endif>1</option>
                        <option value="2" @if($portfolio->rank == 2) {{'selected'}} @endif>2</option>
                        <option value="3" @if($portfolio->rank == 3) {{'selected'}} @endif>3</option>
                        <option value="4" @if($portfolio->rank == 4) {{'selected'}} @endif>4</option>
                        <option value="5" @if($portfolio->rank == 5) {{'selected'}} @endif>5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="client">Client</label>
                    <input type="text" class="form-control" id="client" value="{{ $portfolio->client }}" name="client">
                </div>
                <div class="form-group">
                    <label for="link">Link</label>
                    <input type="text" class="form-control" id="link" value="{{ $portfolio->link }}" name="link" aria-describedby="linkHelp">
                    <small id="linkHelp" class="form-text text-muted">Enter project link like:
                        https://ehsanghaffarii.ir</small>
                </div>
                <div class="form-group">
                    <label for="completion_date">Completion Date</label>
                    <input type="text" class="form-control" id="completion_date" value="{{ jdate($portfolio->completion_date)->format('Y/m/d') }}" name="completion_date"
                           aria-describedby="completion_dateHelp">
                    <small id="completion_dateHelp" class="form-text text-muted">Attention just enter like:
                        1398/12/02</small>
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea class="form-control" id="content" name="content" rows="10">{{ $portfolio->content }}</textarea>
                </div>
                <div class="form-group">
                    <label>Keywords</label>
                    <input name="meta_keywords" class="form-control" value="{{ $portfolio->meta_keywords }}">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <input name="meta_description" class="form-control" value="{{ $portfolio->meta_description }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@stop
