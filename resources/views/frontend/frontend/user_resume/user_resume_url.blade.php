{{--@if(session()->has('user'))--}}
{{--@extends('frontend.master.front_master')--}}
{{--@else--}}
@extends('frontend.master.front_master')
{{--@endif--}}
@section('title', 'Resume')
@section('content')
    <style type="text/css">
        .pencil_hoverthis {
            cursor: pointer;
        }

        .preview_container .decleartion_checkbox:before {
            border: none !important;
            width: 10px !important;
            border-top: 2px solid transparent !important;
            border-left: 2px solid transparent !important;
            border-right: 2px solid #1a7fd0 !important;
            border-bottom: 2px solid #1a7fd0 !important;
            transform: rotate(40deg) !important;
            transform-origin: 100% 100% !important;
        }
    </style>

    <section class="dashboard_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="preview_container" id="preview_html">
                        <div class="blank_resumebox card">
                            <div class="card-body resume_html" id="resume_html">
                                {!! $resume->template_html !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="result"></div>
    <script type="text/javascript">
        window.onload = function (e) {
            setTimeout(function () {
                $('#loader-overlay').addClass('scale0');
            }, 2000);
            $('#preview_html').find('div').attr('contenteditable', 'false');
            $('#preview_html').find('table tr td').attr('contenteditable', 'false');
        }
    </script>
@endsection