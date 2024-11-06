@extends('layouts.admin')

@section('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
    <script>
        function isNumberKey(evt){
            var charCode = (evt.which) ? evt.which : evt.keyCode
            return !(charCode > 31 && (charCode < 48 || charCode > 57));
        }
    </script>
    <div id="main-content" class="file_manager">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-5 col-md-8 col-sm-12">
                        <h2>{{isset($pageTitle)?$pageTitle:''}} [ {{$count}} ]</h2>

                    </div>


                    <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                        <a href="{{route('admin.business_add')}}" class="btn btn-primary btn-lg"><i class="fa fa-plus-square"></i> Add</a>
                    </div>
                </div>
            </div>
            <div class="row clearfix">


                <div class="col-lg-12">


                    @if ($message = Session::get('view_msg'))
                        {!! $message !!}
                    @endif

                    <hr/>



                    <div class="card">

                        <div class="body table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <td width="200">Title</td>
                                    <th>Description</th>
                                    <th>Button Name</th>
                                    <th>Image</th>
                                    <th>Business type</th>
                                    <th width="100">Action</th>
                                </tr>
                                </thead>
                                <tbody>




                                @if(count($result)==0)
                                    <tr>
                                        <th colspan="8" style=" text-align: center;">

                                            <div class="alert alert-warning">
                                                <h5><i class="fa fa-warning"></i> not found!</h5>

                                            </div>

                                        </th>
                                    </tr>
                                @endif

                                @foreach($result as $index => $item)
                                    <tr>
                                        <th scope="row">{{$index + $result->firstItem()}}</th>
                                        <td>{{$item->title}}</td>
                                        <td width="20%">{{$item->description}}</td>
                                        <td>{{$item->button_name}}</td>
                                        <td>
                                            <img src="{{url('assets/images/business/'.$item->image)}}" width="100" height="100">
                                        </td>
                                        <td>{{$item->bus_type}}</td>
                                        <td>
                                            <a href="{{route('admin.business_edit',$item->id)}}"
                                               class="btn btn-info btn-sm" title="Edit"><i class="fa fa-edit"></i></a>
                                            <a onclick="del_itm('{{route('admin.business_delete',$item->id)}}')" href='javascript:void(0)' class='btn btn-danger btn-sm'
                                               data-toggle='modal' data-target='#del_itm_Modal' data-keyboard='false'
                                               data-backdrop='static'><i class='fa fa-trash-o'></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <hr/>
                <nav aria-label="Page navigation example">

                    {{$result->links()}}
                    {{--{{ $result->links() }}--}}
                </nav>
            </div>
        </div>
    </div>
@endsection