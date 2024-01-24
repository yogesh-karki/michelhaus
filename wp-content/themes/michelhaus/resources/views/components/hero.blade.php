<section class="hero">
   
    @php 
        $logo = get_field('logo','option');
    @endphp
    <div class="o-container">
        <div class="o-row">
            <div class="o-col u-col-6@md ">
                <div class="hero__left u-flex u-flex-column u-justify-space-between">
                    <div class="logo">
                        <img src="{{$logo['url']}}" alt="">
                    </div>

                    <div class="emblem u-flex">
                        

                        @foreach($emblems as $emb)

                        <img src="{{$emb['emblem']['url']}}" alt="">

                        @endforeach
                    
                    </div>
                </div>
            </div>

            <div class="o-col u-col-6 ">
                <div class="hero-slider swiper">
                    <div class="swiper-wrapper">
                        <!-- Use repeater -->
                        @foreach($slider_images as $img)
                            <div class="swiper-slide">
                                <img src="{{$img['hero_image']['url']}}" alt="">
                                
                            </div>
                        @endforeach
                   
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
