<section class="partners_logo p-40">
    <div class="o-container">
        <div class="o-row">
            @foreach($partners as $item)
                <div class="o-col u-col-6">
                    <p>{{$item['title']}}</p>
                    <img src="{{$item['logo']['url']}}" alt="">
                </div>
            @endforeach
        </div>
    </div>
</section>
