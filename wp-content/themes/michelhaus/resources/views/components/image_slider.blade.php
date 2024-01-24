<section class="fullslider swiper">
    <div class="swiper-wrapper">
        @foreach($image_caption as $item)

            <div class="swiper-slide  {{$item['display_type']}}">
                <figure>
                    <img src="{{$item['image']['url']}}" alt="">
                </figure>
                <div class="o-container">
                    <p>{{$item['caption']}}</p>
                </div>
            </div>
        @endforeach
    </div>
    <div class="swiper-button-next">
        <img src="{{ asset('images/arrow.cf40b8.png') }}" alt="">
    </div>
    <!-- <div class="swiper-button-prev">
    <img src="{{ asset('images/arrow.cf40b8.png') }}" alt="">
    </div> -->
</section>
