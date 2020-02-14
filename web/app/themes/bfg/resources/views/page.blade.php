@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @layouts('sections')
      @include('partials.sections')
    @endlayouts
  @endwhile
@endsection
