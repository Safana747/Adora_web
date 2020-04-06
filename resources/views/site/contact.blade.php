@extends('layouts.app')
@section('content')
@section('title', 'Adora Group | Contact')
@push('styles')
@endpush
<div class="wrapper" style="max-width: 1920px;margin: auto;">
    <section class="inner_page">
        <div class="container text-center">
            <h1>CONTACT</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('web_home')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </section>
    <section class="contact">
        <div class="container">
            <h2>
                Hi!<br>
                We’d love to hear from you.
            </h2>
            <div class="row">
                <div class="col-md-3 main_address">
                    <ul class="list-unstyled con_social">
                        <li class="">
                            <a href="https://www.facebook.com/adoragroup.in" target="_blank">
                                <img src="{{url('assets/images/facebook.svg')}}" class="img-fluid" alt="Facebook" title="Facebook">
                            </a>
                        </li>
                        <li class="">
                            <a href="https://www.instagram.com/adoragroup.in/" target="_blank">
                                <img src="{{url('assets/images/instagram.svg')}}" class="img-fluid" alt="Instagram" title="Instagram">
                            </a>
                        </li>
                    </ul>
                    <div class="con_address">
                        <p>
                            <small>Administrative office:</small><br>
                            <strong>ADORA GROUP</strong><br>
                            17/8N, 2nd Floor, OK Building
                            NR Calicut Airport,  Karipur
                            Malappuram, Kerala, India
                            <br><br>
                            TEL: 0483 2712200
                            <br><br>
                            Email: all@adoragroup.in
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="con_address">
                        <p>
                            <small>Project office:</small><br>
                            <strong>Famsum ventures Private Ltd.</strong><br>
                            9/452, Narinada, Chakkittapara (via) Kayanna (po), Perambra Kozhikkode, Kerala, India - 673526
                            <br><br>
                            famsumventures@gmail.com
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="con_address">
                        <span class="country">Bahrain</span>
                        <p>
                            <strong>Adora Ghanawi softwares</strong><br>
                            Building No. 1043
                            Road 1315<br>
                            Block 913
                            Bukowarah Tiffany
                            <br><br>
                            Tel: +97335047907
                            <br><br>
                            email: gulf@adoragroup.in
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="con_address">
                        <span class="country">Oman</span>
                        <p>
                            <strong>Adora infosolutions</strong><br>
                            Po 1489, Salah -211<br>
                            Sultanate of Oman
                            <br><br>
                            Tel :+968 98451662
                            <br><br>
                            Email:gulf@adoragroup.in
                        </p>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <img src="{{url('assets/images/map.png')}}" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
</div>
@push('scripts')
@endpush

@endsection

