<section class="pb-8 pt-8 bg-white" style="border-bottom-right-radius: 80px; border-bottom-left-radius: 80px;">
    <div class="container py-3 px-7" style="position: relative;">
        <div
            class="col-sm-6 col-md-6 col-lg-6 align-items-center mt-md-0 pt-md-2 pt-lg-3 pb-3 text-center mx-auto text-center">
            <h2>What successful candidates say about Happiest Resume</h2>
        </div>
    </div>
    <div class="candidates-testimonial-main-right-left p-0 m-0">
        <div class="candidates-testimonial-right-left row my-4" style="width: auto;">

            @if(count($testimonials_active))
            @foreach ($testimonials_active as $key => $testimonial)
            @php
            ++$key;
            @endphp
            <div class="candidates-testimonial-card col-md-2 py-3 px-3 border-0 text-center mx-2" style="height: 160px;">
                <div class="content">
                    <div class="person_img text-center">
                        @if(file_exists($testimonial->image))
                        <img src="{{url($testimonial->image)}}" class="m-auto rounded">
                        @else
                        <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(26).jpg" class="m-auto rounded">
                        @endif
                    </div>
                    <h6 class="person_name m-0 mb-1 mt-3 text-center">
                        {{ isset($testimonial->name)?$testimonial->name:'' }}
                    </h6>
                </div>
                <p class="person_is_in m-0 p-0 text-center"> {{ isset($testimonial->designation)?$testimonial->designation:'' }}</p>
            </div>
            @if($key%4 == 0 || $key == 1) @endif
            @endforeach
            @endif
        </div>
    </div>
</section>