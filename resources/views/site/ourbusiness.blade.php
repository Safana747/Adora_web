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
                        <div class="col-lg-5 b_img">
                            <img src="{{url('assets/images/business/'.$business->image)}}" class="img-fluid img-object-cover">
                        </div>

                        <div class="col-lg-7 b_cont">
                            <div>
                            <h4>{{$business->title}}</h4>
                            <p>
                                {{$business->description}}
                            </p>
                            <a href="{{route('web_it_automation')}}" class="btn btn-warning">{{$business->button_name}}</a>
                                @php
                                $table='it_automation';
                                $pdf_brochure = DB::table('business_pdf_files')->where('bus_type', $table)->first();
                                @endphp
                                @if($pdf_brochure)
                                    @if (!($pdf_brochure->pdf_file == null || $pdf_brochure->pdf_file == ''))
                                        <a href="{{url("assets/pdf_files/".$pdf_brochure->pdf_file)}}" class="btn btn-outline-warning" target="_blank">DOWNLOAD BROCHURE</a>
                                    @endif
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endif

                @php
                    $business = DB::table('business')->where('bus_type','consulting')->first();
                @endphp

                @if($business)
                    <div class="col-xl-12 business_list bus_right" id="consulting">
                        <div class="row">
                            <div class="col-lg-7 b_cont">
                                <div>
                                    <h4>{{$business->title}}</h4>
                                    <p>
                                        {{$business->description}}
                                    </p>
                                    <a href="{{route('web_consulting')}}" class="btn btn-warning">{{$business->button_name}}</a>
                                    @php
                                        $table='consulting';
                                        $pdf_brochure = DB::table('business_pdf_files')->where('bus_type', $table)->first();
                                    @endphp
                                    @if($pdf_brochure)
                                        @if (!($pdf_brochure->pdf_file == null || $pdf_brochure->pdf_file == ''))
                                            <a href="{{url("assets/pdf_files/".$pdf_brochure->pdf_file)}}" class="btn btn-outline-warning" target="_blank">DOWNLOAD BROCHURE</a>
                                        @endif
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-5 b_img">
                                <img src="{{url('assets/images/business/'.$business->image)}}" class="img-fluid img-object-cover">
                            </div>
                        </div>
                    </div>
                @endif

                @php
                    $business = DB::table('business')->where('bus_type','contracting')->first();
                @endphp

                @if($business)
                    <div class="col-xl-12 business_list" id="contracting">
                        <div class="row">
                            <div class="col-lg-5 b_img">
                                <img src="{{url('assets/images/business/'.$business->image)}}" class="img-fluid img-object-cover">
                            </div>

                            <div class="col-lg-7 b_cont">
                                <div>
                                    <h4>{{$business->title}}</h4>
                                    <p>
                                        {{$business->description}}
                                    </p>
                                    <a href="{{route('web_contracting')}}" class="btn btn-warning">{{$business->button_name}}</a>
                                    @php
                                        $table='contracting';
                                        $pdf_brochure = DB::table('business_pdf_files')->where('bus_type', $table)->first();
                                    @endphp
                                    @if($pdf_brochure)
                                    @if (!($pdf_brochure->pdf_file == null || $pdf_brochure->pdf_file == ''))
                                            <a href="{{url("assets/pdf_files/".$pdf_brochure->pdf_file)}}" class="btn btn-outline-warning" target="_blank">DOWNLOAD BROCHURE</a>
                                        @endif
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                @php
                    $business = DB::table('business')->where('bus_type','trading')->first();
                @endphp

                @if($business)
                    <div class="col-xl-12 business_list bus_right" id="trading">
                        <div class="row">
                            <div class="col-lg-7 b_cont">
                                <div>
                                    <h4>{{$business->title}}</h4>
                                    <p>
                                        {{$business->description}}
                                    </p>
                                    <a href="{{route('web_trading')}}" class="btn btn-warning">{{$business->button_name}}</a>
                                    @php
                                        $table='trading';
                                        $pdf_brochure = DB::table('business_pdf_files')->where('bus_type', $table)->first();
                                    @endphp
                                    @if($pdf_brochure)
                                        @if (!($pdf_brochure->pdf_file == null || $pdf_brochure->pdf_file == ''))
                                            <a href="{{url("assets/pdf_files/".$pdf_brochure->pdf_file)}}" class="btn btn-outline-warning" target="_blank">DOWNLOAD BROCHURE</a>
                                        @endif
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-5 b_img">
                                <img src="{{url('assets/images/business/'.$business->image)}}" class="img-fluid img-object-cover">
                            </div>
                        </div>
                    </div>
                @endif

                @php
                    $business = DB::table('business')->where('bus_type','operations')->first();
                @endphp

                @if($business)
                    <div class="col-xl-12 business_list" id="marketingoperations">
                        <div class="row">
                            <div class="col-lg-5 b_img">
                                <img src="{{url('assets/images/business/'.$business->image)}}" class="img-fluid img-object-cover">
                            </div>

                            <div class="col-lg-7 b_cont">
                                <div>
                                    <h4>{{$business->title}}</h4>
                                    <p>
                                        {{$business->description}}
                                    </p>
                                    <a href="{{route('web_marketing_operations')}}" class="btn btn-warning">{{$business->button_name}}</a>
                                    @php
                                        $table='operations';
                                        $pdf_brochure = DB::table('business_pdf_files')->where('bus_type', $table)->first();
                                    @endphp
                                    @if($pdf_brochure)
                                        @if (!($pdf_brochure->pdf_file == null || $pdf_brochure->pdf_file == ''))
                                            <a href="{{url("assets/pdf_files/".$pdf_brochure->pdf_file)}}" class="btn btn-outline-warning" target="_blank">DOWNLOAD BROCHURE</a>
                                        @endif
                                    @endif
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
