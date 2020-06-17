@extends('admin.layouts.panel')

@section('content')
    <div class="card">
        <div class="card-header">About Me</div>

        <div class="card-body">
            @if (count($errors))
                <div class="alert alert-danger" role="alert">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @include('flash::message')

            <form action="{{ route('saveAboutMe') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ settings('title') }}" aria-describedby="titleHelp">
                    <small id="titleHelp" class="form-text text-muted">Choose a title</small>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="image" name="image">
                    <label class="custom-file-label" for="image">Choose image</label>
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="10">{{ settings('description') }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@stop
