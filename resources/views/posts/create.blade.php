@extends('layouts.master')
@section('content')
<header class="masthead" style="background-image: url('/img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>Create a Post</h1>
                    <span class="subheading">Create a Post</span>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container">
    <h1>Publish a Post</h1>
    @include ('layouts.errors')
    <form method="POST" action="/posts">
        @csrf
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" aria-describedby="title" name="title">
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea name="body" id="body" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Publish</button>
    </form>
</div>
@endsection
