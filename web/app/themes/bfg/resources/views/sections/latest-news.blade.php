<section class="s-latest-news js-headingaltcontainer">
  <div class="container">
    <h2 class="relative font-bold leading-none tracking-heading-xl c-heading pb-43 text-54">
      @sub('title')
      <span class="c-heading__line c-heading__line--dark c-heading__line--long"></span>
    </h2>

    <div class="flex flex-wrap -mx-20 pt-55 pb-90">
      @query([
        'post_type' => 'post',
        'posts_per_page' => 3,
      ])
      @posts
        <div class="w-1/3 px-20 mb-55">
          <a href="@permalink" class="flex flex-col h-full group">
            <header class="relative h-255">
              <div class="absolute inset-0 transition-all duration-300 transform bg-aqua-500 s-latest-news__img group-hover:translate-y-5 group-hover:translate-x-5"></div>
              <div class="absolute inset-0 transition-all duration-300 transform bg-center bg-no-repeat bg-cover s-latest-news__img group-hover:-translate-y-5 group-hover:-translate-x-5" style="background-image: url(@thumbnail(get_the_id(), 'latest-news', false));"></div>
            </header>
            <section class="flex flex-col flex-grow pt-24">
              <p class="font-light text-blue-500 uppercase text-13 tracking-input">@published</p>
              <h3 class="mt-20 font-bold max-w-320 text-27 tracking-heading leading-heading">
                @title
              </h3>
              <footer class="mt-auto">
                <div class="h-1 w-67 -ml-19 bg-aqua-500 mt-19 mb-15"></div>
                <span class="inline-flex items-center pr-2 text-red-500 group c-linklineshrink">
                  <span class="relative inline-block uppercase text-13 tracking-input pr-25">Read</span>
                  <span class="relative w-32 transform scale-95" style="opacity: 0.7;">
                    <span class="absolute left-0 h-2 transition-all duration-300 bg-red-500 w-44 max-w-34 group-hover:max-w-44 top-50p"></span>
                    <span class="block transition-all duration-300 transform ml-15 text-24 group-hover:translate-x-10"><i class="fal fa-long-arrow-right"></i></span>
                  </span>
                </span>
              </footer>
            </section>
          </a>
        </div>
      @endposts
    </div>
  </div>
</section>
