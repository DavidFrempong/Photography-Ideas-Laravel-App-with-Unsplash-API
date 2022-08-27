@extends('layouts/account')

@section('title')
    Account Dashboard
@endsection

@section('content')
    <div>
        <h1>Create a Project</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="box">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10">
                <form action="/account/projects" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label for="title">
                                Title
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" name="title" />
                            <button type="submit">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.js"></script>
@endsection
