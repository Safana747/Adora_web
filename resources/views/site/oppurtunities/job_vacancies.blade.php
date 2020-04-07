@extends('layouts.app')
@section('content')
@section('title', 'Adora Group | Job Vacancies')
@push('styles')
@endpush

<script>
    function isNumberKey(evt){
        var charCode = (evt.which) ? evt.which : evt.keyCode
        return !(charCode > 31 && (charCode < 48 || charCode > 57));
    }
    $(document).ready(function(){
        $(".actionBtn").click(function(){
            function validateEmail(email) {
                var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                return re.test(email);
            }
            fname=$("#fname").val();
            email=$("#email").val();
            phonetxt=$("#phone").val();
            applyingfor=$("#applyingfor").val();
            file=$(".file");
            var maxSize = '5010';

            if(fname.trim() == null || fname.trim()== "")
            {
                $("#msg").html("<p class='text-danger'><i class='fa fa-exclamation-triangle' aria-hidden='true'></i> Please Enter Name</p>");
                $("html, body").animate({scrollTop:0},"slow");
            }
            else if(email.trim() == null || email.trim()== "")
            {
                $("#msg").html("<p class='text-danger'><i class='fa fa-exclamation-triangle' aria-hidden='true'></i> Please Enter Email</p>");
                $("html, body").animate({scrollTop:0},"slow");
            }
            else if(!validateEmail(email))
            {
                $("#msg").html("<p class='text-danger'><i class='fa fa-exclamation-triangle' aria-hidden='true'></i> Please Enter Valid  Email Address</p>");
                $("html, body").animate({scrollTop:0},"slow");
            }
            else if(phonetxt.trim() == null || phonetxt.trim()== "")
            {
                $("#msg").html("<p class='text-danger'><i class='fa fa-exclamation-triangle' aria-hidden='true'></i> Please Enter phone</p>");
                $("html, body").animate({scrollTop:0},"slow");
            }
            else if(applyingfor.trim() == null || applyingfor.trim()== "")
            {
                $("#msg").html("<p class='text-danger'><i class='fa fa-exclamation-triangle' aria-hidden='true'></i> Please Enter the position applying for</p>");
                $("html, body").animate({scrollTop:0},"slow");
            }
            else if(!/(\.pdf|\.doc|\.docx)$/i.test(file.val())) {
                $("#msg").html("<p class='text-danger'><i class='fa fa-exclamation-triangle' aria-hidden='true'></i> Please Select Only  File(Eg: .pdf, .doc  etc)...</p>");
                $("html, body").animate({scrollTop:0},"slow");
            }
            else if((file[0].files[0].size/1024) > maxSize)
            {
                $("#msg").html("<p class='text-danger'><i class='fa fa-exclamation-triangle' aria-hidden='true'></i> File size must under 5 MB!...</p>");
                $("html, body").animate({scrollTop:0},"slow");
            }
            else
            {
                $(this).html('<i class="fa fa-spinner fa-spin"></i> <span>Loading...</span>');
                $(this).attr("disabled", true);
                $("#basic-form").submit();
            }
        });
    });

