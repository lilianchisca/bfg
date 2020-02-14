<!doctype html>
<html {!! get_language_attributes() !!}>
@include('partials.head')
<body @php body_class() @endphp>
  @php wp_body_open() @endphp
  @php do_action('get_header') @endphp
  @include('partials.header')

  <div data-barba="wrapper">
    <main class="relative bg-white main" id="content-container" data-barba="container" data-barba-namespace="one-pager">
      <div id="body-classes" @php body_class() @endphp>
        <div class="min-h-screen overflow-hidden">
          @yield('content')

          @php do_action('get_footer') @endphp
          @include('partials.footer')
        </div>
      </div>
    </main>
  </div>

  @php wp_footer() @endphp
</body>
</html>
