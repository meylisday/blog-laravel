@extends('layouts.master')
@section('content')
<header class="masthead" style="background-image: url('/img/post-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="post-heading">
                    <h1>{{ $post->title }}</h1>
                    <h2 class="subheading">Problems look mighty small from 150 miles up</h2>
                    <span class="meta">Posted by
                        <a href="#">Start Bootstrap</a>
                        {{ $post->created_at->toFormattedDateString()}}</span>
                </div>
            </div>
        </div>
    </div>
</header>
<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                {{ $post->body }}
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto comments">
                <div class="list-group">
                  @foreach ($post->comments as $comment)
                    <a href="#" class="list-group-item list-group-item-action mt-3">
                        <div class="d-flex w-100 justify-content-between">
                            <small>{{ $comment->created_at->diffForHumans() }}</small>
                        </div>
                        <p class="mb-1">{{ $comment->body }}</p>
                        <small>Donec id elit non mi porta.</small>
                    </a>
                  @endforeach
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            @include ('layouts.errors')
            <div class="card-block">
              <form method="POST" action="/posts/{{ $post->id }}/comments">
                @csrf
                <div class="form-group">
                  <textarea name="body" id="" placeholder="Your comment here" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Add comment</button>
                </div>
              </form>
            </div>
          </div>
        </div>
    </div>
</article>
@endsection
