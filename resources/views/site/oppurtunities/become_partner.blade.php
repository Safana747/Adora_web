@extends('layouts.app')
@section('content')
@section('title', 'Adora Group | Become a Partner')
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
            address=$("#address").val();
            description=$("#description").val();

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
            else if(address.trim() == null || address.trim()== "")
            {
                $("#msg").html("<p class='text-danger'><i class='fa fa-exclamation-triangle' aria-hidden='true'></i> Please Enter Address</p>");
                $("html, body").animate({scrollTop:0},"slow");
            }
            else if(description.trim() == null || description.trim()== "")
            {
                $("#msg").html("<p class='text-danger'><i class='fa fa-exclamation-triangle' aria-hidden='true'></i> Please Enter Description</p>");
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
            <h1>Become a Partner</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('web_home')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Become a Partner</li>
                </ol>
            </nav>
        </div>
    </section>
    <section class="partner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 starts text-center">
                    <h2>Get Start Partnership</h2>
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <span>1</span>
                            <p>REGISTER</p>
                            <small>
                                Fill the Partner Application Form
                            </small>
                        </div>
                        <div class="col-md-4 text-center">
                            <span>2</span>
                            <p>Install App</p>
                            <small>
                                Install MRMS App and Activate by Registered Mobile Number and OTP <a href="https://play.google.com/store/apps/details?id=com.adora.mrm&hl=en_IN" target="_blank">Link</a>
                            </small>
                        </div>
                        <div class="col-md-4 text-center">
                            <span>3</span>
                            <p>Get Start</p>
                            <small>
                                Our representative will contact you shortly !
                                can’t wait : Call/whatsapp +919656584947

                            </small>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 partner_contact">
                    <p>
                        Want to know More About Our Business Partnership Program
                        Call /whatsapp <a href="https://api.whatsapp.com/send?phone=919656584947&text=&source=&data=" target="_blank">09656584947</a> / <a href="tel:04832712200">04832712200</a> or send a mail to
                        <a href="mailto:all@adoragroup.in">all@adoragroup.in</a>
                    </p>
                    <img src="{{url('assets/images/business_partner.png')}}" class="img-fluid">
                </div>
                <div class="col-md-7 partner_form">
                    <div class="col-md-12">
                        <h4>Partner Application Form</h4>
                        <div id="msg">
                            @if ($message = Session::get('view_msg'))
                                {!! $message !!}
                            @endif
                        </div>
                        <form id="basic-form" class="" method="post" action="{{route('web_become_partner_submit')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="fname" name="name" class="form-control" placeholder="Your Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="email" name="email" class="form-control" placeholder="Your Email">
                                    </div>
                                    <div class="form-group">
                                        <input onkeypress="return isNumberKey(event);" type="text" id="phone" name="phone" class="form-control" placeholder="Mobile">
                                    </div>
                                </div>
                                <div class="col-md-6 form-group textareas">
                                    <textarea id="address" name="address" class="form-control" rows="5" placeholder="Address"></textarea>
                                </div>
                                <div class="col-12 form-group">
                                    <textarea id="description" name="description" class="form-control" rows="5" placeholder="Description"></textarea>
                                </div>
                                <div class="form-group text-center col-12">
                                    <input type="button" class="btn btn-orange actionBtn" value="SUBMIT">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@push('scripts')
@endpush

@endsection
