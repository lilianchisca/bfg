<section class="relative s-featured-blocks pt-55 pb-55 js-featblocks">
  <h2 class="absolute inset-x-0 w-full font-bold text-center transform -translate-y-1/2 pb-100 text-aqua-500 text-235 leading-heading-xl top-50p opacity-17">
    <div class="s-featured-blocks__title">@sub('title')</div>
  </h2>
  <div class="container">
    <div class="flex flex-wrap -mx-80">
      @php $counter = 1 @endphp
      @fields('blocks')
        <a href="@sub('button', 'url')" target="@sub('button', 'target')" class="s-featured-blocks__block mb-160 group w-1/2 px-80 {{ $counter === 2 || $counter === 4 ? 'mt-80' : '' }}">
          <header class="z-10 relative block w-full h-335 s-featured-blocks__img {{ $counter === 1 || $counter === 4 ? 'is-left' : 'is-right' }}">
            <div class="absolute inset-0 bg-center bg-no-repeat bg-cover" style="background-image: url(@sub('image'));"></div>
          </header>
          <section class="min-h-485 relative -mt-38 {{ $counter === 1 || $counter === 4 ? 'ml-48' : 'mr-48' }}">
            <div class="absolute inset-0 border {{ $counter === 1 || $counter === 4 ? 'bg-aqua-500 border-transparent s-featured-blocks__main is-aqua' : 'bg-white border-blue-500 s-featured-blocks__main is-white' }} group-hover:shadow-lg"></div>
            <div class="relative pr-20 min-h-485 pb-60 pt-80 pl-55">
              <h3 class="relative pb-40 font-bold text-46 leading-heading-lg tracking-heading-lg">
              @sub('title')
                <span class="c-heading__line c-heading__line--blue c-heading__line--long c-heading__line--alt"></span>
              </h3>
              <div class="leading-loose text-gray-500 mt-30 text-17 tracking-body-md c-contentarea">@sub('description')</div>
              <footer class="absolute -bottom-30">
                @button([
                  'type' => 'feat-block',
                  'title' => get_sub_field('button')['title'],
                  'style' => 'red',
                ])@endbutton
              </footer>
            </div>
          </section>
        </a>
        @php $counter++ @endphp
      @endfields
    </div>
  </div>
</section>
