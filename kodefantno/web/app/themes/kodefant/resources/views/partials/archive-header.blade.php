@php
  global $post;
@endphp
<div class="page-header">
  @if ($post)
    @if ($post->post_name !== "hjem")
      <h1>{!! App::title() !!}</h1>
    @endif
  @endif
</div>
