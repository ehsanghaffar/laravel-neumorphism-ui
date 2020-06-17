@extends('admin.layouts.panel')


@section('content')
    <div class="card">
        <div class="card-header">Portfolios</div>

        <div class="card-body">
                    @include('flash::message')

            <a href="{{ route('viewAddPortfolio') }}" class="btn btn-outline-primary mb-2">Add Portfolio</a>

            <table class="table table-hover">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">id</th>
                    <th width="20px" scope="col">Image</th>
                    <th scope="col">Title</th>
                    <th scope="col">Link</th>
                    <th scope="col">Client</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($portfolios as $portfolio)
                    <tr>
                        <th scope="row">{{ $portfolio->id }}</th>
                        <td><img src="{{ asset('portfolios/'.$portfolio->image) }}" alt="Portfolio" class="img-fluid"></td>
                        <td>{{ $portfolio->title }}</td>
                        <td>{{ $portfolio->link }}</td>
                        <td>{{ $portfolio->client }}</td>
                        <td>{{ jdate($portfolio->created_at)->format('Y/m/d') }}</td>
                        <td>
                            <a href="{{ route('viewEditPortfolio', ['portfolio' => $portfolio]) }}" class="btn btn-warning">
                                <svg class="bi bi-pencil-square" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.502 1.94a.5.5 0 010 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 01.707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 00-.121.196l-.805 2.414a.25.25 0 00.316.316l2.414-.805a.5.5 0 00.196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 002.5 15h11a1.5 1.5 0 001.5-1.5v-6a.5.5 0 00-1 0v6a.5.5 0 01-.5.5h-11a.5.5 0 01-.5-.5v-11a.5.5 0 01.5-.5H9a.5.5 0 000-1H2.5A1.5 1.5 0 001 2.5v11z" clip-rule="evenodd"/>
                                </svg>
                            </a>
                            <form action="#" method="POST" style="display: inline-block">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn-danger btn">
                                    <svg class="bi bi-trash" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.5 5.5A.5.5 0 016 6v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm2.5 0a.5.5 0 01.5.5v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm3 .5a.5.5 0 00-1 0v6a.5.5 0 001 0V6z"/>
                                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 01-1 1H13v9a2 2 0 01-2 2H5a2 2 0 01-2-2V4h-.5a1 1 0 01-1-1V2a1 1 0 011-1H6a1 1 0 011-1h2a1 1 0 011 1h3.5a1 1 0 011 1v1zM4.118 4L4 4.059V13a1 1 0 001 1h6a1 1 0 001-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" clip-rule="evenodd"/>
                                    </svg>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
