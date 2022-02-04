@extends('layouts.frontend')

@section('title')
    item
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

<div class="container">

    <div class="card shadow product_data my-5">

        <div class="card-body">

            <div class="row">

                <div class="col-md-4 border-right">

                    <img src="https://image.shutterstock.com/image-illustration/img-file-document-icon-trendy-260nw-1407027353.jpg" class="w-100" alt="{{ $item->title }}">

                </div>

                <div class="col-md-8">

                    <h2 class="mb-0">

                        {{ $item->Title }}

                    </h2>

                    <br>

                    <div class="d-flex justify-content-between">

                        <div><b>{{ $item->ebook }}</b></div>
                        <div style="font-size:1rem;" class="fw-bold">Written by {{ $item->Author }}</div>

                    </div>

                    <hr>

                    <p class="mt-3"> 
                       <b>Subject</b> - {{ $item->Subject }} 
                    
                    </p>

                    <hr>

                    <div class="row mt-2">

                        <div class="col-md-3">

                            Audio Link - <a href="{{ $item->Audio }}">Audio</a>
                            <br/> <br/>
                            Video Link - <a href="{{ $item->Video }}">Video</a>
                            
                        </div>

                        <div class="col-md-3">

                            <p>ISSN - {{ $item->ISSN }}</p>
                            <p>ISBN - {{ $item->ISBN }}</p>
                            <p>DOIs - {{ $item->DOIs }}</p>
                            
                        </div>

                        <div class="col-md-6">

                            <p>Language - {{ $item->Language }}</p>
                            <p>Start Date - {{ $item->StartDate }} | End Date - {{ $item->EndDate }}</p>
                            <p>Uploaded at - {{ date('d-m-Y', strtotime($item->created_at)) }} / {{ date('H:i:s', strtotime($item->created_at)) }}</p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection