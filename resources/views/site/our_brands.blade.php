@extends('layouts.app')
@section('content')
@section('title', 'Adora Group | Our Brands')
@push('styles')
@endpush
<div class="wrapper" style="margin: auto;">
    <section class="inner_page">
        <div class="container text-center">
            <h1>OUR BRANDS</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('web_home')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Our Brands</li>
                </ol>
            </nav>
        </div>
    </section>
    <section class="brands">
        <div class="container">
            <div class="row">
                @if($brands)
                    @foreach($brands as $item)
                     <div class="col-lg-6 brand_s">
                    <div class="media">
                        <img src="{{url('assets/images/brands/'.$item->image)}}" class="mr-3 " alt="" title="">
                        <div class="media-body">
                            <p>
                                {{$item->description}}
                            </p>
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
