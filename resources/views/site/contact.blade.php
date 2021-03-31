@extends('layouts.master')

@section('seo')

@endsection

@section('content')
    <section class="cover imagebg height-50"
             data-gradient-bg="#4876BD,#5448BD,#8F48BD,#BD48B1">
        <div class="background-image-holder background--top">
            <img alt="Logo Strip" src="{{asset('logos/logo_strip.png')}}" />
        </div>
    </section>

    <section class="text-center bg--gradient">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="color--white type--bold">Contact</h1>
                    <div class="icon-circle">
                        <i class="icon icon--lg material-icons">mode_edit</i>
                    </div>
                    <hr>
                </div>
            </div>
            <div class="row justify-content-center">
                <h2 class="color--white type--bold">Contact us directly</h2>
            </div>
            <div class="row justify-content-center no-gutters">
                <div class="col-md-8 col-lg-7">
                    <form class="text-left form-email row mx-0"
                          data-success="Thanks for your enquiry, we'll be in touch shortly."
                          data-error="Please fill in all fields correctly."
                          method="POST"
                          action="{{url('contact-send')}}">
                        @csrf
                        <div class="col-md-6">
                            <label class="color--white type--bold">Your Name:</label>
                            <input type="text" name="name" class="validate-required">
                        </div>
                        <div class="col-md-6">
                            <label class="color--white type--bold">Email Address:</label>
                            <input type="email" name="email" class="validate-required validate-email">
                        </div>
                        <div class="col-md-12">
                            <label class="color--white type--bold">Message:</label>
                            <textarea rows="6" name="message" class="validate-required"></textarea>
                        </div>
                        <div class="col-md-6 col-xs-12 mt--1">
                            @captcha
                        </div>
                        <div class="col-md-6 col-xs-12 pull-right mt--1">
                            <button type="submit" class="btn btn--primary type--uppercase">Send Enquiry</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
