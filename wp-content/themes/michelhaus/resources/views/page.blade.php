@extends('layouts.app')

@section('content')
@if (have_rows('components'))
  @while (have_rows('components'))
    @php
      the_row();
      $component_name = get_row_layout();
    @endphp
    @if(view()->exists('components.' . $component_name))
      <x-dynamic-component :component="$component_name"/>
    @endif
  @endwhile
@endif
@endsection
