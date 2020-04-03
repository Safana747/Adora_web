@extends('layouts.app')
@section('content')
@section('title', 'Adora Group | IT & Automation')
@push('styles')
@endpush

<div class="wrapper" style="max-width: 1920px;margin: auto;">
    <section class="inner_page">
        <div class="container text-center">
            <h1>IT & Automation</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('web_home')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('web_company')}}">Company</a></li>
                    <li class="breadcrumb-item active" aria-current="page">IT & Automation</li>
                </ol>
            </nav>
        </div>
    </section>
    <section class="single_list">
        <div class="container">
            <div class="row main_content">
                <div class="col-md-6 d-flex justify-content-start align-items-center">

                    <div>
                        <h2>{{$landing_first->title}}</h2>
                        <p>{{$landing_first->description}}</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="{{url('assets/images/it_automation/'.$landing_first->image)}}" class="img-fluid">
                </div>
            </div>
            <div class="row mt-5 summernote_text">
                <div class="col-md-12">
                    {!!$landing_first->summary!!}
                </div>
            </div>
            <div class="row images_list mt-5 justify-content-center">

                {{--@foreach($it_automation as $index=>$item)--}}


                    <div class="col-md-12">
                        <img src="{{url('assets/images/it_automation/'.$landing_first->image)}}" class="img-fluid img-object-cover">
                    </div>

                {{--@endforeach--}}
            </div>
        </div>
    </section>
</div>
@push('scripts')
@endpush

@endsection
