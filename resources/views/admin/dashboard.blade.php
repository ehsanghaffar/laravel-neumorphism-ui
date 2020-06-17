@extends('admin.layouts.panel')

@section('content')
    <div class="card">
        <div class="card-header">Dashboard</div>

        <div class="card-body">            
                    @include('flash::message')
            Dashboard 
        </div>
    </div>
@endsection
