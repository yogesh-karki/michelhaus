<section class="text-module p-40">
    <div class="o-container">
   
        <div class="o-row">
            <div class="o-col u-col-6">
                <div class="text">
                    {!!$text_left!!}
                </div>
            </div>
            <div class="o-col u-col-6">
             

                <div class="text">
                    {!!$text_right!!}
                </div>

                @if($btn_title) 
                    <div>
                        <a href="" class="btn">
                            {{$btn_title}}
                        </a>
                    </div>
                @endif


            </div>
        </div>
    </div>
</section>