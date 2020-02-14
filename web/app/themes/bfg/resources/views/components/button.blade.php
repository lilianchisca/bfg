@if ($type === 'submit')
  <button type="submit" class="outline-none focus:outline-none relative inline-flex items-center justify-between max-w-full py-12 text-white w-268 pl-35 pr-46 group c-btn {{ $classes ?? '' }}">
    <span class="absolute inset-0 transition-all duration-300 c-btn__bg {{ $style === 'red' ? 'bg-red-500' : '' }}"></span>
    <span class="absolute transition-all duration-300 transform scale-90 border border-white opacity-0 inset-3 group-hover:scale-100 group-hover:opacity-100"></span>
    <span class="relative uppercase text-13 tracking-input">{{ $title }}</span>
    <span class="relative w-32">
      <span class="absolute left-0 h-2 transition-all duration-300 bg-white w-44 max-w-34 group-hover:max-w-44 top-50p"></span>
      <span class="block transition-all duration-300 transform ml-15 text-24 group-hover:translate-x-10"><i class="fal fa-long-arrow-right"></i></span>
    </span>
  </button>
@elseif ($type === 'feat-block')
  <span
    class="outline-none focus:outline-none relative inline-flex items-center justify-between max-w-full py-12 text-white min-w-268 pl-35 pr-45 c-btn {{ $classes ?? '' }}"
  >
    <span class="absolute inset-0 transition-all duration-300 c-btn__bg {{ $style === 'red' ? 'bg-red-500' : '' }}"></span>
    <span class="absolute transition-all duration-300 transform scale-90 border border-white opacity-0 inset-3 group-hover:scale-100 group-hover:opacity-100"></span>
    <span class="relative inline-block uppercase text-13 tracking-input pr-15">{{ $title }}</span>
    <span class="relative w-32">
      <span class="absolute left-0 h-2 transition-all duration-300 bg-white w-44 max-w-34 group-hover:max-w-44 top-50p"></span>
      <span class="block transition-all duration-300 transform ml-15 text-24 group-hover:translate-x-10"><i class="fal fa-long-arrow-right"></i></span>
    </span>
  </span>
@elseif ($type === 'feat-anchor')
  <a
    href="{{ $url }}"
    target="{{ $target }}"
    class="outline-none focus:outline-none group c-btn relative inline-flex items-center justify-between max-w-full py-12 text-white min-w-268 pl-35 pr-45 c-btn {{ $classes ?? '' }}"
  >
    <span class="absolute inset-0 transition-all duration-300 c-btn__bg {{ $style === 'red' ? 'bg-red-500' : '' }}"></span>
    <span class="absolute transition-all duration-300 transform scale-90 border border-white opacity-0 inset-3 group-hover:scale-100 group-hover:opacity-100"></span>
    <span class="relative inline-block uppercase text-13 tracking-input pr-15">{{ $title }}</span>
    <span class="relative w-32">
      <span class="absolute left-0 h-2 transition-all duration-300 bg-white w-44 max-w-34 group-hover:max-w-44 top-50p"></span>
      <span class="block transition-all duration-300 transform ml-15 text-24 group-hover:translate-x-10"><i class="fal fa-long-arrow-right"></i></span>
    </span>
  </a>
@elseif ($type === 'anchor' && $style === 'ghost')
  <a
    href="{{ $url }}"
    target="{{ $target }}"
    class="overflow-hidden relative outline-none focus:outline-none relative inline-flex items-center justify-between max-w-full py-20 text-white w-228 px-35 group c-btn {{ $classes ?? '' }}"
  >
    <span class="absolute inset-0 transition-all duration-300 border border-white group-hover:border-transparent c-btn__bg bg-awhite-200"></span>
    <span class="c-btn__ghost-corner"></span>
    <span class="absolute transition-all duration-300 transform scale-90 border border-white opacity-0 inset-3 group-hover:scale-100 group-hover:opacity-100"></span>
    <span class="relative block w-full uppercase text-13 tracking-input {{ isset($align) && $align === 'left' ? 'text-left' : 'text-center' }}">{{ $title }}</span>
  </a>
@elseif ($type === 'anchor')
  <a
    href="{{ $url }}"
    target="{{ $target }}"
    class="outline-none focus:outline-none relative inline-flex items-center justify-between max-w-full py-20 text-white px-35 group c-btn {{ $classes ?? '' }} {{ isset($size) && $size === 'large' ? 'w-268' : 'w-228' }}"
  >
    <span class="absolute inset-0 transition-all duration-300 c-btn__bg {{ isset($style) && $style === 'red' ? 'bg-red-500' : '' }}"></span>
    <span class="absolute transition-all duration-300 transform scale-90 border border-white opacity-0 inset-3 group-hover:scale-100 group-hover:opacity-100"></span>
    <span class="relative block w-full uppercase text-13 tracking-input {{ isset($align) && $align === 'left' ? 'text-left' : 'text-center' }}">{{ $title }}</span>
  </a>
@endif
