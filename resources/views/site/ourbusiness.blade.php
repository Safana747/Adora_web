@extends('layouts.app')
@section('content')
@section('title', 'Adora Group | Business')
@push('styles')

@endpush
<div class="wrapper" style="margin: auto;">
    <section class="inner_page">
        <div class="container text-center">
            <h1>BUSINESS</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('web_home')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Business</li>
                </ol>
            </nav>
        </div>
    </section>
    <section class="business_page">
        <div class="container-fluid">
            <div class="container">
                <div class="col-xl-12 business_list">
                    <div class="row">
                        <div class="col-md-5 b_img">
                            <img src="{{url('assets/images/business.jpg')}}" class="img-fluid">
                        </div>
                        <div class="col-md-7 b_cont">
                            <div>
                            <h4>IT & AUTOMATION</h4>
                            <p>
                                It is a long established fact that a reader will be distracted by the readable
                                content of a page when looking at its layout. The point of using Lorem Ipsum
                                is that it has a more-or-less normal distribution of letters, as opposed to using
                                'Content here, content here', making it look like readable English. Many desktop
                                publishing packages and web page editors now use Lorem Ipsum as their default model
                                text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
                                Various versions have evolved over the years, sometimes by accident, sometimes on purpose
                                (injected humour and the like)
                            </p>
                            <a href="{{route('web_it_automation')}}" class="btn btn-warning">Expore more</a>
                            <a href="" class="btn btn-outline-warning">DOWNLOAD BROCHURE</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 business_list">
                    <div class="row">
                        <div class="col-md-7 b_cont">
                            <div>
                            <h4>CONSULTING</h4>
                            <p>
                                It is a long established fact that a reader will be distracted by the readable
                                content of a page when looking at its layout. The point of using Lorem Ipsum
                                is that it has a more-or-less normal distribution of letters, as opposed to using
                                'Content here, content here', making it look like readable English. Many desktop
                                publishing packages and web page editors now use Lorem Ipsum as their default model
                                text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
                                Various versions have evolved over the years, sometimes by accident, sometimes on purpose
                                (injected humour and the like)
                            </p>
                            <a href="{{route('web_it_automation')}}" class="btn btn-warning">Expore more</a>
                            <a href="" class="btn btn-outline-warning">DOWNLOAD BROCHURE</a>
                            </div>
                        </div>
                        <div class="col-md-5 b_img">
                            <img src="{{url('assets/images/business.jpg')}}" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 business_list">
                    <div class="row">
                        <div class="col-md-5 b_img">
                            <img src="{{url('assets/images/business.jpg')}}" class="img-fluid">
                        </div>
                        <div class="col-md-7 b_cont">
                            <div>
                                <h4>CONTRACTING</h4>
                                <p>
                                    It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout. The point of using Lorem Ipsum
                                    is that it has a more-or-less normal distribution of letters, as opposed to using
                                    'Content here, content here', making it look like readable English. Many desktop
                                    publishing packages and web page editors now use Lorem Ipsum as their default model
                                    text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
                                    Various versions have evolved over the years, sometimes by accident, sometimes on purpose
                                    (injected humour and the like)
                                </p>
                                <a href="{{route('web_it_automation')}}" class="btn btn-warning">ABOUT SERVICE</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 business_list">
                    <div class="row">
                        <div class="col-md-7 b_cont">
                            <div>
                                <h4>TRADING</h4>
                                <p>
                                    It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout. The point of using Lorem Ipsum
                                    is that it has a more-or-less normal distribution of letters, as opposed to using
                                    'Content here, content here', making it look like readable English. Many desktop
                                    publishing packages and web page editors now use Lorem Ipsum as their default model
                                    text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
                                    Various versions have evolved over the years, sometimes by accident, sometimes on purpose
                                    (injected humour and the like)
                                </p>
                                <a href="{{route('web_it_automation')}}" class="btn btn-warning">MORE</a>
                                <a href="" class="btn btn-outline-warning">DOWNLOAD BROCHURE</a>
                            </div>
                        </div>
                        <div class="col-md-5 b_img">
                            <img src="{{url('assets/images/business.jpg')}}" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 business_list">
                    <div class="row">
                        <div class="col-md-5 b_img">
                            <img src="{{url('assets/images/business.jpg')}}" class="img-fluid">
                        </div>
                        <div class="col-md-7 b_cont">
                            <div>
                                <h4>MARKETING & OPERATIONS</h4>
                                <p>
                                    It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout. The point of using Lorem Ipsum
                                    is that it has a more-or-less normal distribution of letters, as opposed to using
                                    'Content here, content here', making it look like readable English. Many desktop
                                    publishing packages and web page editors now use Lorem Ipsum as their default model
                                    text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
                                    Various versions have evolved over the years, sometimes by accident, sometimes on purpose
                                    (injected humour and the like)
                                </p>
                                <a href="{{route('web_it_automation')}}" class="btn btn-warning">KNOW MORE</a>
                                <a href="" class="btn btn-outline-warning">DOWNLOAD BROCHURE</a>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </section>
</div>
@push('scripts')

@endpush

@endsection
