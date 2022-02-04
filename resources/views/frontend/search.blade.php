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

            <div><a href="{{ url('/') }}" style="text-decoration: none;">Home</a></div>

        </div>

    </nav>

    <h3 class="my-3 ms-5">Search Materials</h3>

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