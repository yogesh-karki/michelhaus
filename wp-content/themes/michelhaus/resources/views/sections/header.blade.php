<header>
    @php 
        $kontakt = get_field('kontakt','option')
    @endphp
  <div class="o-container">
    <div class="o-row u-align-center">
      <div class="o-col u-col-6">
        <p>Chalet in Ernen,Kanton Wallis</p>
      </div>
      <div class="o-col u-col-6">
          <div class="mb-menu mb-show" onclick="document.querySelector('.mb-nav ').classList.add('active')">
            <p>Menu</p>
          </div>

          <div class="nav u-flex u-justify-end ">
            <button class='btn no-border'>
              English
            </button>

            <a href="" class="btn ml-24">Buchen</a>
          </div>
      </div>
    </div>
  </div>

  <div class="mb-nav ">
    <div class="close-btn" onclick="document.querySelector('.mb-nav ').classList.remove('active')">
      <span></span>
      <span></span>
    </div>
    
    

    <ul>
      <li>
        <div class="top_flex ">
          <button class='btn no-border'>
            English
          </button>

          <a href="" class="btn ml-24">Buchen</a>
        </div>
      </li>

      <li>
        <p>Willkommen im Michelhaus</p>
      </li>

      <li>
        <p>Ferienwohnungen</p>
      </li>

      <li>
        <p>Ort und Umgebung</p>
      </li>   
    </ul>

    <div class="header-contact">
      {!!$kontakt!!}
    </div>
  </div>
</header>