@extends('layouts.admin')
@section('content')

    <script>
        function isNumberKey(evt){
            var charCode = (evt.which) ? evt.which : evt.keyCode
            return !(charCode > 31 && (charCode < 48 || charCode > 57));
        }

        $(document).ready(function(){
            $(".actionBtn").click(function(){
                title=$("#title").val();
                description=$("#description").val();
                button_name=$("#button_name").val();
                file=$(".file");
                var maxSize = '5010';

                if(title == null || title== "")
                {
                    $("#msg").html("<div class='alert alert-danger'><span data-dismiss='alert' class='close' onclick=this.parentElement.style.display='none';>&times;</span><i class='fa fa-warning'></i>  Please Enter Title</div>");
                    $("html, body").animate({scrollTop:0},"slow");
                }
                else if(description == null || description== "")
                {
                    $("#msg").html("<div class='alert alert-danger'><span data-dismiss='alert' class='close' onclick=this.parentElement.style.display='none';>&times;</span><i class='fa fa-warning'></i>  Please Enter Description</div>");
                    $("html, body").animate({scrollTop:0},"slow");
                }
                else if(button_name == null || button_name== "")
                {
                    $("#msg").html("<div class='alert alert-danger'><span data-dismiss='alert' class='close' onclick=this.parentElement.style.display='none';>&times;</span><i class='fa fa-warning'></i>  Please Enter Button Name</div>");
                    $("html, body").animate({scrollTop:0},"slow");
                }

                else if(!(file.val() == null || file.val() == "")&& !/(\.gif|\.jpg|\.jpeg|\.png|\.JPEG|\.JPG|\.PNG)$/i.test(file.val())) {
                    $("#msg").html("<div class='alert alert-danger'><span data-dismiss='alert' class='close' onclick=this.parentElement.style.display='none';>&times;</span><i class='fa fa-warning'></i>  Please Select Only Image File(Eg: .gif, .jpg, .png etc)...</div>");
                    $("html, body").animate({scrollTop: 0}, "slow");
                }
                else if (!(file.val() == null || file.val() == "")&&(file[0].files[0].size / 1024) > maxSize) {
                    $("#msg").html("<div class='alert alert-danger'><span data-dismiss='alert' class='close' onclick=this.parentElement.style.display='none';>&times;</span><i class='fa fa-warning'></i>  File size must under 5 MB!...</div>");
                    $("html, body").animate({scrollTop: 0}, "slow");
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
                        <a href="{{route('admin.business')}}" class="btn btn-dark  btn-sm"><i class="icon-action-undo"></i> Back</a>

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


                            <form id="basic-form" method="post" action="{{route('admin.business_update',$result->id)}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" maxlength="150" class="form-control" id="title" name="title" value="{{$result->title}}">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" rows="7" id="description" name="description">{{$result->description}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label>Button Name</label>
                                    <input type="text" maxlength="150" class="form-control" id="button_name" name="button_name" value="{{$result->button_name}}">
                                </div>
                                <div class="form-group">
                                    <label>Select Business Type</label>
                                    <select id="business" class="custom-select" name="bus_type">
                                        <option value="it_automation" {{$result->bus_type=='it_automation'?'selected':''}}>It Automation </option>
                                        <option value="consulting" {{$result->bus_type=='consulting'?'selected':''}}>Consulting </option>
                                        <option value="contracting" {{$result->bus_type=='contracting'?'selected':''}}>Contracting </option>
                                        <option value="trading" {{$result->bus_type=='trading'?'selected':''}}>Trading </option>
                                        <option value="operations" {{$result->bus_type=='operations'?'selected':''}}>Operations </option>

                                    </select>
                                </div>

                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>
                                            <input type="file" name="file" class="filestyle file" data-input="false" id="filestyle-1" tabindex="-1" style="position: absolute; clip: rect(0px 0px 0px 0px);" onchange="document.getElementById('blah1').src = window.URL.createObjectURL(this.files[0])">
                                            <div class="bootstrap-filestyle input-group">
                                            <span class="group-span-filestyle" tabindex="0">
                                            <label for="filestyle-1" class="btn btn-default "><span class="icon-span-filestyle glyphicon glyphicon-folder-open"></span>
                                            <span class="buttonText">&nbsp;Select Photo</span></label></span></div>

                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><img id="blah1" width="100" src="{{url('assets/images/business/'.$result->image)}}" height="100"></td>

                                    </tr>

                                    </tbody>
                                </table>
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