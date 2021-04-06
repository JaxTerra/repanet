@extends('layouts.master')

@section('seo')
    @include('site.seo.homepage')
@endsection

@section('content')

    <section class="space--xxs bg--image">
        <div class="container">
            <div class="row text-center mx-md-0 mx-1">
                <div class="col-md-4 offset-md-2 ">
                    <div class="feature feature--featured feature-2 boxed boxed--border bg--white text-left">
                        <a href="tel:0976674343">
                            <i class="fas fa-phone-alt fa-2x icon-width-13"></i>0976674343
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature feature--featured feature-2 boxed boxed--border bg--white text-left">
                        <a href="mailto:admin@repanet.com.au">
                            <i class="far fa-envelope fa-2x icon-width-13"></i>admin@repanet.com.au
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">

                <div class="col">
                    <div class="masonry masonry--gapless mx-md-5 mx-4">
                        <div class="masonry__container bg--secondary masonry--active">
                            <div class="col-md-4 col-12 masonry__item card">
                                <div class="project-thumb hover-element height-40">
                                    <a href="#">
                                        <div class="hover-element__initial">
                                            <div class="background-image-holder">
                                                <img alt="background" src="frontend/images/BS144969-P9.jpeg">
                                            </div>
                                        </div>
                                        <div class="hover-element__reveal" data-overlay="9">
                                            <div class="project-thumb__title">
                                                <h5>Nike Active</h5> <span>Digital Marketing</span> </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="card-footer text-center">
                                    <h3 class="text-black mb-2">Property Maintenance</h3>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 masonry__item card">
                                <div class="project-thumb hover-element height-40">
                                    <a href="#">
                                        <div class="hover-element__initial">
                                            <div class="background-image-holder"> <img alt="background" src="frontend/images/cabinet-making-business.jpeg"> </div>
                                        </div>
                                        <div class="hover-element__reveal" data-overlay="9">
                                            <div class="project-thumb__title">
                                                <h5>Unvest Capital</h5> <span>Brand Collateral</span> </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="card-footer text-center">
                                    <h3 class="text-black mb-2">Cabinet Making</h3>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 masonry__item card" >
                                <div class="project-thumb hover-element height-40">
                                    <a href="#">
                                        <div class="hover-element__initial">
                                            <div class="background-image-holder"> <img alt="background" src="frontend/images/Electrical+&+Data.jpeg"> </div>
                                        </div>
                                        <div class="hover-element__reveal" data-overlay="9">
                                            <div class="project-thumb__title">
                                                <h5>Nike Active</h5> <span>Digital Marketing</span> </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="card-footer text-center">
                                    <h3 class="text-black mb-2">Electrical/DATA</h3>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 masonry__item card">
                                <div class="project-thumb hover-element height-40">
                                    <a href="#">
                                        <div class="hover-element__initial">
                                            <div class="background-image-holder"> <img alt="background" src="frontend/images/landscaping-1080x675.jpeg"> </div>
                                        </div>
                                        <div class="hover-element__reveal" data-overlay="9">
                                            <div class="project-thumb__title">
                                                <h5>Unvest Capital</h5> <span>Brand Collateral</span> </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="card-footer text-center">
                                    <h3 class="text-black mb-2">Gardening/Landscaping</h3>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 masonry__item card" >
                                <div class="project-thumb hover-element height-40">
                                    <a href="#">
                                        <div class="hover-element__initial">
                                            <div class="background-image-holder"> <img alt="background" src="frontend/images/security-officerx700.jpeg"> </div>
                                        </div>
                                        <div class="hover-element__reveal" data-overlay="9" >
                                            <div class="project-thumb__title">
                                                <h5>Nike Active</h5> <span>Digital Marketing</span> </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="card-footer text-center">
                                    <h3 class="text-black mb-2">Security Surveillance</h3>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 masonry__item card" >
                                <div class="project-thumb hover-element height-40">
                                    <a href="#">
                                        <div class="hover-element__initial">
                                            <div class="background-image-holder"> <img alt="background" src="frontend/images/Shopfitting-e1417664365541.jpeg"> </div>
                                        </div>
                                        <div class="hover-element__reveal" data-overlay="9">
                                            <div class="project-thumb__title">
                                                <h5>Unvest Capital</h5> <span>Brand Collateral</span> </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="card-footer text-center">
                                    <h3 class="text-black mb-2">Shop Fitting</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
