<section class="s-testimonials-slider pt-80 pb-110 js-testimonialslines">
  <div class="container py-70">
    <div class="relative mx-auto text-center max-w-910">
      <div class="s-testimonials-slider__toplines"></div>
      <div class="s-testimonials-slider__bottomlines"></div>

      <img class="inline-block" src="@asset('images/quotes.svg')" alt="Quotes">
      <div class="mt-67 js-testslider">
        @foreach (get_sub_field('testimonials') as $testimonial)
          <div class="pb-50">
            <section class="italic font-semibold text-48 leading-testimonial tracking-heading-xl">
              {!! get_the_content(null, false, $testimonial) !!}
            </section>
            <p class="pt-40 uppercase text-13 text-aqua-500 tracking-input">
              {!! get_the_title($testimonial) !!}
            </p>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</section>
