@extends('layouts/main')

@section('title')
    Design Storm - Inspiration For Developers
@endsection

@section('content')
    <div id="site-section">
        <div class="container">
            <div id="home">
                <div class="search-area">
                    <div class="search-container">
                        <form action="/results" method="get" >
                            @csrf
                            <h1>DesignStorm</h1>
                            <input class="search" type="text" value="" placeholder="Search" name="search">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
