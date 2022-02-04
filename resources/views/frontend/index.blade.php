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
                        @foreach(config('searchBy.search_by') as $key => $value)
                        <option value="{{ $value }}">{{ $value }}</option>
                        @endforeach
                    </select>
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>

            </div>

        </div>

    </nav>

    <h3 class="my-3 ms-5">Index Page</h3>

    <div class="card shadow mx-5">

        <div class="card-body">

            <div class="row">

                <table class="table cartTable">

                    <thead>

                        <tr>

                            <th scope="col">Title</th>
                            <th scope="col">E-book</th>
                            <th scope="col">Author</th>
                            <th scope="col">Language</th>
                            <th scope="col">Start Date</th>
                            <th>Action</th>

                        </tr>

                    </thead>

                    @if(count($materials) > 0) 
                    <tbody>

                        @foreach($materials as $item)

                            <tr>

                                <td>{{ $item->Title }}</td>
                                <td>{{ $item->ebook }}</td>
                                <td>{{ $item->Author}}</td>
                                <td>{{ $item->Language }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td><a href="{{ url('view-item/'.$item->id) }}" class="btn btn-warning view-item">View</a></td>
                            
                            </tr>

                        @endforeach 

                    </tbody>

                    @else 

                    <tbody>

                        <tr>

                            <td>No search item ...</td>

                        </tr>

                    </tbody>

                    @endif

                </table>

            </div>

        </div>

    </div>

@endsection