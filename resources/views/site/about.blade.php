@extends('layouts.master')

@section('seo')

@endsection

@section('content')

    <section class="height-90">
        <div class="container ">
            <div class="row text-center">
                <div class="col">
                    <h1 class="type--bold text-purple mb-0">STORM TIMELINE</h1>
                    <h5 class="type--bold mt-0">72 Hour Setup</h5>
                </div>
            </div>
            <div class="row mt--3">
                <div class="col"></div>
                <div class="col-md-8 col-12">
                    <div data-aos="slide-down">
                        <img class="my-0 image--md" alt="background" src="{{asset('frontend/images/graph-1.png')}}">
                    </div>

                    <div data-aos="slide-left">
                        <img class="my-0 image--md" alt="background" src="{{asset('frontend/images/graph-2.png')}}">
                    </div>

                    <div data-aos="slide-right">
                        <img class="my-0 image--md" alt="background" src="{{asset('frontend/images/graph-3.png')}}">
                    </div>

                    <div data-aos="slide-up">
                        <img class=" my-0 image--md" alt="background" src="{{asset('frontend/images/graph-4.png')}}">
                    </div>
                </div>
                <div class="col"></div>
            </div>
        </div>
    </section>

@endsection
