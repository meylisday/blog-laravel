@extends('layouts.master-post')

@section('content-post')
<header class="masthead" style="background-image: url('img/post-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1>{{ $posts->title }}</h1>
            <h2 class="subheading">Problems look mighty small from 150 miles up</h2>
            <span class="meta">Posted by
              <a href="#">Meylis Day</a>
              {{ $posts->created_at->toFormattedDateString()}}</span>
          </div>
        </div>
      </div>
    </div>
  </header>
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          {{ $posts->body }}
        </div>
      </div>
    </div>
  </article>
  @endsection