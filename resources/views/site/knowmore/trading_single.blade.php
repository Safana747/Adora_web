@extends('layouts.app')
@section('content')
@section('title', 'Adora Group | Trading')
@push('styles')
@endpush

<div class="wrapper" style="margin: auto;">
    <section class="inner_page">
        <div class="container text-center">
            <h1>Trading</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('web_home')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Trading</li>
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
                        @if(!($landing_first->button_name==null)||!($landing_first->button_name=="")&&!($landing_first->button_link==null)||!($landing_first->button_link==""))
                            <a href="{{$landing_first->button_link}}" target="_blank" class="btn btn-orange">{{$landing_first->button_name}}</a>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="{{url('assets/images/trading/'.$landing_first->image)}}" class="img-fluid">

                </div>
            </div>
            <div class="row mt-5 summernote_text">
                <div class="col-md-12">
                    {!!$landing_first->summary!!}
                </div>
            </div>
            <div class="row images_list mt-5 justify-content-center">
                @php
                    $m_image=DB::table('images')
                    ->where('table_name','trading')
                    ->where('slider_id',$landing_first->id)
                    ->orderBy('id','desc')
                    ->get();
                @endphp
                @foreach($m_image as $index=>$item)
                    @php
                        $num=$index+1
                    @endphp
                    <div class="{{$num%3==0?'col-md-12':'col-md-6'}}">
                        <img src="{{url('assets/images/trading/'.$item->image)}}" class="img-fluid img-object-cover">
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
@push('scripts')
@endpush

@endsection
