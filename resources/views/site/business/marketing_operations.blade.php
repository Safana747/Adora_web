@extends('layouts.app')
@section('content')
@section('title', 'Adora Group | Marketing & Operations')
@push('styles')
@endpush
<div class="wrapper" style="margin: auto;">
    <section class="inner_page">
        <div class="container text-center">
            <h1>SERVICES</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('web_home')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('web_business')}}">Business</a></li>
                    <li class="breadcrumb-item active" aria-current="page">SERVICES</li>
                </ol>
            </nav>
        </div>
    </section>
    <section class="service">
        <div class="container">
            <div class="row">
                @if($operations)
                    @foreach($operations as $item)
                    <div class="col-md-12 service_single">
                    <div class="media">
                        <img src="{{url('assets/images/operations/'.$item->image)}}" class="mr-4 img-object-cover" alt="" title="">
                        <div class="media-body">
                            <div>
                                <h5 class="mt-0">{{$item->title}}</h5>
                                <p>
                                    {{$item->description}}
                                </p>
                                @if($item->knowmore_button==1)
                                    <a href="{{route('web_operations_single',$item->seo_url)}}" class="btn btn-orange">KNOW MORE</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                    @endforeach
                @endif
            </div>
            @php
                $table='operations';
                $pdf_brochure = DB::table('business_pdf_files')->where('bus_type', $table)->first();
            @endphp
            @if($pdf_brochure)
                @if (!($pdf_brochure->pdf_file == null || $pdf_brochure->pdf_file == ''))
                    <div class="col-xl-12 text-center pt-5">
                        <a target="_blank" href="{{url("assets/pdf_files/".$pdf_brochure->pdf_file)}}" class="btn btn-orange">DOWNLOAD BROCHURE</a>
                    </div>
                @endif
            @endif
        </div>
    </section>
</div>
@push('scripts')
@endpush

@endsection
