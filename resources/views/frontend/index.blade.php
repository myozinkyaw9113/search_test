@extends('layouts.frontend')

@section('title')
    Search Book
@endsection

@section('content')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <div class="container-fluid mx-5">

            <a class="navbar-brand" href="{{ url('/') }}">ebook</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                    </li>

                </ul>

                <form class="d-flex" action="{{ route('frontend.searchBook') }}" method="GET">
                    <input class="form-control me-2" type="search" placeholder="Search" name="search" />
                    <select class="form-select me-2" name="search_by" style="width: 100px;">
                        @foreach($searchBy as $search)
                        <option value="{{ $search->search_by }}">{{ $search->search_by }}</option>
                        @endforeach
                    </select>
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>

            </div>

        </div>

    </nav>

    <h3 class="my-3">Index Page</h3>

@endsection