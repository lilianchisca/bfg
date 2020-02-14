<section class="s-intro-section js-headingcontainer js-topbgcontainer js-introectioncontainer">
  <div class="relative text-white bg-black">
    <div class="relative flex flex-col items-center justify-center min-h-screen border-black border-b-52 pt-80">
      <div class="absolute inset-0 c-topbgclip">
        <div class="absolute inset-0 bg-center bg-no-repeat bg-cover c-topbgparallax" style="background-image: url(@sub('background_image'))"></div>
        <div class="absolute inset-0 bg-gray-700 opacity-50"></div>
      </div>
      <div class="relative w-full container-sm pt-140 pb-100">
        <p class="mb-20 font-light uppercase text-13 tracking-input">@sub('pretitle')</p>
        @heading
          @sub('title')
        @endheading
        <div class="leading-loose mt-30 max-w-665 text-20 tracking-body-sm">@sub('description')</div>
        <footer class="pt-29">
          @button([
            'type' => 'anchor',
            'title' => get_sub_field('button_1')['title'],
            'url' => get_sub_field('button_1')['url'],
            'target' => get_sub_field('button_1')['target'],
            'style' => 'red',
            'classes' => 'mr-24'
          ])@endbutton

          @button([
            'type' => 'anchor',
            'title' => get_sub_field('button_2')['title'],
            'url' => get_sub_field('button_2')['url'],
            'target' => get_sub_field('button_2')['target'],
            'style' => 'ghost',
            'classes' => ''
          ])@endbutton
        </footer>
        <div class="pt-140">
          <a href="@sub('bottom_link', 'url')" target="@sub('bottom_link', 'target')" class="c-dotsbtn">
            <span class="c-dotsbtn__dots">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <span></span>
            </span>
            <span class="c-dotsbtn__text">@sub('bottom_link', 'title')</span>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="relative z-10">
    <div class="c-introtopline"></div>
    <div class="c-introbottomline"></div>
  </div>
</section>
