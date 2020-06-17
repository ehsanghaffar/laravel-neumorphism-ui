@extends('admin.layouts.panel')

@section('content')
    <div class="card">
        <div class="card-header">Messages</div>

        <div class="card-body">
            @include('flash::message')

            <table class="table table-hover">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Email</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Message</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($messages as $message)
                    <tr>
                        <th scope="row">{{ $message->id }}</th>
                        <td>{{ $message->name }}</td>
                        <td>{{ $message->subject }}</td>
                        <td>{{ $message->email }}</td>
                        <td>{{ jdate($message->created_at)->format('Y/m/d') }}</td>
                        <td>{{ substr($message->message,0,40).'...' }}</td>
                        <td>
                            <a href="{{ route('viewSingleMessage', ['contact' => $message]) }}" class="btn btn-success">
                                <svg class="bi bi-eye-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.5 8a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"/>
                                    <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 100-7 3.5 3.5 0 000 7z" clip-rule="evenodd"/>
                                </svg>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
