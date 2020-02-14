<section class="relative pt-80 s-timeline js-timelineslines">
  <div class="s-timeline__toplines"></div>
  <div class="s-timeline__bottomlines"></div>
  <h2 class="absolute inset-x-0 w-full font-bold text-right -top-60 text-aqua-500 text-235 leading-heading-xl opacity-17">
    <div class="s-timeline__title">@sub('section_title')</div>
  </h2>
  <div class="flex items-center justify-end s-timeline__controls w-100">
    <a href="#" class="relative w-32 mx-10 text-left js-timelineprev group">
      <span class="block transition-all duration-300 transform mr-15 text-24 group-hover:-translate-x-10 text-aqua-500 group-hover:text-blue-500"><i class="fal fa-long-arrow-left"></i></span>
      <span class="absolute h-2 transition-all duration-300 -right-2 bg-aqua-500 group-hover:bg-blue-500 w-44 max-w-34 group-hover:max-w-44 top-50p"></span>
    </a>
    <a href="#" class="relative w-32 mx-10 text-right transition-all duration-300 js-timelinenext group">
      <span class="absolute left-0 h-2 transition-all duration-300 bg-aqua-500 group-hover:bg-blue-500 w-44 max-w-34 group-hover:max-w-44 top-50p"></span>
      <span class="block transition-all duration-300 transform ml-15 text-24 group-hover:translate-x-10 text-aqua-500 group-hover:text-blue-500"><i class="fal fa-long-arrow-right"></i></span>
    </a>
  </div>

  <div class="container">
    <h3 class="font-light text-blue-500 uppercase mb-15 text-13 tracking-input">@sub('pretitle')</h3>
    <h2 class="font-bold leading-none mb-30 tracking-heading-xl text-54">@sub('title')</h2>
    <div class="flex js-timelinewrap s-timeline__wrap">
      @php $counter = 1 @endphp
      @fields('items')
        <div class="flex-shrink-0 w-1/3 pb-55 pt-50 s-timeline__item {{ $counter < 4 ? 'is-active' : '' }}">
          <h3 class="font-bold leading-none text-red-500 text-34 tracking-body-sm pr-50">@sub('date')</h3>
          <div class="relative mb-8 py-14">
            <div class="absolute left-0 w-10 h-10 transform -translate-y-1/2 bg-red-500 rounded-full top-50p"></div>
            <div class="w-full h-2 bg-blue-500"></div>
          </div>
          <h4 class="font-bold leading-none text-black text-27 tracking-heading-sm pr-50">@sub('title')</h4>
          <div class="mt-10 leading-loose text-gray-500 text-17 tracking-body-md c-contentarea pr-50">@sub('description')</div>
        </div>
        @php $counter++ @endphp
      @endfields
    </div>

    <div class="pt-20 text-right">
      @button([
        'type' => 'feat-anchor',
        'title' => get_sub_field('button')['title'],
        'url' => get_sub_field('button')['url'],
        'target' => get_sub_field('button')['target'],
        'style' => 'red',
      ])@endbutton
    </div>
  </div>
</section>
