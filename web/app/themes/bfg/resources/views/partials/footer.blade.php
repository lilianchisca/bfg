<footer class="relative text-white bg-black js-footerline">
  <div class="c-footerline"></div>
  <div class="container">
    <div class="flex flex-wrap pt-140 pb-110">
      <div class="w-7/12">
        <div class="flex flex-wrap">
          <div class="flex flex-col pr-46">
            <img class="my-15" src="@asset('images/bbblight.png')" width="156" height="59" alt="British Business Bank Logo">

            @hasoption('british_business_bank_twitter_link')
              <a class="inline-flex mt-29 group" target="@option('british_business_bank_twitter_link', 'target')" href="@option('british_business_bank_twitter_link', 'url')">
                <span class="flex items-center justify-center transition-all duration-300 bg-transparent border-2 w-45 h-45 border-ablue-500 group-hover:border-twitter group-hover:bg-twitter">
                  <i class="fab fa-twitter"></i>
                </span>
                <span class="inline-flex items-center pr-20 text-white transition-all duration-300 border-t-2 border-b-2 border-r-2 group-hover:border-twitter border-ablue-500 tracking-body h-45 text-16 pl-15">@option('british_business_bank_twitter_link', 'title')</span>
              </a>
            @endoption
            @hasoption('british_business_bank_linkedin_link')
              <a class="inline-flex mt-15 group" target="@option('british_business_bank_linkedin_link', 'target')" href="@option('british_business_bank_linkedin_link', 'url')">
                <span class="flex items-center justify-center transition-all duration-300 bg-transparent border-2 w-45 h-45 border-ablue-500 group-hover:border-linkedin group-hover:bg-linkedin">
                  <i class="fab fa-linkedin-in"></i>
                </span>
                <span class="inline-flex items-center pr-20 text-white transition-all duration-300 border-t-2 border-b-2 border-r-2 group-hover:border-linkedin border-ablue-500 tracking-body h-45 text-16 pl-15">@option('british_business_bank_linkedin_link', 'title')</span>
              </a>
            @endoption
            @hasoption('british_business_bank_website')
              <a class="inline-flex mt-15 group" target="@option('british_business_bank_website', 'target')" href="@option('british_business_bank_website', 'url')">
                <span class="flex items-center justify-center transition-all duration-300 bg-transparent border-2 w-45 h-45 border-ablue-500 group-hover:border-red-500 group-hover:bg-red-500">
                  <i class="far fa-globe-americas"></i>
                </span>
                <span class="inline-flex items-center pr-20 text-white transition-all duration-300 border-t-2 border-b-2 border-r-2 group-hover:border-red-500 border-ablue-500 tracking-body h-45 text-16 pl-15">@option('british_business_bank_website', 'title')</span>
              </a>
            @endoption
          </div>
          <div class="flex flex-col pr-46">
            <img src="@asset('images/icaewlight.png')" width="55" height="89" alt="ICAEW Logo">

            @hasoption('icaew_twitter_link')
              <a class="inline-flex mt-29 group" target="@option('icaew_twitter_link', 'target')" href="@option('icaew_twitter_link', 'url')">
                <span class="flex items-center justify-center transition-all duration-300 bg-transparent border-2 w-45 h-45 border-ablue-500 group-hover:border-twitter group-hover:bg-twitter">
                  <i class="fab fa-twitter"></i>
                </span>
                <span class="inline-flex items-center pr-20 text-white transition-all duration-300 border-t-2 border-b-2 border-r-2 group-hover:border-twitter border-ablue-500 tracking-body h-45 text-16 pl-15">@option('icaew_twitter_link', 'title')</span>
              </a>
            @endoption
            @hasoption('icaew_linkedin_link')
              <a class="inline-flex mt-15 group" target="@option('icaew_linkedin_link', 'target')" href="@option('icaew_linkedin_link', 'url')">
                <span class="flex items-center justify-center transition-all duration-300 bg-transparent border-2 w-45 h-45 border-ablue-500 group-hover:border-linkedin group-hover:bg-linkedin">
                  <i class="fab fa-linkedin-in"></i>
                </span>
                <span class="inline-flex items-center pr-20 text-white transition-all duration-300 border-t-2 border-b-2 border-r-2 group-hover:border-linkedin border-ablue-500 tracking-body h-45 text-16 pl-15">@option('icaew_linkedin_link', 'title')</span>
              </a>
            @endoption
            @hasoption('icaew_website')
              <a class="inline-flex mt-15 group" target="@option('icaew_website', 'target')" href="@option('icaew_website', 'url')">
                <span class="flex items-center justify-center transition-all duration-300 bg-transparent border-2 w-45 h-45 border-ablue-500 group-hover:border-red-500 group-hover:bg-red-500">
                  <i class="far fa-globe-americas"></i>
                </span>
                <span class="inline-flex items-center pr-20 text-white transition-all duration-300 border-t-2 border-b-2 border-r-2 group-hover:border-red-500 border-ablue-500 tracking-body h-45 text-16 pl-15">@option('icaew_website', 'title')</span>
              </a>
            @endoption
          </div>
        </div>
      </div>

      <div class="w-5/12 pl-32">
        <h3 class="font-bold text-22 tracking-heading-sm">@option('newsletter_title')</h3>
        <div class="mt-13 text-16 leading-body tracking-body">@option('newsletter_description')</div>

        <form action="/" class="mt-32">
          <input class="block w-full placeholder-white transition-all duration-300 bg-transparent border-2 outline-none hover:border-ablue-700 focus:outline-none focus:border-blue-500 py-19 px-26 text-13 tracking-input border-ablue-500" type="text" name="email" id="email" placeholder="ENTER EMAIL ADDRESS">

          @button([
            'type' => 'submit',
            'title' => 'CTA Text',
            'style' => 'red',
            'classes' => 'mt-24'
          ])@endbutton
        </form>

        <div class="opacity-50 mt-19 text-13 leading-body-sm tracking-body-sm content-link-line">@option('bottom_notice')</div>
      </div>
    </div>
  </div>
</footer>
