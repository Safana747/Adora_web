@extends('layouts.app')
@section('content')
@section('title', 'Adora Group | Company')
@push('styles')
    <link rel="stylesheet" href="{{url('assets/css/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/slick-theme.css')}}"/>

@endpush
<div class="wrapper" style="max-width: 1920px;margin: auto;">
    <section class="inner_page">
        <div class="container text-center">
            <h1>COMPANY</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('web_home')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Company</li>
                </ol>
            </nav>
        </div>
    </section>
    <section class="about">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <p>
                            It is a long established fact that a reader will be distracted by the readable content of a page when
                            looking at its layout. The point of using Lorem Ipsum is that it has a more or less normal distribution
                            of letters, as opposed to using Content here, content here', making it look like readable English. Many
                            desktop publishing packages and web page editors now use Lorem Ipsum as their default model text,
                            and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have
                            evolved over the years, sometimes by accident, sometimes on purpose (injected humour
                            <br>
                            <br>
                            It is a long established fact that a reader will be distracted by the readable content of a page when
                            looking at its layout. The point of using Lorem Ipsum is that it has a more or less normal distribution
                            of letters, as opposed to using Content here, content here', making it look like readable English. Many
                            desktop publishing packages and web page editors now use Lorem Ipsum as their default model text,
                            and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have
                            evolved over the years, sometimes by accident,
                        </p>
                    </div>
                    <div class="col-md-4 d-flex justify-content-center align-items-center">
                        <h2>
                            ABOUT<br>
                            Company
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mi_vi" id="vision_mission">
        <div class="container">
            <div class="row">
                <div class="col-md-6 vision">
                    <div class="col-md-12">
                        <h4>VISION</h4>
                        <p>
                            It is a long established fact that a reader will be distracted by the readable content
                            of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more
                            or less normal distribution

                        </p>
                    </div>
                </div>
                <div class="col-md-6 mission">
                    <div class="col-md-12">
                        <h4>MISSION</h4>
                        <p>
                            It is a long established fact that a reader will be distracted by the readable content of
                            a page when looking at its layout. The point of using Lorem Ipsum is that it has a more or less normal distribution of letters,
                            as opposed
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="team" id="team">
        <div class="container">
            <h4>MEET THE TEAM</h4>
            <div class="slick-slider">
                @if($teams)
                    @foreach($teams as $item)
                    <div class="slick_item">
                    <div>
                        <img src="{{url('assets/images/teams/'.$item->image)}}" class="img-fluid img-object-cover" title="Adora" alt="Adora">
                        <p>{{$item->name}}</p>
                        <span>{{$item->designation}}</span>
                    </div>
                </div>
                    @endforeach
                @endif

            </div>

        </div>
    </section>
    <section class="group" id="group_companies">
        <div class="container">
            <h4>Group of Companies</h4>
            <div class="row justify-content-center">
                @if($group_of_companies)
                    @foreach($group_of_companies as $item)
                     <div class="col-md-3">
                    <div>
                        <img src="{{url('assets/images/group_of_companies/'.$item->image)}}" class="img-fluid img-object-contain" title="Adora" alt="Adora">
                    </div>
                </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    @if(count($social_responsabilities)>0)
    <section class="social_resp" id="social_responsibilities">
        <div class="container">
            <h4>SOCIAL RESPONCIBILITIES</h4>
            <div class="slick-slider_2">
                    @foreach($social_responsabilities as $item)
                    <div>
                        <div class="media">
                            <div class="media-body">
                                <div>
                                    <h5 class="mt-0"> {{$item->title}}</h5>
                                    <p>
                                        {{$item->description}}
                                    </p>
                                    @if($item->knowmore_button==1)
                                    <a href="{{route('web_social_responsibilities_single',$item->seo_url)}}" class="btn btn-orange">KNOW MORE</a>
                                    @endif
                                </div>
                            </div>
                            <div class="img_overlay">
                                <img src="{{url('assets/images/social_responsibilities/'.$item->image)}}" title="Social Responcibilities">
                            </div>
                        </div>
                    </div>
                    @endforeach
            </div>
        </div>
    </section>
    @endif
    @if(count($awards)>0)
    <section class="awd_achve" id="awards_achivements">
        <div class="container">
            <div class="row">
                <div class="col-md-8 awd_achve_slider">
                    <div class="slick-slider_3">

                            @foreach($awards as $item)
                            <div class="slick_item">
                            <div class="card">
                                <img src="{{url('assets/images/awards_achievements/'.$item->image)}}" class="card-img-top" alt="Case Study" title="Case Study">
                                <div class="card-body">
                                    <div class="award_icon">
                                        <img src="{{url('assets/images/award.svg')}}" class="img-fluid">
                                    </div>
                                    <h5 class="card-title"> {{$item->title}} </h5>
                                    @if($item->knowmore_button==0)
                                    <a href="{{route('web_awards_single',$item->seo_url)}}" class="d-flex">LEARN MORE <img src="{{url('assets/images/arrow.svg')}}" width="15"> </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                            @endforeach

                    </div>
                </div>
                <div class="col-md-4 awd_achve_heading d-flex justify-content-center align-items-center">
                    <div>
                        <h4>AWARDS<br>ACHIVEMENTS</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif



</div>
@push('scripts')
<!-- slick JS -->
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="{{url('assets/js/slick.min.js')}}"></script>
<script>
    $(document).ready(function(){
        $('.slick-slider_2').slick({
            autoplay:true,
            speed:900,
            slidesToShow:1,
            slidesToScroll:1,
            pauseOnHover:false,
            dots: true,
            fade: true,
            cssEase: 'linear'
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

        $('.slick-slider').slick({
            autoplay:false,
            speed:900,
            slidesToShow:5,
            slidesToScroll:1,
            pauseOnHover:false,
            dots: false,
            prevArrow:'<button class="btn btn-orange PrevArrow"><img src="{{url('assets/images/back.svg')}}"></button>',
            nextArrow:'<button class="btn btn-orange NextArrow"><img src="{{url('assets/images/next.svg')}}"></button>',
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 5,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 1008,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 800,
                    settings: "unslick"
                }

            ]
        });

    });
</script>
@endpush

@endsection