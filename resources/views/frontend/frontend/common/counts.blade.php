<section class="fixed_clients">
    <div class="container">
        <div class="row">
            @if(count($counts))
            @foreach ($counts as $item)
            <div class="col-md-3 col-sm-6 aos-init aos-animate" data-aos="fade-up-right" data-aos-duration="1000">
                <div class="counter-wrap card">
                    <h2>{{ isset($item->count)?$item->count:'' }}</h2>
                    <h3>{{ isset($item->title)?$item->title:'' }}</h3>
                    <div class="counter_imgbox">
                        @if(file_exists($item->icon))
                        <img src="{{ url($item->icon) }}">
                        @else
                        <img src="{{url('public/front').'/'}}images/register.png">
                        @endif
                        <div></div>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
            {{-- <div class="col-md-3 col-sm-6 aos-init aos-animate" data-aos="fade-up-right" data-aos-duration="1000">
                <div class="counter-wrap card">
                    <h2>10000</h2>
                    <h3>Registered</h3>
                    <div class="counter_imgbox">
                        <img src="{{url('public/front').'/'}}images/register.png">
            <div></div>
        </div>
    </div>
    </div>

    <div class="col-md-3 col-sm-6 aos-init aos-animate" data-aos="fade-down" data-aos-duration="1000">
        <div class="counter-wrap card">
            <h2><span>7500</span></h2>
            <h3>Saved Cv's</h3>
            <div class="counter_imgbox">
                <img src="{{url('public/front').'/'}}images/save-cv.png">
                <div></div>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
        <div class="counter-wrap card">
            <h2><span>20000</span></h2>
            <h3>Downloades</h3>
            <div class="counter_imgbox">
                <img src="{{url('public/front').'/'}}images/download.png">
                <div></div>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6 aos-init aos-animate" data-aos="fade-up-left" data-aos-duration="1000">
        <div class="counter-wrap card">
            <h2><span>350</span></h2>
            <h3>Happy Clients</h3>
            <div class="counter_imgbox">
                <img src="{{url('public/front').'/'}}images/happy-client.png">
                <div></div>
            </div>
        </div>
    </div> --}}
    </div>
    </div>
</section>