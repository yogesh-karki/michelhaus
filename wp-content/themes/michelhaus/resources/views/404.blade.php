@extends('layouts.app')

@section('content')

    @php 
        $error_image = get_field('error_image','option');
        $error_text = get_field('error_text','option')
    @endphp
  <div class="error-page p-40">
    <div class="o-container">
      <div class="error">
        <img src="{{$error_image['url']}}" alt="">
      
        <div>
          {!!$error_text!!}
        </div>
      </div>
    </div>
  </div>



@endsection
