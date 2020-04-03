@extends('layouts.admin')
@section('content')

    <script>
        function isNumberKey(evt){
            var charCode = (evt.which) ? evt.which : evt.keyCode
            return !(charCode > 31 && (charCode < 48 || charCode > 57));
        }

        $(document).ready(function(){
            $(".actionBtn").click(function(){
                fname=$("#fname").val();
                email=$("#email").val();
                password=$("#pwd").val();

                function validateEmail(email) {
                    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                    return re.test(email);
                }

                if(fname.trim() == null || fname.trim()== "")
                {
                    $("#msg").html("<div class='alert alert-danger'><span data-dismiss='alert' class='close' onclick=this.parentElement.style.display='none';>&times;</span><i class='fa fa-warning'></i>  Please Enter Admin name</div>");
                    $("html, body").animate({scrollTop:0},"slow");
                }

                else if(email.trim() == null || email.trim() == "")
                {
                    $("#msg").html("<div class='alert alert-danger'><span data-dismiss='alert' class='close' onclick=this.parentElement.style.display='none';>&times;</span><i class='fa fa-warning'></i>  Please Enter Email</div>");
                    $("html, body").animate({scrollTop:0},"slow");
                }
                else if(!validateEmail(email))
                {
                    $("#msg").html("<div class='alert alert-danger'><span data-dismiss='alert' class='close' onclick=this.parentElement.style.display='none';>&times;</span><i class='fa fa-warning'></i>  Please Enter Valid  Email Address</div>");
                    $("html, body").animate({scrollTop:0},"slow");
                }
                else if(password.trim() == null || password.trim()== "")
                {
                    $("#msg").html("<div class='alert alert-danger'><span data-dismiss='alert' class='close' onclick=this.parentElement.style.display='none';>&times;</span><i class='fa fa-warning'></i>  Please Enter Password</div>");
                    $("html, body").animate({scrollTop:0},"slow");
                }
                else if(password.trim().length<6)
                {
                    $("#msg").html("<div class='alert alert-danger'><span data-dismiss='alert' class='close' onclick=this.parentElement.style.display='none';>&times;</span><i class='fa fa-warning'></i>  password must be at least 6 characters long</div>");
                    $("html, body").animate({scrollTop:0},"slow");
                }
                else
                {
                    result = confirm("confirm?");
                    if(result) {
                        $(this).html('<i class="fa fa-spinner fa-spin"></i> <span>Loading...</span>');
                        $(this).attr("disabled", true);
                        $("#basic-form").submit();
                    }
                }
            });
        });

    </script>



    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-12 col-md-8 col-sm-12">
                        <h2><?=isset($pageTitle)?$pageTitle:''?></h2>
                        <hr/>
                        <a href="{{route('admin.settings')}}" class="btn btn-dark  btn-sm"><i class="icon-action-undo"></i> Back</a>

                    </div>


                </div>
            </div>
            <hr/>



            <div class="row clearfix">

                <div class="col-md-2"></div>

                <div class="col-md-8">
                    <div class="card" style="border-color:#2b2e33">

                        <div class="body">

                            <div id="msg">
                                @if ($message = Session::get('view_msg'))
                                    {!! $message !!}
                                @endif
                            </div>


                            <form id="basic-form" method="post" action="{{route('admin.settings_update',$result->id)}}">
                                @csrf
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" maxlength="50" class="form-control" id="fname" name="name" value="{{$result->name}}">
                                </div>

                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" maxlength="50" class="form-control" id="email" name="email" value="{{$result->email}}">
                                </div>

                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="text" maxlength="50" class="form-control" id="pwd" name="password" value="">
                                </div>


                                <br>
                                <button type="button" class="btn btn-primary actionBtn">Update</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-2"></div>


            </div>


        </div>

    </div>
@endsection
