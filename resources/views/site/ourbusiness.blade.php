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
                @php
                    $business = DB::table('business')->where('bus_type','it_automation')->first();
                @endphp

                @if($business)
                <div class="col-xl-12 business_list">
                    <div class="row">
                        <div class="col-md-5 b_img">
                            <img src="{{url('assets/images/business/'.$business->image)}}" class="img-fluid">
                        </div>

                        <div class="col-md-7 b_cont">
                            <div>
                            <h4>{{$business->title}}</h4>
                            <p>
                                {{$business->description}}
                            </p>
                            <a href="{{route('web_it_automation')}}" class="btn btn-warning">{{$business->button_name}}</a>
                            <a href="" class="btn btn-outline-warning">DOWNLOAD BROCHURE</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endif

                @php
                    $business = DB::table('business')->where('bus_type','consulting')->first();
                @endphp

                @if($business)
                    <div class="col-xl-12 business_list">
                        <div class="row">
                            <div class="col-md-5 b_img">
                                <img src="{{url('assets/images/business/'.$business->image)}}" class="img-fluid">
                            </div>

                            <div class="col-md-7 b_cont">
                                <div>
                                    <h4>{{$business->title}}</h4>
                                    <p>
                                        {{$business->description}}
                                    </p>
                                    <a href="{{route('web_consulting')}}" class="btn btn-warning">{{$business->button_name}}</a>
                                    <a href="" class="btn btn-outline-warning">DOWNLOAD BROCHURE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                @php
                    $business = DB::table('business')->where('bus_type','contracting')->first();
                @endphp

                @if($business)
                    <div class="col-xl-12 business_list">
                        <div class="row">
                            <div class="col-md-5 b_img">
                                <img src="{{url('assets/images/business/'.$business->image)}}" class="img-fluid">
                            </div>

                            <div class="col-md-7 b_cont">
                                <div>
                                    <h4>{{$business->title}}</h4>
                                    <p>
                                        {{$business->description}}
                                    </p>
                                    <a href="{{route('web_contracting')}}" class="btn btn-warning">{{$business->button_name}}</a>
                                    <a href="" class="btn btn-outline-warning">DOWNLOAD BROCHURE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                @php
                    $business = DB::table('business')->where('bus_type','trading')->first();
                @endphp

                @if($business)
                    <div class="col-xl-12 business_list">
                        <div class="row">
                            <div class="col-md-5 b_img">
                                <img src="{{url('assets/images/business/'.$business->image)}}" class="img-fluid">
                            </div>

                            <div class="col-md-7 b_cont">
                                <div>
                                    <h4>{{$business->title}}</h4>
                                    <p>
                                        {{$business->description}}
                                    </p>
                                    <a href="{{route('web_trading')}}" class="btn btn-warning">{{$business->button_name}}</a>
                                    <a href="" class="btn btn-outline-warning">DOWNLOAD BROCHURE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                @php
                    $business = DB::table('business')->where('bus_type','operations')->first();
                @endphp

                @if($business)
                    <div class="col-xl-12 business_list">
                        <div class="row">
                            <div class="col-md-5 b_img">
                                <img src="{{url('assets/images/business/'.$business->image)}}" class="img-fluid">
                            </div>

                            <div class="col-md-7 b_cont">
                                <div>
                                    <h4>{{$business->title}}</h4>
                                    <p>
                                        {{$business->description}}
                                    </p>
                                    <a href="{{route('web_marketing_operations')}}" class="btn btn-warning">{{$business->button_name}}</a>
                                    <a href="" class="btn btn-outline-warning">DOWNLOAD BROCHURE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif



            </div>
        </div>
    </section>
</div>
@push('scripts')

@endpush

@endsection
