@extends('layouts/account')

@section('title')
    Account Dashboard
@endsection

@section('content')
    <div>
        <h1>Projects</h1>
        <h6>This is your project dashboard</h6>
        <div class="row">
            <div class="col-md-6">
                <div class="box">
                    <div class="row">
                        <div class="col-md-10">
                            All images here
                        </div>
                        <div class="col-md-2">
                            <a href="/account/projects/create">Make a new project</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10">
                <table>
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Title</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                            <tr>
                                <a href="/account/projects/{{ $project->id }}">{{ $project->id }}</a>

                                <td>
                                    <a href="/account/projects/{{ $project->id }}" class="edit-btn">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.js"></script>
@endsection
