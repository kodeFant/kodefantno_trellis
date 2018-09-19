<header>
    {{ the_post_thumbnail() }}
    <div class="header-content">
      <h1 class="entry-title">@php echo get_the_title() @endphp</h1>
      <h2 class="preamble"><?= $posts_ingress; ?></h2>
      <div class="post-byline">
        @include('partials/entry-meta')
      </div>
    </div>
  </header>
