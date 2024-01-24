<div>
<section class="tabular p-40">
    <div class="o-container">
        <div class="o-row">
            <div class="o-col u-col-12">
                <ul>
                @foreach($tabular_text as $item)
          
                <li> 
                    <p class="title">{{$item['title']}}</p>
                    <div class="text">
                        {!!$item['description']!!}
                    </div>
                </li>

                @endforeach

                </ul>   
       
            </div>
        </div>
    </div>
</section>
</div>