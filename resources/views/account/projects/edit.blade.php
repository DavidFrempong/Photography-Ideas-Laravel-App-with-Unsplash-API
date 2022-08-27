@extends('layouts/account')

@section('title')
    Account Dashboard
@endsection

@section('content')
    <div>
        <h1>Edit Your Project</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="box">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10">
                <form action="/account/projects/{{ $project->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <label for="title">
                                Title
                            </label>
                        </div>
                    </div>
                    <div class="img-section">
                        <div class="row">

                            @foreach ($project->images as $image)
                            <div class="col-md-3">
                                <div class="box">
                                    <div
                                        style="position: relative; background: url('{{ $image->image_url }}') no-repeat center center;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover; height: 200px;">
                                    </div>
                                    <a href="/account/projects/{{ $image->image_information }}/delete">Delete</a>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" name="title" value={{ $project->title }} />
                            <button type="submit">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col-md-2">
                <a href="/account/projects/{{ $project->id }}/delete" onclick="confirm()" class="delete-btn">Delete project</a>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.js"></script>
@endsection
