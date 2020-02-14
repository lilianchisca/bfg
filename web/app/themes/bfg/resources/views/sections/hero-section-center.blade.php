<section class="relative overflow-hidden s-hero-section-center pt-120 js-headingcontainer js-topbgcontainer">
  <div class="absolute inset-0">
    <div class="absolute inset-0 bg-center bg-no-repeat bg-cover c-topbgparallax" style="background-image: url(@sub('background_image'))"></div>
  </div>
  <div class="container relative text-center text-white pt-130 pb-30">
    @heading([
      'style' => 'centered'
    ])
      @sub('title')
    @endheading
    <div class="mx-auto leading-loose mt-30 max-w-600 text-20 tracking-body-sm">@sub('description')</div>
    <div class="mt-35">
      @button([
        'type' => 'anchor',
        'title' => get_sub_field('button')['title'],
        'url' => get_sub_field('button')['url'],
        'target' => get_sub_field('button')['target'],
        'style' => 'red',
        'size' => 'large',
        'classes' => ''
      ])@endbutton
    </div>
    <footer class="pt-100">
      <a href="#" target="@sub('bottom_link', 'target')" class="c-dotsbtn--alt js-nextToggle">
        <span class="c-dotsbtn__dots">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </span>
        <span class="c-dotsbtn__text">Scroll down to find out more</span>
      </a>
    </footer>
  </div>
</section>
<div class="js-nextTarget" style="height: 1000px"></div>
