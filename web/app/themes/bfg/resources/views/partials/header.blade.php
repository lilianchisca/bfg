<header class="fixed inset-x-0 top-0 z-30 bg-white shadow-header js-header">
  <div class="flex justify-between">
    <div class="flex items-center pl-43">
      @hasoption('icaew_website')
        <a class="" target="@option('icaew_website', 'target')" href="@option('icaew_website', 'url')">
          <img src="@asset('images/icaewdark.png')" width="51" height="82" alt="ICAEW Logo">
        </a>
      @endoption
      @hasoption('british_business_bank_website')
        <a class="ml-25" target="@option('british_business_bank_website', 'target')" href="@option('british_business_bank_website', 'url')">
          <img src="@asset('images/bbbdark.png')" width="119" height="44" alt="British Business Bank Logo">
        </a>
      @endoption
      <a class="font-light leading-none text-blue-500 uppercase ml-34 text-23 tracking-heading-md" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
    </div>
    <div class="flex flex-wrap items-center text-0">
      <nav class="relative overflow-hidden">
        @if ($primary_navigation)
          <ul class="flex items-center">
            @foreach ($primary_navigation as $item)
              <li data-slug="{{ str_replace(home_url(), '', $item->url) }}" class="c-primary-link js-navItem block {{ $item->classes ?? '' }} {{ $item->active ? 'is-active' : '' }}">
                <a class="relative block font-light uppercase border-l-2 border-gray-300 group px-43 py-50 text-13 tracking-navlink" href="{{ $item->url }}">
                  <span class="block pointer-events-none">{{ $item->label }}</span>
                  <span class="absolute bottom-0 z-10 block h-5 transition-all duration-300 transform -inset-x-1 group-hover:translate-y-0 c-primary-link__line"></span>
                </a>

                @if ($item->children)
                  <ul class="my-child-menu">
                    @foreach ($item->children as $child)
                      <li class="my-child-item {{ $item->classes ?? '' }} {{ $child->active ? 'is-active' : '' }}">
                        <a href="{{ $child->url }}">
                          {{ $child->label }}
                        </a>
                      </li>
                    @endforeach
                  </ul>
                @endif
              </li>
            @endforeach
          </ul>
        @endif
      </nav>
      <nav class="relative flex items-center pr-40 bg-blue-500 pl-29">
        @if ($secondary_navigation)
          <ul class="flex items-center">
            @foreach ($secondary_navigation as $item)
              <li data-slug="{{ str_replace(home_url(), '', $item->url) }}" class="c-secondary-link js-navItem block {{ $item->classes ?? '' }} {{ $item->active ? 'is-active' : '' }}">
                <a class="relative block overflow-hidden font-light text-white uppercase group px-21 py-50 text-13 tracking-navlink" href="{{ $item->url }}">
                  <span class="block pointer-events-none">{{ $item->label }}</span>
                  <span class="absolute inset-x-0 bottom-0 block h-5 transition-all duration-300 transform bg-white group-hover:translate-y-0 c-secondary-link__line"></span>
                </a>
              </li>
            @endforeach
          </ul>
        @endif
        <button type="button" class="relative block overflow-hidden font-light text-white uppercase outline-none focus:outline-none group px-21 py-50 text-13 tracking-navlink"">
          <span class="inline-flex items-center block pointer-events-none">
            <span>Search</span>
            <span class="inline-block ml-14"><i class="fal fa-search"></i></span>
          </span>
          <span class="absolute inset-x-0 bottom-0 block h-5 transition-all duration-300 transform translate-y-5 bg-white group-hover:translate-y-0"></span>
        </button>
      </nav>
    </div>
  </div>
</header>
