@extends('layouts/main')

@section('title')
    Design Storm - Inspiration For Developers
@endsection

@section('content')
    <div id="site-section">
        <div class="container">
            <div id="results">
                <div>
                    <div class="search-container">
                        <form class="" action="/results" method="get">
                            @csrf
                            <input class="search" type="text" value="{{ $keyword }}" placeholder="Search"
                                name="search">
                        </form>
                    </div>
                    <div class="boxes">
                        <div class="row">
                            @if (count($filteredData) >= 1)
                                @foreach ($filteredData as $images)
                                    <div class="col-md-3">
                                        <div class="box">
                                            <div
                                                style="position: relative; background: url('{{ $images->urls->regular }}') no-repeat center center;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover; height: 200px;">
                                                @php
                                                $codedUrl = urlencode($images->urls->regular)

                                                @endphp
                                                <a href="/projects/images/{{ $images->id }}/add?image_url={{ $codedUrl }}">
                                                    <div class="add-btn
                                                     @if(in_array($image->id, $newArray)) active"
                                                         @endif><i class="fa fa-check" aria-hidden="true"></i>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <h2>Sorry, no results were found.</h2>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
