@extends('layouts.app')
@section('content')
@section('title', 'Adora Group')
@push('styles')
    <link rel="stylesheet" href="{{url('assets/css/slick.css')}}">

@endpush
<div class="wrapper" style="max-width: 1920px;margin: auto;">
    <section class="home_slider">
        <!-- slick -->
        <div class="container1">
            <div class="slick-slider">
                @if($landing)
                    @foreach($landing as $item)
                        <div>
                            <div class="d-flex justify-content-center align-items-center">
                                <div><img src="{{url('assets/images/homeslider/'.$item->image)}}" class="img-fluid img-object-cover"> </div>
                                <div>
                                    <div class="h1_class">{{$item->title}}</div>
                                    <p>{{$item->description}}</p>

                                    @if($item->knowmore_button==1)
                                        <a href="{{route('web_single',$item->seo_url)}}" class="btn btn-orange">KNOW MORE</a>
                                    @endif


                                    <div class="iso_logo line_block">
                                        <img src="{{url('assets/images/iso.png')}}" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
        <!-- slick JS -->
    </section>
    @if(count($newthoughts)>0)
    <section class="new_throught">
        <h1><span>NEW </span>THOUGHTS</h1>
        <div class="slick-slider_1">
                @foreach($newthoughts as $item)
            <div>
                <div class="d-flex justify-content-center align-items-center">
                    <div class="thought_content">
                        <div class="h1_class">{{$item->title}}</div>
                        <p>{{$item->description}}</p>

                        @if($item->knowmore_button==1)
                        <a href="{{route('web_newthought_single',$item->seo_url)}}" class="btn btn-orange">KNOW MORE</a>
                        @endif

                    </div>
                    <div><img src="{{url('assets/images/newthoughts/'.$item->image)}}" class="img-fluid img-object-cover"> </div>
                </div>
            </div>
                @endforeach
        </div>
    </section>
    @endif
    @if(count($ongoingprojects)>0)
    <section class="ongoing_project">
        <div class="container-fluid">
            <h2>ONGOING PROJECTS</h2>
            <div class="slick-slider_2">
                    @foreach($ongoingprojects as $item)
                <div>
                    <div class="media">
                        <img src="{{url('assets/images/ongoingprojects/'.$item->image)}}" class="img-object-cover" alt="Ongoing Projects" title="Ongoing Projects">
                        <div class="media-body">
                            <h5 class="mt-0">{{$item->title}}</h5>
                            <p>
                                {{$item->description}}
                            </p>

                            @if($item->knowmore_button==1)
                                <a href="{{route('web_ongoingproject_single',$item->seo_url)}}" class="btn btn-orange">KNOW MORE</a>
                            @endif

                        </div>
                    </div>
                </div>

                    @endforeach
            </div>
        </div>
    </section>
    @endif
    @if(count($casestudies)>0)
    <section class="case_study">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 case_heading">
                    <div>
                        <h3>CASE<br>STUDY</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
                    </div>
                </div>
                <div class="col-md-9 case_slider">
                    <div class="slick-slider_3">
                            @foreach($casestudies as $item)
                        <div class="slick_item">
                            <div class="card">
                                <img src="{{url('assets/images/casestudies/'.$item->image)}}" class="card-img-top" alt="Case Study" title="Case Study">
                                <div class="card-body">
                                    <h5 class="card-title">{{$item->title}} </h5>
                                    @if($item->knowmore_button==1)
                                    <a href="{{route('web_casestudy_single',$item->seo_url)}}" class="d-flex">LEARN MORE <img src="{{url('assets/images/arrow.svg')}}" width="15"> </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                            @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
    <section class="client_logos">
        <div class="container-fluid">
            <div class="slick-slider_4">
                @if($clients)
                    @foreach($clients as $item)
                <div class="slick_item">
                    <img src="{{url('assets/images/clients/'.$item->image)}}" class="img-fluid img-object-contain">
                </div>
                    @endforeach
                @endif

            </div>
        </div>
    </section>
</div>

@push('scripts')
    <!-- slick JS -->
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="{{url('assets/js/slick.min.js')}}"></script>
    <script>
        $(document).ready(function(){
            $('.slick-slider').slick({
                autoplay:true,
                autoplaySpeed:5000,
                speed:900,
                slidesToShow:1,
                slidesToScroll:1,
                pauseOnHover:false,
                dots:false,
                appendDots:$(".Slick-Navigation"),
                pauseOnDotsHover:false,
                cssEase:'linear',
                fade:true,
                nextArrow:false,
                prevArrow:false,
            });
            $('.slick-slider_1').slick({
                autoplay:true,
                autoplaySpeed:5000,
                speed:900,
                slidesToShow:1,
                slidesToScroll:1,
                pauseOnHover:false,
                dots: true,
                nextArrow:true,
                prevArrow:true,
            });
            $('.slick-slider_2').slick({
                autoplay:false,
                speed:900,
                slidesToShow:1,
                slidesToScroll:1,
                pauseOnHover:false,
                dots: false,
                prevArrow:'<button class="btn btn-orange PrevArrow"><img src="{{url('assets/images/back.svg')}}"></button>',
                nextArrow:'<button class="btn btn-orange NextArrow"><img src="{{url('assets/images/next.svg')}}"></button>',
            });
            $('.slick-slider_3').slick({
                autoplay:true,
                autoplaySpeed:5000,
                speed:900,
                slidesToShow:2,
                slidesToScroll:1,
                pauseOnHover:false,
                dots: false,
                prevArrow:false,
                nextArrow:'<button class="btn btn-light NextArrow"><img src="{{url('assets/images/right_arrow_gray.svg')}}"></button>',
            });
            $('.slick-slider_4').slick({
                autoplay:true,
                autoplaySpeed:5000,
                speed:900,
                slidesToShow:4,
                slidesToScroll:1,
                pauseOnHover:false,
                dots: false,
                prevArrow:false,
                nextArrow:false,
            });
        });
    </script>
@endpush

@endsection
