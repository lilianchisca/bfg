<h1 class="relative font-bold leading-heading-xl tracking-heading-xl c-heading pb-43 {{ isset($style) && $style === 'centered' ? 'text-122' : 'text-98' }}">
  {{ $slot }}
  <span class="c-heading__line {{ isset($style) && $style === 'centered' ? 'is-centered' : '' }}"></span>
</h1>
