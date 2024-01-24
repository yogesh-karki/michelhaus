<section class="tabular p-40">
    
    <div class="o-container">
        <div class="o-row">
            @foreach($table as $item)
                <div class="o-col u-col-6">
                
                    <ul>
                        @foreach($item['table'] as $list)
                 
                        <li> 
                            <p class="title">{{$list['title']}}</p>
                            <div class="text">
                                    {!!$list['description']!!}
                            </div>
                        </li>

                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>
    </div>
</section>
