

<footer>
    @php 
        $logo_reverse = get_field('logo_reverse','option');
        $emb_1_reverse = get_field('emb_1_reverse','option'); 
        $emb_2_reverse = get_field('emb_2_reverse','option'); 
        $emb_3_reverse = get_field('emb_3_reverse','option'); 
        $kontakt = get_field('kontakt','option')
    @endphp
  <div class="o-container">
    <div class="o-row">
      <div class="o-col u-col-6">
        <div class="footer-wrap">
          <div class="logo">
            <p>Chalet in Ernen, Kanton Wallis</p>
            <img src="{{$logo_reverse['url']}}" alt="">
          </div>
          <div class="emblem u-flex">
            <img src="{{$emb_1_reverse['url']}}" alt="">
            <img src="{{$emb_2_reverse['url']}}" alt="">
            <img src="{{$emb_3_reverse['url']}}" alt="">

          </div>
        </div>
      </div>

      <div class="o-col u-col-6">
        <div class="contact">
        {!!$kontakt!!}
        </div>
      </div>
    </div>
  </div>
</footer>