@extends('layouts.app')
@section('content')
@section('title', 'Adora Group | Consulting')
@push('styles')
@endpush
<div class="wrapper" style="max-width: 1920px;margin: auto;">
    <section class="inner_page">
        <div class="container text-center">
            <h1>Consulting</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('web_home')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Consulting</li>
                </ol>
            </nav>
        </div>
    </section>
    <section class="service">
        <div class="container">
            <div class="row">
                @if($consulting)
                    @foreach($consulting as $item)
                    <div class="col-md-12 service_single">
                    <div class="media">
                        <img src="{{url('assets/images/consulting/'.$item->image)}}" class="mr-4 img-object-cover" alt="" title="">
                        <div class="media-body">
                            <div>
                                <h5 class="mt-0">{{$item->title}}</h5>
                                <p>
                                    {{$item->description}}
                                </p>
                                @if($item->knowmore_button==1)
                                    <a href="{{route('web_consulting_single',$item->seo_url)}}" class="btn btn-orange">KNOW MORE</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
</div>
@push('scripts')
@endpush

@endsection