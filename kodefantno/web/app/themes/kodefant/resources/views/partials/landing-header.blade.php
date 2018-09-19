<div class="landing">
<div class="landing-content">
  <h1 class="header_tittel"><?= $frontpage_header_tittel; ?></h1>
  <div class="frontpage_header_text"><?= $frontpage_header_text; ?></div>


@if( have_rows('frontpage_blog_buttons') )

<p class="frontpage_blog_buttons">

  @while( have_rows('frontpage_blog_buttons') )
    @php
    the_row();
    $frontpage_symbol             = get_sub_field('frontpage_symbol');
    $frontpage_button_text        = get_sub_field('frontpage_button_text') ;
    $frontpage_button_url         = get_sub_field('frontpage_button_url'  );
    $frontpage_button_color       = get_sub_field('frontpage_button_color');
    $frontpage_button_text_color  = get_sub_field('frontpage_button_text_color');
    $frontpage_button_id          = uniqid('frontpage');
		@endphp

      <style>
        a.<?= $frontpage_button_id; ?> {
          color: <?= $frontpage_button_text_color; ?>;
          background-color: <?= $frontpage_button_color; ?>;
        }
      </style>
      <a class="button frontpage_button <?= $frontpage_button_id; ?>" href="<?= $frontpage_button_url; ?>"><?= $frontpage_symbol; ?> <?= $frontpage_button_text; ?></a>
	@endwhile

</p>

@endif

</div>
</div>
