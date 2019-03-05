<div class="post-preview">
  <a href="/posts/{{ $post->id }}">
    <h2 class="post-title">
      {{ $post->title }}
    </h2>
    <h3 class="post-subtitle">
      {{ $post->body }}
    </h3>
  </a>
  <p class="post-meta">Posted by
    <a href="#">Start Bootstrap</a>
    {{ $post->created_at->toFormattedDateString()}}</p>
</div>