</script>
<div class="wrapper" style="max-width: 1920px;margin: auto;">
    <section class="inner_page">
        <div class="container text-center">
            <h1>Job Vacancies</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('web_home')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Job Vacancies</li>
                </ol>
            </nav>
        </div>
    </section>
    <section class="jobs">
        <div class="container">
            <div class="row">
                <div class="col-md-7 job_con">
                    <h4>Our people are our greatest asset</h4>
                    <h6 class="font-weight-bold">Eligibility Criteria</h6>
                    <ul class="">
                        <li>Minimum Qualification of +2 /ITI / Diploma</li>
                        <li>Minimum Age 20 years</li>
                    </ul>
                    <h6 class="font-weight-bold pt-3">Documents required</h6>
                    <ul>
                        <li>All original mark sheets related to SSC/CBSC (10th Class), Also, please carry a copy of set of all documents at the time of interview.</li>
                        <li>A copy of candidate's updated resume.</li>
                        <li>Passport size photographs.</li>
                        <li>An original identification proof issued by the government of India (Aadhar Card, Pan Card, Voter id, Passport etc.)</li>
                    </ul>
                    <p>
                        Want to know More About Our Job Vacancy
                        Call /whatsapp
                        <a href="https://api.whatsapp.com/send?phone=919656584947&text=&source=&data=" target="_blank">09656584947</a> / <a href="tel:04832712200">04832712200</a> or send a mail to
                        <a href="mailto:hr@adoragroup.in">hr@adoragroup.in</a>

                    </p>
                </div>
                <div class="col-md-5 job_form" id="applynow">
                    <div class="col-md-12">
                        <h4>LOOKING FOR OPPORTUNITIES</h4>
                        <div id="msg">
                            @if ($message = Session::get('view_msg'))
                                {!! $message !!}
                            @endif
                        </div>
                        <form id="basic-form" class="" method="post" action="{{route('web_job_vacancies_submit')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="text" id="fname" name="name" class="form-control" placeholder="Your Name">
                            </div>
                            <div class="form-group">
                                <input type="text" id="email" name="email" class="form-control" placeholder="Your Email">
                            </div>
                            <div class="form-group">
                                <input onkeypress="return isNumberKey(event);" type="text" id="phone" name="phone" class="form-control" placeholder="Mobile">
                            </div>

                            <div class="form-group">
                                <select id="jobs" class="custom-select" name="job_title">
                                    <option value="">Select Job</option>
                                        @foreach($jobvacancies as $item)
                                    <option value="{{$item->title}}" >{{$item->title}} </option>
                                        @endforeach
                                    <option value="others">Others</option>
                                </select>
                            </div>


                            <div class="form-group">
                                <textarea class="form-control" rows="5" id="applyingfor" name="applyingfor" placeholder="Description"></textarea>
                            </div>
                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" name="file" class="custom-file-input file" id="customFile">
                                    <label class="custom-file-label" for="customFile">Upload CV</label>
                                </div>
                            </div>
                            <div class="text-center">
                                <input type="button" class="btn btn-orange actionBtn" value="APPLY NOW">
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="job_vacancy">
        <div class="container">
            <h4 class="text-center">JOB VACANCIES</h4>
            <div class="row">
                <div class="col-md-12">
                    <div class="accordion" id="jobs_vacancy">
                        @if($jobvacancies)
                            @foreach($jobvacancies as $item)
                                <div class="card">
                            <div class="card-header" id="heading_job_{{$item->id}}" data-toggle="collapse" data-target="#job_{{$item->id}}" aria-expanded="true" aria-controls="job_{{$item->id}}">
                                <div>

                                    <h4 class="mb-0">
                                        {{$item->title}}
                                        @if($item->jobtype=="fulltime")
                                            <span class="badge badge-info">Full Time</span>
                                            @else
                                            <span class="badge badge-info">Part Time</span>
                                        @endif
                                    </h4>
                                    <p class="mb-0"><img src="{{url('assets/images/location.svg')}}"> {{$item->location}}</p>
                                </div>
                                <div>
                                        <div class="job_postdate">
                                            <img src="{{url('assets/images/calendar.svg')}}">
                                            @php
                                                $date=date_create($item->created_at);
                                            @endphp
                                            {{date_format($date,"d-m-Y")}}

                                        </div>

                                    <div class="right_arrows float-right">
                                        <img src="{{url('assets/images/bottom.svg')}}">
                                    </div>
                                </div>
                            </div>

                            <div id="job_{{$item->id}}" class="collapse" aria-labelledby="heading_job_{{$item->id}}" data-parent="#jobs_vacancy">
                                <div class="card-body">
                                    {!!$item->summary!!}
                                    <a href="#applynow" class="btn btn-orange mt-4">APPLY NOW</a>
                                </div>
                            </div>
                        </div>
                            @endforeach
                        @endif

                    </div>
                </div>

            </div>
        </div>
    </section>
</div>
@push('scripts')
    <script>
    // $('#jobs_vacancy .card-header').click(function () {
    //     var $this = $(this);
    //     $(this).addClass('active');
    // })


    $(document).on('click', '#jobs_vacancy .card-header', function(e){
        var $this = $(this);
        if(!$this.hasClass('collapsed')) {
            $(this).addClass('active');
        } else {
            $(this).removeClass('active');
        }
    })
</script>
@endpush

@endsection
