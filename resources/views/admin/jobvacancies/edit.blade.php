@extends('layouts.admin')
@section('content')

    <link rel="stylesheet" href="{{url('assets/admin/vendor/summernote/dist/summernote.css')}}">
    <script src="{{url('assets/admin/vendor/summernote/dist/summernote.js')}}"></script>
    <script>
        $(document).ready(function() {


            $('.summernote').summernote({
                fontSize:'18px',
                height: 200,                 // set editor height
                minHeight: null,             // set minimum height of editor
                maxHeight: null,             // set maximum height of editor
                focus: false,
            });
        });
    </script>

    <script>
        function isNumberKey(evt){
            var charCode = (evt.which) ? evt.which : evt.keyCode
            return !(charCode > 31 && (charCode < 48 || charCode > 57));
        }

        $(document).ready(function(){
            $(".actionBtn").click(function(){
                title=$("#title").val();
                flocation=$("#flocation").val();
                if(title == null || title== "")
                {
                    $("#msg").html("<div class='alert alert-danger'><span data-dismiss='alert' class='close' onclick=this.parentElement.style.display='none';>&times;</span><i class='fa fa-warning'></i>  Please Enter Title</div>");
                    $("html, body").animate({scrollTop:0},"slow");
                }
                else if(flocation == null || flocation== "")
                {
                    $("#msg").html("<div class='alert alert-danger'><span data-dismiss='alert' class='close' onclick=this.parentElement.style.display='none';>&times;</span><i class='fa fa-warning'></i>  Please Enter Location</div>");
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



    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-12 col-md-8 col-sm-12">
                        <h2><?=isset($pageTitle)?$pageTitle:''?></h2>
                        <hr/>
                        <a href="{{route('admin.jobvacancies')}}" class="btn btn-dark  btn-sm"><i class="icon-action-undo"></i> Back</a>

                    </div>


                </div>
            </div>
            <hr/>



            <div class="row clearfix">

                <div class="col-md-2"></div>

                <div class="col-md-8">
                    <div class="card" style="border-color:#2b2e33">

                        <div class="body">

                            <div id="msg"></div>


                            <form id="basic-form" method="post" action="{{route('admin.jobvacancies_update',$result->id)}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" maxlength="150" class="form-control" id="title" name="title" value="{{$result->title}}">
                                </div>

                                <div class="form-group">
                                    <label>Job Type</label>
                                    <select class="form-control" id="jobtype" name="jobtype">
                                        <option value="fulltime"  {{$result->jobtype=="fulltime"?'selected':''}}>Full Time </option>
                                        <option value="parttime"  {{$result->jobtype=="parttime"?'selected':''}}>Part Time</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Location</label>
                                    <input type="text" maxlength="300" class="form-control" id="flocation" name="location" value="{{$result->location}}">
                                </div>
                                <div class="form-group">
                                    <label>Summary</label>
                                    <textarea name="summary" class="form-control summernote" >{{$result->summary}}</textarea>
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
