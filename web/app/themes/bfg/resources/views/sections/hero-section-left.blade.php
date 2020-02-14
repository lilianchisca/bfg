<section class="s-hero-section-left js-headingcontainer js-topbgcontainer js-heroectioncontainer js-heroectionaddcontainer">
  <div class="relative text-white bg-white">
    <div class="relative flex flex-col items-center justify-center border-white border-b-52 pt-130 pb-110">
      <div class="absolute inset-0 c-topbgclip">
        <div class="absolute inset-0 bg-center bg-no-repeat bg-cover c-topbgparallax" style="background-image: url(@sub('background_image'))"></div>
        <div class="absolute inset-0 bg-gray-700 opacity-50"></div>
      </div>
      <div class="container relative w-full pt-140 pb-100">
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
            'size' => 'large',
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
      </div>
    </div>
  </div>
  <div class="relative z-10">
    <div class="c-herotopline"></div>
    <div class="c-herobottomline"></div>
  </div>
</section>
<div class="relative">
  <div class="container">
    <div class="flex">
      <div class="relative z-20 w-full ml-auto mr-10 text-white max-w-485 pt-36 px-44 -mt-335 s-hero-section__callout">
        <div class="absolute inset-0 bg-aqua-500 s-hero-section__calloutbg is-aqua"></div>
        <div class="absolute w-full h-full bg-blue-500 -left-11 -top-11 s-hero-section__calloutbg"></div>
        <div class="relative -ml-11 -mt-11 pb-94">
          <p class="font-light uppercase mb-26 text-13 tracking-input">@sub('callout_pretitle')</p>
          <h2 class="font-bold text-54 leading-heading-lg tracking-heading-lg">@sub('callout_title')</h2>
          <div class="leading-loose mt-30 text-17 tracking-body-sm">@sub('callout_description')</div>
          <footer class="absolute inset-x-0 -bottom-19">
            @button([
              'type' => 'anchor',
              'title' => get_sub_field('callout_button')['title'],
              'url' => get_sub_field('callout_button')['url'],
              'target' => get_sub_field('callout_button')['target'],
              'style' => 'red',
              'size' => 'large',
              'align' => 'left',
              'classes' => 'mr-24'
            ])@endbutton
          </footer>
        </div>
      </div>
    </div>
  </div>
</div>
