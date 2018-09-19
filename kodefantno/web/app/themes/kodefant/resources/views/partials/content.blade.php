{{-- Blog list items --}}
<article @php post_class() @endphp>
    <header>
      <a href="{{ the_permalink() }}">{{ the_post_thumbnail() }}</a>
      <h2 class="entry-title"><a href="{{ get_permalink() }}">@php echo get_the_title() @endphp</a></h2>
      <p class="preamble"><?= posts_ingress(); ?></p>
    </header>
  </article>
