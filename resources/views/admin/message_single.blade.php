@extends('admin.layouts.panel')

@section('content')
    <div class="card">
        <div class="card-header">Message</div>
        <div class="card-body">
            @include('flash::message')

            <h3>
                {{ $message->subject }}
                <small class="text-muted">from {{ $message->name }}</small>
            </h3>
            
            <h5>{{ $message->email }}</h5>
            <p class="lead">
                {{ $message->message }}
            </p>
        </div>
    </div>
@stop
