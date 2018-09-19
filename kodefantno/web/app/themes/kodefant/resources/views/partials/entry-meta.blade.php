
<div class="byline author vcard">
  <div class="post-meta">
  {{ __('By', 'sage') }} <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" rel="author" class="fn">
    {{ get_the_author() }}
  </a>
  </div>
  <div class="post-meta post-meta-category">
      <span class="meta-head">Tema: </span>@include ('components/primary-category')
  </div>
  <div class="post-meta">
      <span class="meta-head">Publisert: </span><time class="updated" datetime="{{ get_post_time('c', true) }}">{{ get_the_date() }}</time>
  <div>
  </div>

